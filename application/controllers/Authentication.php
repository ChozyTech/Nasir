<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Authentication extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        $this->load->model("AuthenticationModels");
    }

    public function index() {
    
        if($this->session->userdata('logged_in')) {
			$this->session->set_userdata('messages_alert', '');
			$this->session->set_userdata('alert_type', '');
            redirect(base_url("Home"));
        }else {
            $data = array(
			'alert' => false
			);
		$this->session->set_userdata('page', $this->config->item('Login'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Login/LoginView',$data);
		$this->load->view('Frame/_FooterView');

        }
    }

    public function login(){
        $postData = $this->input->post();
        $validate = $this->AuthenticationModels->validate_login($postData);
        if ($validate){
            $data = array(
                'iduser'  => $validate[0]->iduser,
				'username'  => $validate[0]->username,
				'nama'  => $validate[0]->nama,
				'idlevel'  => $validate[0]->idlevel,
				'kodelevel'  => $validate[0]->kodelevel,
				'namalevel'  => $validate[0]->namalevel,
                'logged_in' => TRUE,
				'messages_alert' => $this->config->item('Welcome') . $validate[0]->username . ' !',
				'alert_type' => $this->config->item('Success'),
            );
            $this->session->set_userdata($data);
			$this->session->set_userdata('page', $this->config->item('Dashboard'));
            redirect(base_url('Home')); 
        }
        else{
            $data = array(
			'alert' => TRUE
			);
		$this->session->set_userdata('page', $this->config->item('Login'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Login/LoginView',$data);
		$this->load->view('Frame/_FooterView');
        }
     
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }


}

/* End of file */
