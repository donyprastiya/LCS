<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lampu_model extends CI_Model
{
    private $_table = "lampu";

    public $id;
    public $nilai;
    public $waktu;
    public $sensor;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function orderBy()
    {
        $this->db->from($this->_table);
        $this->db->order_by("tgl", "DESC");
        $query = $this->db->get(); 
        return $query->result();
    }

    public function id($id)
    {
        $query = $this->db->query("SELECT * FROM lampu WHERE id=$id ORDER BY tgl DESC");
        return $query->result(); 
    }

    public function hapus()
    {
        $this->db->query("TRUNCATE TABLE lampu");
    }

    public function cekFlag()
    {
        $query = $this->db->query("SELECT * FROM lampu WHERE flag=0 ORDER BY waktu DESC LIMIT 1");
        return $query->row_array();
    }

    public function updateFlag()
    {
        $this->db->query("UPDATE lampu SET flag=1 WHERE flag=0 ORDER BY waktu DESC LIMIT 1");
    }

    public function resetFlag()
    {
        $this->db->query("UPDATE lampu SET flag=0 WHERE flag=1");
    }

    

}