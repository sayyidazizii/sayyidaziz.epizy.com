<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//pengecekan sesi
		//  if($this->session->userdata('is_login') != true){
		// 	redirect('Login');
		// }
		$this->load->model('m_post');
	}
	public function index()
	{

		$query = $this->input->post('search');
		$data['search'] = $query;

		if(isset($query)){
			$data['post'] = $this->m_post->news($query);
        }else if(isset($query)){
			$data['post'] = $this->m_post->desc($query);
		}else{
			$data['post'] = $this->m_post->data();
		}
		// var_dump($data);
		$this->load->view('web/post.php', $data);
	}
	public function detail_post($post)
	{
		$post = $this->m_post->getbyid($post);
		$data = array(
			'post' => $post
		);
		//var_dump($data);
		$this->load->view('web/detail_post.php', $data);
	}
}
