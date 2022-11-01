<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_post extends CI_Model
{

    public $table = 'posts';

    public function __construct()
    {
        parent::__construct();
    }


    // Crud
    public function data()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result();
    }
    public function insert($posts)
    {
        $this->db->insert($this->table, $posts);
    }
    public function getbyid($posts)
    {
        $this->db->where('id', $posts);
        $query = $this->db->get('posts');
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('posts', $data);
    }
    public function hapus($posts)
    {
        $this->db->where('id', $posts);
        $this->db->delete($this->table);
    }
    public function news($search)
    {
        $this->db->like('title', "$search");
        $query = $this->db->get('posts');
        return $query->result();		
    }
    public function desc($search)
    {
        $this->db->like('paragraf', "%$search%");
        $query = $this->db->get('posts');
        return $query->result();	
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
         $this->db->insert('posts', $data);
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
 
}
