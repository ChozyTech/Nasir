<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MasterKriteria extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        $this->load->model("MasterKriteriaModels");
		
    }

    public function index() {
		$ListKriteria = $this->MasterKriteriaModels->GetListKriteria();
		$DataKriteria = array();
		foreach($ListKriteria as $value){
			$isactive = 'Non-Aktif';
			if (($value->isactive) == 1){
				$isactive = 'Aktif';
			}
			$Temp = array(
                'Id'  => $value->idkriteria,
				'Kode'  => $value->kodekriteria,
				'Nama'  => $value->namakriteria,
				'SangatMampu'  => $value->sangatmampu,
				'CukupMampu'  => $value->cukupmampu,
				'TidakMampu'  => $value->tidakmampu,
				'SangatTidakMampu'  => $value->sangattidakmampu,
				'StatusAktif'  => $isactive,
				'Keterangan'  => $value->keterangan
				);
				array_push($DataKriteria,$Temp);
		}
		$Data = array(
				'DataKriteria'  => $DataKriteria
            );
		$this->session->set_userdata('page', $this->config->item('MasterKriteria'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterKriteria/MasterKriteriaListView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
    }
	
	public function Add(){
		$this->session->set_userdata('page', 'Add '. $this->config->item('MasterKriteria'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterKriteria/MasterKriteriaAddView');
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	function insert()
	{   
		$postData = $this->input->post();
		if ($postData['kodekriteria'] == "<AUTO_GENERATE>"){
			$maxId = $this->MasterKriteriaModels->GetMax();
			$postData['kodekriteria'] = "KRITERIA_00".$maxId;
		}
			$postData['aktif'] = $this->input->post('aktif',TRUE)==null ? 0 : 1;
			$result = $this->MasterKriteriaModels->Insert($postData);
			if ($result == $this->config->item('Success')){
				$this->session->set_userdata('messages_alert', 'Kriteria' .$this->config->item('SuccessAdded'));
				redirect(base_url('masterkriteria')); 	
			}
	}
	
	function update(){   
		$postData = $this->input->post();
		$postData['aktif'] = $this->input->post('aktif',TRUE)==null ? 0 : 1;
		$result = $this->MasterKriteriaModels->Update($postData);
		if ($result == $this->config->item('Success')){
			$this->session->set_userdata('messages_alert', 'Kriteria' .$this->config->item('SuccessUpdated'));
			redirect(base_url('masterkriteria')); 	
		}
	}
	
	function delete()
	{   
		$kodekriteria = $_POST['kode'];
		$idKriteria = $_POST['idkriteria'];
		$useractive = $_POST['useractive'];
		$IsUsed = $this->MasterKriteriaModels->CheckIsUsed($idKriteria);
		$result = $this->config->item('Failed');
		if (!$IsUsed){
			$result =  $this->MasterKriteriaModels->Delete($kodekriteria, $useractive);
			if($result){
				echo $this->config->item('Success');
			}
			else{
				echo $this->config->item('Failed');
			}
		}
		else{
			echo $this->config->item('Failed');
		}
	}
	
	public function Edit(){
		$idKriteria = $this->uri->segment(3);
		$ListKriteria = $this->MasterKriteriaModels->GetKriteriaById($idKriteria);
		$DataKriteria = array(
			'Id'  => $ListKriteria[0]->idkriteria,
			'Kode'  => $ListKriteria[0]->kodekriteria,
			'Nama'  => $ListKriteria[0]->namakriteria,
			'Bobot'  => $ListKriteria[0]->bobot,
			'SangatMampu'  => $ListKriteria[0]->sangatmampu,
			'CukupMampu'  => $ListKriteria[0]->cukupmampu,
			'TidakMampu'  => $ListKriteria[0]->tidakmampu,
			'SangatTidakMampu'  => $ListKriteria[0]->sangattidakmampu,
			'StatusAktif'  => $ListKriteria[0]->isactive,
			'Keterangan'  => $ListKriteria[0]->keterangan
		);
		$Data = array(
			'DataKriteria'  => $DataKriteria
		);
		$this->session->set_userdata('page', 'Edit '. $this->config->item('MasterKriteria'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterKriteria/MasterKriteriaEditView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	public function Detail(){
		$idKriteria = $this->uri->segment(3);
		$ListKriteria = $this->MasterKriteriaModels->GetKriteriaById($idKriteria);
		$DataKriteria = array(
			'Id'  => $ListKriteria[0]->idkriteria,
			'Kode'  => $ListKriteria[0]->kodekriteria,
			'Nama'  => $ListKriteria[0]->namakriteria,
			'Bobot'  => $ListKriteria[0]->bobot,
			'SangatMampu'  => $ListKriteria[0]->sangatmampu,
			'CukupMampu'  => $ListKriteria[0]->cukupmampu,
			'TidakMampu'  => $ListKriteria[0]->tidakmampu,
			'SangatTidakMampu'  => $ListKriteria[0]->sangattidakmampu,
			'StatusAktif'  => $ListKriteria[0]->isactive,
			'Keterangan'  => $ListKriteria[0]->keterangan
		);
		$Data = array(
			'DataKriteria'  => $DataKriteria
		);
		$this->session->set_userdata('page', 'Detail '. $this->config->item('MasterKriteria'));
		$this->load->view('Frame/_HeaderView');
		$this->load->view('Frame/Menu/_HeadermenuView');
		$this->load->view('MasterKriteria/MasterKriteriaDetailView', $Data);
		$this->load->view('Frame/Menu/_FootermenuView');
		$this->load->view('Frame/_FooterView');
	}
	
	public function CheckExists()
	{   
		$kode = $_POST['kodekriteria'];
		$result =  $this->MasterKriteriaModels->IsExist($kode);
		if($result){
			echo $this->config->item('Failed');
		}
		else{
			echo $this->config->item('Success');
		}
	}
	
}

/* End of file */
