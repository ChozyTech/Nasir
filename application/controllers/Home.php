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
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('Home/HomeView');
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
    }
	
}

/* End of file */
