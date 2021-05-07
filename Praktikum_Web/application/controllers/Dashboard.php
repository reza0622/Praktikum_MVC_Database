<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
	{
		$this->load->view('header');
		$this->load->view('dashboard/index');
		$this->load->view('footer');
	}

	public function salam(){
		$this->load->view('header');
		$this->load->view('dashboard/salam');
		$this->load->view('footer');
	}

	public function hello($teman=""){
		$data["nama"]=$teman;
		$this->load->view('header');
		$this->load->view('dashboard/hello',$data);
		$this->load->view('footer');
	}
}
