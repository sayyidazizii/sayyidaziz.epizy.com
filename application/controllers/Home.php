<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
	public function __construct()
    {
        parent::__construct();
		 //pengecekan sesi
		//  if($this->session->userdata('is_login') != true){
		// 	redirect('SessLog');
		// }
        $this->load->model('M_user');
		$this->load->model('m_home');
    }
	public function index()
	{
		$data['home'] = $this->m_home->data();
		// var_dump($data);
		$this->load->view('web/home.php',$data);
	}
	public function logout()
    {
        $this->session->sess_destroy();
        //contoh panggil helper log
        // helper_log("logout", "logout");
        redirect('Home');
    }
}
