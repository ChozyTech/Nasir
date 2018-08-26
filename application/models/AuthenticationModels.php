<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class AuthenticationModels extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function validate_login($postData){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistuser'));
		$this->db->where('username', $postData['username']);
        $this->db->where('password', md5($postData['password']));
		$this->db->where('isactive', 1);
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return false;
        else
            return $query->result();
    }
	
	function CheckPassword($postData){
        $this->db->select('*');
        $this->db->where('username', $postData['username']);
        $this->db->where('password', md5($postData['old-password']));
        $this->db->from($this->config->item('tbuser'));
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return $this->config->item('Failed');
        else
            return $this->config->item('Success');
    }
	function UpdatePassword($postData){
		$data = array(
        'username'=>$postData['username'],
        'password'=>md5($postData['new-password'])
		);
		$result = $this->config->item('Failed');
		$this->db->where('username', $data['username']);
		$this->db->update($this->config->item('tbuser'), $data);
		if ($this->db->affected_rows()) {
			$result = $this->config->item('Success');
		}
            return $result;
    }
}

/* End of file  */
