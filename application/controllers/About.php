<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller { 
	public function __construct()
    {
	parent::__construct();
	//pengecekan sesi
   //  if($this->session->userdata('is_login') != true){
   // 	redirect('Login');
   // }
   $this->load->model('m_about');
   $this->load->model('m_skill');
   $this->load->model('m_sosmed');



	}
	public function index()
	{
		$data['about'] = $this->m_about->data();
		$data['skill'] = $this->m_skill->data();
		$data['sosmed'] = $this->m_sosmed->data();
		$this->load->view('web/about.php',$data);
	}
}
