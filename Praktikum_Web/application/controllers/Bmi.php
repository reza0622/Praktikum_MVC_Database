<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

    public function index()
	{
		$this->load->model('bmi_model','bmi1');
		$this->bmi1->id=1;
		$this->bmi1->date='21-04-2021';
		$this->bmi1->kode='010001';
		$this->bmi1->nama='Faiz Fikri';
		$this->bmi1->gender='L';
		$this->bmi1->berat='53';
		$this->bmi1->tinggi='165';

		$this->load->model('bmi_model','bmi2');
		$this->bmi2->id=2;
		$this->bmi2->date='23-04-2021';
		$this->bmi2->kode='020001';
		$this->bmi2->nama='Pandan Wangi';
		$this->bmi2->gender='P';
		$this->bmi2->berat='80';
		$this->bmi2->tinggi='150';

		$this->load->model('bmi_model','bmi3');
		$this->bmi3->id=3;
		$this->bmi3->date='29-04-2021';
		$this->bmi3->kode='030001';
		$this->bmi3->nama='Riyandi Salim';
		$this->bmi3->gender='L';
		$this->bmi3->berat='45';
		$this->bmi3->tinggi='180';

		$list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3 ];
		$data['list_bmi']=$list_bmi;


		$this->load->view('header');
		$this->load->view('bmi/index', $data);
		$this->load->view('footer');
	}

	public function bmi_list(){
		$this->load->model('bmi_model');// load model
		$data['bmi']=$this->bmi_model->getAll();// query

		$this->load->view('header');
		$this->load->view('bmi/bmi_list',$data);
		$this->load->view('footer');
	}

	public function view($id){
		$this->load->model('bmi_model');
		$data['bmi']=$this->bmi_model->findById($id);

		$this->load->view('header');
		$this->load->view('bmi/view',$data);
		$this->load->view('footer');
	}
}
