<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_message extends CI_Model
{

    public $table = 'message';

    public function __construct()
    {
        parent::__construct();
    }


    // Crud
    // public function data()
    // {
    //     $query = $this->db->get($this->table);
    //     return  $query->result();
    // }

    public function data($number, $offset)
    {   
        $this->db->order_by("created_at", "desc");
        $query = $this->db->get('message', $number, $offset);
        return $query->result_array();
    }
    public function jumlah_data()
    {
        return $this->db->get($this->table)->num_rows();
    }
    public function search($search)
    {
        $this->db->like('username', "$search");
        $query = $this->db->get('message');
        return $query->result_array();		
    }
    public function insert($message)
    {
        $this->db->insert($this->table, $message);
    }
    public function getbyid($message)
    {
        $this->db->where('id', $message);
        $query = $this->db->get('message');
        return $query->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('message', $data);
    }
    public function hapus($chats)
    {
        $this->db->where('id', $chats);
        $this->db->delete($this->table);
    }
}
