<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Sessions extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
    }
    public function index() {
		redirect(base_url());
    }
	
	 public function GetSessions()
    {
        $Data = array(
                'iduser'  => $this->session->userdata('iduser'),
				'username'  => $this->session->userdata('username'),
				'nama'  => $this->session->userdata('nama'),
				'idlevel'  => $this->session->userdata('idlevel'),
				'kodelevel'  => $this->session->userdata('kodelevel'),
				'namalevel'  => $this->session->userdata('namalevel'),
                'logged_in' => $this->session->userdata('logged_in'),
				'page' => $this->session->userdata('page'),
				'messages_alert' => $this->session->userdata('messages_alert')
            );
        echo json_encode($Data);
    }
	
}

/* End of file */
