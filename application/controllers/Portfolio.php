<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//pengecekan sesi
		//  if($this->session->userdata('is_login') != true){
		// 	redirect('Login');
		// }
		$this->load->model('m_portfolio');
	}
	public function index()
	{
		$query = $this->input->post('search');
		
		$data['search'] = $query;

		if($query == 'semua'){
			$data['portfolio'] = $this->m_portfolio->data();
        }else if($query == 'terbaru'){
			$data['portfolio'] = $this->m_portfolio->news(3,1);
        }else if($query == 'lampau'){
			$data['portfolio'] = $this->m_portfolio->old(3,3);
		}else{
			$data['portfolio'] = $this->m_portfolio->data();
		}
		$query = $this->input->post('search');
		//$data['portfolio'] = $this->m_portfolio->data();
		// var_dump($data);
		$this->load->view('web/portfolio.php', $data);
	}
	public function detail($folio)
	{
		$folio = $this->m_portfolio->getbyid($folio);
		$data = array(
			'folio' => $folio
		);
		//var_dump($data);
		$this->load->view('web/detail_folio.php', $data);
	}

	
}
