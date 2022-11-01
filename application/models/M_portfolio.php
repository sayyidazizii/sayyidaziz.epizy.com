<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_portfolio extends CI_Model
{

    public $table = 'portfolio';

    public function __construct()
    {
        parent::__construct();
    }


    // Crud
    public function data()
    {
        // $query = $this->db->get($this->table);
        // return  $query->result();

        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result();
    }
    public function insert($portfolio)
    {
        $this->db->insert($this->table, $portfolio);
    }
    public function getbyid($portfolio)
    {
        $this->db->where('id', $portfolio);
        $query = $this->db->get('portfolio');
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('portfolio', $data);
    }
    public function hapus($portfolio)
    {
        $this->db->where('id', $portfolio);
        $this->db->delete($this->table);
    }
    public function news($number,$offset)
    {
        $query = $this->db->get('portfolio',$number,$offset);
        return $query->result();		
    }
    public function old($number,$offset)
    {    
        $this->db->select('*');
        $this->db->from('portfolio',$number,$offset);
        $this->db->order_by('id','asc');
        $query = $this->db->get();
        return $query->result();
    }

     // Fungsi untuk melakukan proses upload file
     public function upload()
     {
         $config['upload_path'] = './assets/img/';
         $config['allowed_types'] = 'jpg|png|jpeg';
         $config['max_size']  = '2048';
         $config['remove_space'] = TRUE;
 
         $this->load->library('upload', $config); // Load konfigurasi uploadnya
         if ($this->upload->do_upload('image')) { // Lakukan upload dan Cek jika proses upload berhasil
             // Jika berhasil :
             $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
             return $return;
         } else {
             // Jika gagal :
             $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
             return $return;
         }
     }
 
     // Fungsi untuk menyimpan data ke database
     public function save($upload)
     {
         $data = array(
             'title' => $this->input->post('title'),
             'slug' => $this->input->post('slug'),
             'paragraf' => $this->input->post('paragraf'),
             'image' => $upload['file']['file_name'],
         );
        //  var_dump($data);
         $this->db->insert('portfolio', $data);
     }

     public function uploadimage()
     {
         $config['upload_path'] = './assets/img/';
         $config['allowed_types'] = 'jpg|png|jpeg';
         $config['max_size']  = '2048';
         $config['remove_space'] = TRUE;
 
         $this->load->library('upload', $config); // Load konfigurasi uploadnya
         if ($this->upload->do_upload('image')) { // Lakukan upload dan Cek jika proses upload berhasil
             // Jika berhasil :
             $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
             return $return;
         } else {
             // Jika gagal :
             $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
             return $return;
         }
     }
 
     // Fungsi untuk menyimpan data ke database
    //  public function update($upload)
    //  {
    //      $data = array(
    //          'id' => $this->input->post('id'),
    //          'title' => $this->input->post('title'),
    //          'slug' => $this->input->post('slug'),
    //          'paragraf' => $this->input->post('paragraf'),
    //          'image' => $upload['file']['file_name'],
    //      );
    //     //  var_dump($data);
    //      $this->db->update('portfolio',);
    //  }
}
