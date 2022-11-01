<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller { 
	public function __construct()
    {
        parent::__construct();
		 //pengecekan sesi
		//  if($this->session->userdata('is_login') != true){
		// 	redirect('SessLog');
		// }
        $this->load->model('M_message');
    }
	public function index()
	{
        $this->load->view('web/message.php');
	}
	public function All()
	{
		 //pagination
		 $this->load->database();
		 $jumlah_data = $this->M_message->jumlah_data();
		 $this->load->library('pagination');
		 $config['base_url'] = base_url() . 'index.php/Message/All/';
		 $config['total_rows'] = $jumlah_data;
		 $config['per_page'] = 5;

		  // Membuat Style pagination untuk BootStrap v4
		  $config['first_link']       = 'First';
		  $config['last_link']        = 'Last';
		  $config['next_link']        = 'Next';
		  $config['prev_link']        = 'Prev';
		  $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center ">';
		  $config['full_tag_close']   = '</ul></nav></div>';
		  $config['num_tag_open']     = '<li class="page-item"><span class="page-link bg-info text-light">';
		  $config['num_tag_close']    = '</span></li>';
		  $config['cur_tag_open']     = '<li class="page-item active bg-info text-light"><span class="page-link bg-info text-light">';
		  $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		  $config['next_tag_open']    = '<li class="page-item"><span class="page-link bg-info text-light">';
		  $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		  $config['prev_tag_open']    = '<li class="page-item"><span class="page-link bg-info text-light">';
		  $config['prev_tagl_close']  = '</span>Next</li>';
		  $config['first_tag_open']   = '<li class="page-item"><span class="page-link bg-info text-light">';
		  $config['first_tagl_close'] = '</span></li>';
		  $config['last_tag_open']    = '<li class="page-item"><span class="page-link bg-info text-light">';
		  $config['last_tagl_close']  = '</span></li>';


		 $from = $this->uri->segment(3);
		 $this->pagination->initialize($config);
		 $data['message'] = $this->M_message->data($config['per_page'], $from);
		 $data['pagination'] = $this->pagination->create_links();

		 $query = $this->input->post('search');
		 $data['search'] = $query;
 
		 if(isset($query)){
			 $data['message'] = $this->M_message->search($query);
		 }else{
			$data['message'] = $this->M_message->data($config['per_page'], $from);
		 }

		 // var_dump($data);
		 //$this->load->view('Log/index', $data);
		//$data['message'] = $this->M_message->data();
		// var_dump($data);
		//$this->load->view('web/chats.php',$data);
        $this->load->view('web/messageAll.php',$data);
	}
	public function insert()
	{
		$username = $this->input->post('username');
		$message = $this->input->post('message');
	
		$Arrinsert = array(
			'username' =>$username,
			'message' =>$message
		);
		
	$this->M_message->insert($Arrinsert);
	$this->session->set_flashdata('sukses','berhasil');
    redirect('Message');
	}
	public function logout()
    {
        $this->session->sess_destroy();
        //contoh panggil helper log
        // helper_log("logout", "logout");
        redirect('Home');
    }
}
