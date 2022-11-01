<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_about extends CI_Model
{

    public $table = 'about';

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
    public function insert($about)
    {
        $this->db->insert($this->table, $about);
    }
    public function getbyid($about)
    {
        $this->db->where('id', $about);
        $query = $this->db->get('about');
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('about', $data);
    }
    public function hapus($about)
    {
        $this->db->where('id', $about);
        $this->db->delete($this->table);
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
