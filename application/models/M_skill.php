<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_skill extends CI_Model
{

    public $table = 'skill';

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
    public function insert($skill)
    {
        $this->db->insert($this->table, $skill);
    }
    public function getbyid($skill)
    {
        $this->db->where('id', $skill);
        $query = $this->db->get('skill');
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('skill', $data);
    }
    public function hapus($skill)
    {
        $this->db->where('id', $skill);
        $this->db->delete($this->table);
    }
}
