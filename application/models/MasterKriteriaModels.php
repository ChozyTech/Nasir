<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MasterKriteriaModels extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function GetListKriteria(){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistkriteria'));
        $query=$this->db->get();
        return $query->result();
    }
	
	function GetKriteriaById($idKriteria){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistkriteria'));
		$this->db->where('idkriteria', $idKriteria);
        $query=$this->db->get();
        return $query->result();
    }
	
	function Insert($postData){
		$isnumerical = is_numeric($postData['sangattidakmampu']);
		$data = array(
        'kodekriteria'=>$postData['kodekriteria'],
        'namakriteria'=>$postData['namakriteria'],
		'bobot'=>$postData['bobot'],
		'sangatmampu'=>$postData['sangatmampu'],
		'cukupmampu'=>$postData['cukupmampu'],
		'tidakmampu'=>$postData['tidakmampu'],
		'sangattidakmampu'=>$postData['sangattidakmampu'],
		'isnumeric'=>$isnumerical,
		'isactive'=>$postData['aktif'],
		'isdelete'=>'0',
		'createdby'=>$this->session->userdata('iduser'),
		'modifiedby'=>$this->session->userdata('iduser'),
		'keterangan'=>$postData['keterangan']
    );
		$result = $this->config->item('Failed');
		$this->db->set('createddate', 'NOW()', FALSE);
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->insert($this->config->item('tbkriteria'),$data);
		if ($this->db->affected_rows()) {
			$result = $this->config->item('Success');
		}
            return $result;
    }
	
	function Update($postData){
		$isnumerical = is_numeric($postData['sangattidakmampu']);
		$data = array(
		'namakriteria'=>$postData['namakriteria'],
		'bobot'=>$postData['bobot'],
		'sangatmampu'=>$postData['sangatmampu'],
		'cukupmampu'=>$postData['cukupmampu'],
		'tidakmampu'=>$postData['tidakmampu'],
		'sangattidakmampu'=>$postData['sangattidakmampu'],
		'isnumeric'=>$isnumerical,
		'isactive'=>$postData['aktif'],
		'modifiedby'=>$this->session->userdata('iduser'),
		'keterangan'=>$postData['keterangan']
		);
	
		$result = $this->config->item('Failed');
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->where('idkriteria', $postData['idkriteria']);
		$this->db->update($this->config->item('tbkriteria'),$data);
		return $this->config->item('Success');
    }
	
	function Delete($kodekriteria, $useractive){
		$data = array(
		'isdelete' =>1,
		'modifiedby' => $useractive
    );
		$result = false;
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->where('kodekriteria', $kodekriteria);
		$this->db->update($this->config->item('tbkriteria'), $data);
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
    
    function GetNilaiKriteria($idKriteria, $nilai){
        $this->db->select('*');
        $this->db->from($this->config->item('viewrangekriteria'));
        $this->db->where('idkriteria', $idKriteria);
        $this->db->where('kemampuan <=', $nilai);
        $this->db->order_by("kemampuan", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
		$result = $query->row();
        return $result->alias;
    }
}

/* End of file  */
