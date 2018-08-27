<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MasterUser extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
		$this->load->model('MasterUserModels');
    }
    public function index() {
		$ListUsers = $this->MasterUserModels->GetListUsers();
		$DataUsers = array();
		foreach($ListUsers as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->iduser,
				'Username'  => $value->username,
				'Nama'  => $value->nama,
				'Alamat'  => $value->alamat,
				'NoHP'  => $value->nohp,
				'Email'  => $value->email,
				'Level'  => $value->namalevel,
				'StatusAktif'  => $isactive
				);
				array_push($DataUsers,$Temp);
		}
		$Data = array(
				'DataUsers'  => $DataUsers
            );
		$this->session->set_userdata('page', $this->config->item('MasterUser'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterUser/MasterUserListView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
    }
	
}

/* End of file */
