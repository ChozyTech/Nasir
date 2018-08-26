<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
		if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
    }

    public function index() {
		$this->session->set_userdata('page', $this->config->item('Dashboard'));
		$this->load->view('frame/_headerView');
		$this->load->view('frame/menu/_headermenuView');
		$this->load->view('home/HomeView');
		$this->load->view('frame/_footerView');
    }
	
}

/* End of file */
