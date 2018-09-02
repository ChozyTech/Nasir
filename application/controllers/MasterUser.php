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
		$this->load->model('MasterLevelModels');
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
				'StatusAktif'  => $isactive,
				'Keterangan'  => $value->keterangan
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
	
	
	function insert()
	{   
		$postData = $this->input->post();
			$postData['aktif'] = $this->input->post('aktif',TRUE)==null ? 0 : 1;
			$result = $this->MasterUserModels->Insert($postData);
			if ($result == $this->config->item('Success')){
				$this->session->set_userdata('messages_alert', 'User' .$this->config->item('SuccessAdded'));
				redirect(base_url('masteruser')); 	
			}
	}
	
	
	function delete()
	{   
		$username = $_POST['username'];
		$useractive = $_POST['useractive'];
		$result =  $this->MasterUserModels->Delete($username, $useractive);
		if($result){
			echo "Success";
		}
		else{
			echo "Failed";
		}
	}
	
	public function Add(){
		$ListLevel = $this->MasterLevelModels->GetListLevelActive();
		$DataLevel = array();
		foreach($ListLevel as $value){
			$Temp = array(
                'Id'  => $value->idlevel,
				'Nama'  => $value->namalevel
				);
				array_push($DataLevel,$Temp);
		}
		$Data = array(
				'DataLevel'  => $DataLevel
            );
		$this->session->set_userdata('page', 'Add '. $this->config->item('MasterUser'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterUser/MasterUserAddView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	public function Edit(){
		$ListLevel = $this->MasterLevelModels->GetListLevelActive();
		$DataLevel = array();
		foreach($ListLevel as $value){
			$Temp = array(
                'Id'  => $value->idlevel,
				'Nama'  => $value->namalevel
				);
				array_push($DataLevel,$Temp);
		}
		$idUser = $this->uri->segment(3);
		$ListUser = $this->MasterUserModels->GetUserById($idUser);
		$DataUser = array(
			'Id' => $ListUser[0]->iduser,
			'Username' => $ListUser[0]->username,
			'Password' => $ListUser[0]->password,
			'Nama' => $ListUser[0]->nama,
			'Alamat' => $ListUser[0]->alamat,
			'Email' => $ListUser[0]->email,
			'NoHP' => $ListUser[0]->nohp,
			'IsActive' => $ListUser[0]->isactive,
			'IdLevel' => $ListUser[0]->idlevel,
			'KodeLevel' => $ListUser[0]->kodelevel,
			'NamaLevel' => $ListUser[0]->namalevel,
			'Keterangan' => $ListUser[0]->keterangan
		);
		$Data = array(
			'DataLevel'  => $DataLevel,
			'DataUser'  => $DataUser
		);
		$this->session->set_userdata('page', 'Edit '. $this->config->item('MasterUser'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterUser/MasterUserEditView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	function update(){   
		$postData = $this->input->post();
		$postData['aktif'] = $this->input->post('aktif',TRUE)==null ? 0 : 1;
		$result = $this->MasterUserModels->Update($postData);
		if ($result == $this->config->item('Success')){
			$this->session->set_userdata('messages_alert', 'User' .$this->config->item('SuccessUpdated'));
			redirect(base_url('masteruser')); 	
		}
	}
	
		public function Detail(){
		$ListLevel = $this->MasterLevelModels->GetListLevelActive();
		$DataLevel = array();
		foreach($ListLevel as $value){
			$Temp = array(
                'Id'  => $value->idlevel,
				'Nama'  => $value->namalevel
				);
				array_push($DataLevel,$Temp);
		}
		$idUser = $this->uri->segment(3);
		$ListUser = $this->MasterUserModels->GetUserById($idUser);
		$DataUser = array(
			'Id' => $ListUser[0]->iduser,
			'Username' => $ListUser[0]->username,
			'Password' => $ListUser[0]->password,
			'Nama' => $ListUser[0]->nama,
			'Alamat' => $ListUser[0]->alamat,
			'Email' => $ListUser[0]->email,
			'NoHP' => $ListUser[0]->nohp,
			'IsActive' => $ListUser[0]->isactive,
			'IdLevel' => $ListUser[0]->idlevel,
			'KodeLevel' => $ListUser[0]->kodelevel,
			'NamaLevel' => $ListUser[0]->namalevel,
			'Keterangan' => $ListUser[0]->keterangan
		);
		$Data = array(
			'DataLevel'  => $DataLevel,
			'DataUser'  => $DataUser
		);
		$this->session->set_userdata('page', 'Detail '. $this->config->item('MasterUser'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterUser/MasterUserDetailView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	public function CheckExists()
	{   
		$username = $_POST['username'];
		$result =  $this->MasterUserModels->IsExist($username);
		if($result){
			echo $this->config->item('Failed');
		}
		else{
			echo $this->config->item('Success');
		}
	}
	
}

/* End of file */
