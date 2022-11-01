<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_sosmed extends CI_Model
{

    public $table = 'sosmed';

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
    public function insert($sosmed)
    {
        $this->db->insert($this->table, $sosmed);
    }
    public function getbyid($sosmed)
    {
        $this->db->where('id', $sosmed);
        $query = $this->db->get('sosmed');
        return $query->row();
    }
    public function editmenu($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('sosmed', $data);
    }
    public function hapus($sosmed)
    {
        $this->db->where('id', $sosmed);
        $this->db->delete($this->table);
    }
}
