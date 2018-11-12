<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class LaporanSPK extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        $this->load->model("DataModels");
    }

 public function index() {
        $ListKriteria = $this->MasterKriteriaModels->GetListKriteria();
		$DataKriteria = array();
		foreach($ListKriteria as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->idkriteria,
				'Kode'  => $value->kodekriteria,
				'Nama'  => $value->namakriteria,
                'Bobot'  => $value->bobot,
				'SangatMampu'  => $value->sangatmampu,
				'CukupMampu'  => $value->cukupmampu,
				'TidakMampu'  => $value->tidakmampu,
				'SangatTidakMampu'  => $value->sangattidakmampu,
				'StatusAktif'  => $isactive,
				'Keterangan'  => $value->keterangan
				);
				array_push($DataKriteria,$Temp);
		}
    
		$ListData = $this->DataModels->GetListData();
		$DataPeserta = array();
		foreach($ListData as $value){
            $ListDataDetail = $this->DataModels->GetDetailById($value->iddata);
            $DataPesertaDetail = array();
            
            foreach ($ListDataDetail as $valuedetail){
                $TempDetail = array(
                'IdKriteria'  => $valuedetail->idkriteria,
				'NamaKriteria'  => $valuedetail->namakriteria,
				'Nilai'  => $valuedetail->nilai,
				'NilaiInput'  => $valuedetail->nilaiinput,
				'NilaiAlias'  => $valuedetail->nilaialias
				);
				array_push($DataPesertaDetail,$TempDetail);
            }
			$Temp = array(
                'Id'  => $value->iddata,
				'NoPeserta'  => $value->no,
				'Nama'  => $value->nama,
				'Alamat'  => $value->alamat,
				'Keterangan'  => $value->keterangan,
                'Detail' => $DataPesertaDetail
				);
				array_push($DataPeserta,$Temp);
		}
        // Mendapatkan Nilai x1 - xn
        $x = array();
            foreach($DataKriteria as $value){
                $tempnilai = $this->DataModels->GetNilaiX($value['Id']);
                array_push($x,$tempnilai);
        }
        
        // Mendapatkan nilai r1 - rn
        
        $r = array();
            foreach($DataPeserta as $value){
                $c = array();
                $count = 0;
                foreach($value['Detail'] as $valuedetail){
                    $temp = $valuedetail['NilaiAlias'] / $x[$count];
                    $count++;
                    array_push($c,$temp);
                }
                array_push($r,$c);
            }
        // Mendapatkan nilai y1 - yn
        $y = array();
        $p = 0;
            foreach($DataPeserta as $value){
                $c1 = array();
                $count = 0;
                foreach($value['Detail'] as $valuedetail){
                    $temp = $valuedetail['NilaiAlias'] * $r[$p][$count];
                    $count++;
                    array_push($c1,$temp);
                }
                $p++;
                array_push($y,$c1);
            }
        // Transpose nilai $y ke $Yi
        
        $Yi = array();
            for ($i=0;$i<count($x);$i++){
                $tempYi = array();
                foreach ($y as $value){
                    array_push($tempYi,$value[$i]);
                }
                array_push($Yi,$tempYi);
            }
            
        // Mendapatkan nilai $APlus dan $Amin dari setiap kriteria
            
        $APlus = array();
        $AMin = array();
            for ($i=0;$i<count($Yi);$i++){
                $MaxAPlus = max($Yi[$i]);
                $MinAMin  = min($Yi[$i]);
                array_push($APlus,$MaxAPlus);
                array_push($AMin,$MinAMin);
            }
            
        $SPlus = array();
        $SMin = array();
            for ($i=0;$i<count($y);$i++){
                $tempnilaiAPlus = 0;
                $tempnilaiAMin = 0;
                for ($j=0;$j<count($Yi);$j++){
                    $tempnilaiAPlus = $tempnilaiAPlus + pow(($APlus[$j] - $y[$i][$j]),2);
                    $tempnilaiAMin = $tempnilaiAMin + pow(($AMin[$j] - $y[$i][$j]),2);
                }
                array_push($SPlus,sqrt($tempnilaiAPlus));
                array_push($SMin,sqrt($tempnilaiAMin));
            }
            
        // rewrite DataPeserta
        $DataPesertaV = array();
        $n = 0;
		foreach($ListData as $valueV){
            $ListDataDetailV = $this->DataModels->GetDetailById($valueV->iddata);
            $DataPesertaDetailV = array();
            
            foreach ($ListDataDetailV as $valuedetailV){
                $TempDetailV = array(
                'IdKriteria'  => $valuedetailV->idkriteria,
				'NamaKriteria'  => $valuedetailV->namakriteria,
				'Nilai'  => $valuedetailV->nilai,
				'NilaiInput'  => $valuedetailV->nilaiinput,
				'NilaiAlias'  => $valuedetailV->nilaialias
				);
				array_push($DataPesertaDetailV,$TempDetailV);
            }
            $NilaiAkhir = ($SMin[$n] / ($SMin[$n] + $SPlus[$n]));
			$TempV = array(
                'Id'  => $valueV->iddata,
				'NoPeserta'  => $valueV->no,
				'Nama'  => $valueV->nama,
				'Alamat'  => $valueV->alamat,
				'Keterangan'  => $valueV->keterangan,
                'Detail' => $DataPesertaDetailV,
                'NilaiAkhir' => $NilaiAkhir,
				);
				array_push($DataPesertaV,$TempV);
                $n++;
		}
        $DataPeserta = $DataPesertaV;
        
        $sortArray = array();

        foreach($DataPesertaV as $val){
            foreach($val as $key=>$value){
                if(!isset($sortArray[$key])){
                    $sortArray[$key] = array();
                }
                $sortArray[$key][] = $value;
            }
        }
        
        $orderby = "NilaiAkhir"; //change this to whatever key you want from the array
        
        array_multisort($sortArray[$orderby],SORT_DESC,$DataPesertaV);

            
        
        
        
		$Data = array(
                'DataKriteria'  => $DataKriteria,
				'DataPeserta'  => $DataPeserta,
                'DataR'  => $r,
                'DataY'  => $y,
                'DataYi'  => $Yi,
                'DataAPlus'  => $APlus,
                'DataAMin'  => $AMin,
                'DataSPlus'  => $SPlus,
                'DataSMin'  => $SMin,
                'DataPesertaV'  => $DataPesertaV,
                
            );
		$this->session->set_userdata('page', $this->config->item('LaporanSPK'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('LaporanSPK/LaporanSPKView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
        //header('Content-Type: application/json');
        //echo json_encode($DataPeserta);
    }
}

/* End of file */
