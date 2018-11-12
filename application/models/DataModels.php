<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class DataModels extends CI_Model {

    function __construct() {
        parent::__Construct();
		$this->load->model("MasterKriteriaModels");
		
    }


    function GetListData(){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistdata'));
        $query=$this->db->get();
        return $query->result();
    }
    
    function GetDataById($idData){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistdata'));
		$this->db->where('iddata', $idData);
        $query=$this->db->get();
        return $query->result();
    }
    
    function GetDetailById($idData){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistdatadetail'));
		$this->db->where('iddata', $idData);
        $query=$this->db->get();
        return $query->result();
    }
	
	
	function GetIdDataByNo($no){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistdata'));
		$this->db->where('no', $no);
        $this->db->limit(1);
        $query = $this->db->get();
		$result = $query->row();
        return $result->iddata;
    }
	
	
	function Insert($postData, $DataKriteria){
		$data = array(
        'no'=>$postData['nopeserta'],
        'nama'=>$postData['namapeserta'],
		'ibu'=>$postData['namaibu'],
		'norek'=>$postData['norek'],
		'nokk'=>$postData['nokk'],
		'alamat'=>$postData['alamat'],
		'isvalid'=>'1',
		'isactive'=>'1',
		'isdelete'=>'0',
		'createdby'=>$this->session->userdata('iduser'),
		'modifiedby'=>$this->session->userdata('iduser'),
		'keterangan'=>$postData['keterangan']
    );
		$result = $this->config->item('Failed');
		$this->db->set('createddate', 'NOW()', FALSE);
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->insert($this->config->item('tbdata'),$data);
		if ($this->db->affected_rows()) {
			$result = $this->config->item('Success');
		}
        $iddata = 0;
        if ($result == $this->config->item('Success')){
            $iddata = $this->GetIdDataByNo($postData['nopeserta']);
        }
        foreach ($DataKriteria as $kriteria){
            if ($result == $this->config->item('Success')){
                $aliaskriteria = 0;
                $nilaikriteria = $postData[$kriteria['Id']];
                if ($kriteria['IsNumeric'] == 1){
                    if ($nilaikriteria >= $kriteria['SangatMampu']){
                        $aliaskriteria = 1;
                    }
                    else if ($nilaikriteria < $kriteria['SangatTidakMampu']){
                        $aliaskriteria = 4;
                    }
                    else{
                        $aliaskriteria = $this->MasterKriteriaModels->GetNilaiKriteria($kriteria['Id'],$nilaikriteria);
                    }
                }
                else{
                    $aliaskriteria = $nilaikriteria;
                }
                
                $datadetail = array(
                'iddata'=>$iddata,
                'idkriteria'=>$kriteria['Id'],
        		'nilai'=>$nilaikriteria,
        		'nilaialias'=>$aliaskriteria
                );
                $result = $this->config->item('Failed');
        		$this->db->insert($this->config->item('tbdatadetail'),$datadetail);
        		if ($this->db->affected_rows()) {
        			$result = $this->config->item('Success');
        		}
                
            }
        }
        
            return $result;
    }
	
	function Update($postData, $DataKriteria){
	$data = array(
        'no'=>$postData['nopeserta'],
        'nama'=>$postData['namapeserta'],
		'ibu'=>$postData['namaibu'],
		'norek'=>$postData['norek'],
		'nokk'=>$postData['nokk'],
		'alamat'=>$postData['alamat'],
		'isvalid'=>'1',
		'isactive'=>'1',
		'isdelete'=>'0',
		'modifiedby'=>$this->session->userdata('iduser'),
		'keterangan'=>$postData['keterangan']
    );
	
		
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->where('iddata', $postData['iddata']);
		$this->db->update($this->config->item('tbdata'),$data);
        
        $result = $this->DeleteDetailData($postData['iddata']);
        
        foreach ($DataKriteria as $kriteria){
            if ($result == $this->config->item('Success')){
                $aliaskriteria = 0;
                $nilaikriteria = $postData[$kriteria['Id']];
                if ($kriteria['IsNumeric'] == 1){
                    if ($nilaikriteria >= $kriteria['SangatMampu']){
                        $aliaskriteria = 1;
                    }
                    else if ($nilaikriteria < $kriteria['SangatTidakMampu']){
                        $aliaskriteria = 4;
                    }
                    else{
                        $aliaskriteria = $this->MasterKriteriaModels->GetNilaiKriteria($kriteria['Id'],$nilaikriteria);
                    }
                }
                else{
                    $aliaskriteria = $nilaikriteria;
                }
                
                $datadetail = array(
                'iddata'=>$postData['iddata'],
                'idkriteria'=>$kriteria['Id'],
        		'nilai'=>$nilaikriteria,
        		'nilaialias'=>$aliaskriteria
                );
                $result = $this->config->item('Failed');
        		$this->db->insert($this->config->item('tbdatadetail'),$datadetail);
        		if ($this->db->affected_rows()) {
        			$result = $this->config->item('Success');
        		}
                
            }
        }
		return $result;
    }
	
	function Delete($kodepeserta, $useractive){
		$data = array(
		'isdelete' =>1,
		'modifiedby' => $useractive
    );
		$result = false;
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->where('no', $kodepeserta);
		$this->db->update($this->config->item('tbdata'), $data);
		if ($this->db->affected_rows()) {
			$result = true;
		}
            return $result;
    }
	
	function GetMax(){
        $this->db->select('MAX(idkriteria)+1 AS MAXID');
        $this->db->from($this->config->item('tbkriteria'));
		$query = $this->db->get();
		 $result = $query->row();
        return $result->MAXID;
    }
	
	function CheckIsUsed($idKriteria){
        $this->db->select('*');
        $this->db->from($this->config->item('tbdatadetail'));
		$this->db->where('idkriteria', $idKriteria);
		$query = $this->db->get();
		if ($query->num_rows() > 0){
            return true;
		}
        else{
            return false;
		}
    }
	
	function IsExist($kode){
		$this->db->select('*');
        $this->db->from($this->config->item('viewlistkriteria'));
		$this->db->where('kodekriteria', $kode);
        $query=$this->db->get();
        if ($query->num_rows() > 0){
            return true;
		}
        else{
            return false;
		}
    }
    function DeleteDetailData($IdData){
    	$this->db->where('iddata', $IdData);
        $this->db->delete($this->config->item('tbdatadetail'));
        if ($this->db->affected_rows()) {
            return $this->config->item('Success');
		}
        else{
            return $this->config->item('Failed');
		}
    }
    
        
    function GetListReportData(){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistreportdata'));
        $query=$this->db->get();
        return $query->result();
    }
    
    function GetNilaiX($id){
        $this->db->select($this->config->item('calcx') . "(" . $id . ") as NilaiX");
		$query = $this->db->get();
		$result = $query->row();
        return $result->NilaiX;
    }
}

/* End of file  */
