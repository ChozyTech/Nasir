<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MasterLevelModels extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function GetListLevelActive(){
        $this->db->select('*');
        $this->db->from($this->config->item('viewlistlevel'));
		$this->db->where('isactive', 1);
		$this->db->where('idlevel <>', 1);
        $query=$this->db->get();
        return $query->result();
    }
}

/* End of file  */
