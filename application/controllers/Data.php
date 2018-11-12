<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Data extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        $this->load->model("DataModels");
		$this->load->model("MasterKriteriaModels");
		
    }

    public function index() {
		$ListData = $this->DataModels->GetListData();
		$DataPeserta = array();
		foreach($ListData as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->iddata,
				'NoPeserta'  => $value->no,
				'Nama'  => $value->nama,
				'Alamat'  => $value->alamat,
				'Keterangan'  => $value->keterangan
				);
				array_push($DataPeserta,$Temp);
		}
		$Data = array(
				'DataPeserta'  => $DataPeserta
            );
		$this->session->set_userdata('page', $this->config->item('Data'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('Data/DataListView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
    }
	
	public function Add(){
		$ListData = $this->MasterKriteriaModels->GetListKriteria();
		$DataKriteria = array();
		foreach($ListData as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->idkriteria,
				'KodeKriteria'  => $value->kodekriteria,
				'NamaKriteria'  => $value->namakriteria,
                'SangatMampu'  => $value->sangatmampu,
                'CukupMampu'  => $value->cukupmampu,
                'TidakMampu'  => $value->tidakmampu,
                'SangatTidakMampu'  => $value->sangattidakmampu,
                'IsNumeric'  => $value->isnumeric,
				);
				array_push($DataKriteria,$Temp);
		}
		$Data = array(
				'DataKriteria'  => $DataKriteria
            );
		
		$this->session->set_userdata('page', 'Add '. $this->config->item('Data'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('Data/DataAddView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	function insert()
	{   
		$postData = $this->input->post();
        
        // get Data Kriteria
        
        $ListData = $this->MasterKriteriaModels->GetListKriteria();
		$DataKriteria = array();
		foreach($ListData as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->idkriteria,
				'KodeKriteria'  => $value->kodekriteria,
				'NamaKriteria'  => $value->namakriteria,
                'SangatMampu'  => $value->sangatmampu,
                'CukupMampu'  => $value->cukupmampu,
                'TidakMampu'  => $value->tidakmampu,
                'SangatTidakMampu'  => $value->sangattidakmampu,
                'IsNumeric'  => $value->isnumeric,
				);
				array_push($DataKriteria,$Temp);
		}
        
        $result = $this->DataModels->Insert($postData, $DataKriteria);
        echo $result;       
	}
	
	function update()
	{   
		$postData = $this->input->post();
        //var_dump($postData);
        // get Data Kriteria
        
        $ListData = $this->MasterKriteriaModels->GetListKriteria();
		$DataKriteria = array();
		foreach($ListData as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->idkriteria,
				'KodeKriteria'  => $value->kodekriteria,
				'NamaKriteria'  => $value->namakriteria,
                'SangatMampu'  => $value->sangatmampu,
                'CukupMampu'  => $value->cukupmampu,
                'TidakMampu'  => $value->tidakmampu,
                'SangatTidakMampu'  => $value->sangattidakmampu,
                'IsNumeric'  => $value->isnumeric,
				);
				array_push($DataKriteria,$Temp);
		}
        
        $result = $this->DataModels->Update($postData, $DataKriteria);
        echo $result;      
	}
	
	function delete()
	{   
		$kodepeserta = $_POST['kode'];
		$idpeserta = $_POST['idpeserta'];
		$useractive = $_POST['useractive'];
		$result = $this->config->item('Failed');
		$result =  $this->DataModels->Delete($kodepeserta, $useractive);
		if($result){
			echo $this->config->item('Success');
		}
		else{
			echo $this->config->item('Failed');
		}
	}
	
	public function Edit(){
		$idData = $this->uri->segment(3);
		$ListData = $this->DataModels->GetDataById($idData);
		$DataPeserta = array(
			'Id'  => $ListData[0]->iddata,
			'NoPeserta'  => $ListData[0]->no,
			'NamaPeserta'  => $ListData[0]->nama,
			'NamaIbu'  => $ListData[0]->ibu,
			'NoRek'  => $ListData[0]->norek,
			'NoKK'  => $ListData[0]->nokk,
			'Alamat'  => $ListData[0]->alamat,
			'StatusValid'  => $ListData[0]->isvalid,
			'StatusAktif'  => $ListData[0]->isactive,
			'Keterangan'  => $ListData[0]->keterangan
		);
        
        $ListDetail = $this->DataModels->GetDetailById($idData);
		$DataDetail = array();
		foreach($ListDetail as $value){
			$Temp = array(
                'Id'  => $value->iddetail,
				'IdData'  => $value->iddata,
				'IdKriteria'  => $value->idkriteria,
                'NamaKriteria'  => $value->namakriteria,
                'Nilai'  => $value->nilai,
                'NilaiAlias'  => $value->nilaialias,
				);
				array_push($DataDetail,$Temp);
		}
        
        $ListKriteria = $this->MasterKriteriaModels->GetListKriteria();
		$DataKriteria = array();
		foreach($ListKriteria as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->idkriteria,
				'KodeKriteria'  => $value->kodekriteria,
				'NamaKriteria'  => $value->namakriteria,
                'SangatMampu'  => $value->sangatmampu,
                'CukupMampu'  => $value->cukupmampu,
                'TidakMampu'  => $value->tidakmampu,
                'SangatTidakMampu'  => $value->sangattidakmampu,
                'IsNumeric'  => $value->isnumeric,
				);
				array_push($DataKriteria,$Temp);
		}
        
		$Data = array(
			'DataPeserta'  => $DataPeserta,
            'DataDetail'  => $DataDetail,
            'DataKriteria'  => $DataKriteria
		);
		$this->session->set_userdata('page', 'Edit '. $this->config->item('Data'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('Data/DataEditView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	public function Detail(){
		$idData = $this->uri->segment(3);
		$ListData = $this->DataModels->GetDataById($idData);
		$DataPeserta = array(
			'Id'  => $ListData[0]->iddata,
			'NoPeserta'  => $ListData[0]->no,
			'NamaPeserta'  => $ListData[0]->nama,
			'NamaIbu'  => $ListData[0]->ibu,
			'NoRek'  => $ListData[0]->norek,
			'NoKK'  => $ListData[0]->nokk,
			'Alamat'  => $ListData[0]->alamat,
			'StatusValid'  => $ListData[0]->isvalid,
			'StatusAktif'  => $ListData[0]->isactive,
			'Keterangan'  => $ListData[0]->keterangan
		);
        
        $ListDetail = $this->DataModels->GetDetailById($idData);
		$DataDetail = array();
		foreach($ListDetail as $value){
			$Temp = array(
                'Id'  => $value->iddetail,
				'IdData'  => $value->iddata,
				'IdKriteria'  => $value->idkriteria,
                'NamaKriteria'  => $value->namakriteria,
                'Nilai'  => $value->nilai,
                'NilaiAlias'  => $value->nilaialias,
				);
				array_push($DataDetail,$Temp);
		}
        
        $ListKriteria = $this->MasterKriteriaModels->GetListKriteria();
		$DataKriteria = array();
		foreach($ListKriteria as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->idkriteria,
				'KodeKriteria'  => $value->kodekriteria,
				'NamaKriteria'  => $value->namakriteria,
                'SangatMampu'  => $value->sangatmampu,
                'CukupMampu'  => $value->cukupmampu,
                'TidakMampu'  => $value->tidakmampu,
                'SangatTidakMampu'  => $value->sangattidakmampu,
                'IsNumeric'  => $value->isnumeric,
				);
				array_push($DataKriteria,$Temp);
		}
        
		$Data = array(
			'DataPeserta'  => $DataPeserta,
            'DataDetail'  => $DataDetail,
            'DataKriteria'  => $DataKriteria
		);
		$this->session->set_userdata('page', 'Detail '. $this->config->item('Data'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('Data/DataDetailView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	public function CheckExists()
	{   
		$kode = $_POST['kodekriteria'];
		$result =  $this->MasterKriteriaModels->IsExist($kode);
		if($result){
			echo $this->config->item('Failed');
		}
		else{
			echo $this->config->item('Success');
		}
	}
	
}

/* End of file */
