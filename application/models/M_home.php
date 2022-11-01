<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    public $table = 'home';

    public function __construct()
    {
        parent::__construct();
    }


    // Crud
    public function data()
    {
        $query = $this->db->get($this->table);
        return  $query->result();
    }
    public function insert($home)
    {
        $this->db->insert($this->table, $home);
    }
    public function getbyid($home)
    {
        $this->db->where('id', $home);
        $query = $this->db->get('home');
        return $query->row();
    }
    public function editmenu($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('home', $data);
    }
    public function hapus($home)
    {
        $this->db->where('id', $home);
        $this->db->delete($this->table);
    }


     // Fungsi untuk melakukan proses upload file
     public function upload()
     {
         $config['upload_path'] = './assets/img/';
         $config['allowed_types'] = 'jpg|png|jpeg';
         $config['max_size']  = '2048';
         $config['remove_space'] = TRUE;
 
         $this->load->library('upload', $config); // Load konfigurasi uploadnya
         if ($this->upload->do_upload('hero')) { // Lakukan upload dan Cek jika proses upload berhasil
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
             'id' => $this->input->post('id'),
             'title' => $this->input->post('title'),
             'paragraf' => $this->input->post('paragraf'),
             'hero' => $upload['file']['file_name'],
         );
        //  var_dump($data);
         $this->db->update('home', $data);
     }
}
