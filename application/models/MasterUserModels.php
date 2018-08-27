<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MasterUserModels extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function GetListUsers(){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistuser'));
		$this->db->where('iduser <>', '1');
        $query=$this->db->get();
        return $query->result();
    }
	
	function GetUserById($idUser){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistuser'));
		$this->db->where('iduser', $idUser);
        $query=$this->db->get();
        return $query->result();
    }
	
	function Insert($postData){
		$data = array(
        'username'=>$postData['username'],
        'password'=>md5($postData['password']),
		'nama'=>$postData['nama'],
		'alamat'=>$postData['alamat'],
		'email'=>$postData['email'],
		'nohp'=>$postData['nohp'],
		'kota'=>$postData['kota'],
		'idlevel'=>$postData['level'],
		'isactive'=>$postData['aktif'],
		'isdelete'=>'0',
		'createdby'=>$this->session->userdata('iduser'),
		'modifiedby'=>$this->session->userdata('iduser'),
		'keterangan'=>$postData['keterangan']
    );
		$result = $this->config->item('Failed');
		$this->db->set('createddate', 'NOW()', FALSE);
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->insert($this->config->item('tbuser'),$data);
		if ($this->db->affected_rows()) {
			$result = $this->config->item('Success');
		}
            return $result;
    }
	
	function Update($postData){
		$data = array(
		'nama'=>$postData['nama'],
		'alamat'=>$postData['alamat'],
		'email'=>$postData['email'],
		'nohp'=>$postData['nohp'],
		'kota'=>$postData['kota'],
		'idlevel'=>$postData['level'],
		'isactive'=>$postData['aktif'],
		'modifiedby'=>$this->session->userdata('iduser'),
		'keterangan'=>$postData['keterangan']
    );
	
		$result = $this->config->item('Failed');
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->where('iduser', $postData['iduser']);
		$this->db->update($this->config->item('tbuser'),$data);
		return $this->config->item('Success');
    }
	
	function Delete($username, $useractive){
		$data = array(
		'isdelete' =>1,
		'modifiedby' => $useractive
    );
		$result = false;
		$this->db->set('modifieddate', 'NOW()', FALSE);
		$this->db->where('username', $username);
		$this->db->update($this->config->item('tbuser'), $data);
		if ($this->db->affected_rows()) {
			$result = true;
		}
            return $result;
    }
	
	function IsExist($username){
		$this->db->select('*');
        $this->db->from($this->config->item('viewlistuser'));
		$this->db->where('username', $username);
        $query=$this->db->get();
        if ($query->num_rows() > 0){
            return true;
		}
        else{
            return false;
		}
    }
}

/* End of file  */
