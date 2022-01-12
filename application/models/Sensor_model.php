<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor_model extends CI_Model
{
    private $_table = "sensor_control";

    private $_table2 = "sensor";

    public function getAll()
    {
        return $this->db->get($this->_table)->row();
    }

    public function getSensor()
    {
        return $this->db->get($this->_table2)->result();
    }

    public function hapus()
    {
        $this->db->query("TRUNCATE TABLE sensor");
    }

    public function cekFlag()
    {
        $query = $this->db->query("SELECT * FROM sensor WHERE flag=0 ORDER BY waktu DESC LIMIT 1");
        return $query->row_array();
    }

    public function updateFlag()
    {
        $this->db->query("UPDATE sensor SET flag=1 WHERE flag=0 ORDER BY waktu DESC LIMIT 1");
    }

    public function resetFlag()
    {
        $this->db->query("UPDATE sensor SET flag=0 WHERE flag=1");
    }

    public function upload()
    {
        $query = $this->db->query("SELECT * FROM sensor ORDER BY waktu DESC LIMIT 1");
        return $query->row_array();
    }

    public function grafsuhu()
    {
        return $this->db->query("SELECT tgl, AVG(temp) AS suhu FROM sensor GROUP BY tgl ORDER BY tgl DESC LIMIT 7")->result();
    }

    public function grafhumid()
    {
        return $this->db->query("SELECT tgl, AVG(humid) AS humid FROM sensor GROUP BY tgl ORDER BY tgl DESC LIMIT 7")->result();
    }

    public function graftgl()
    {
        return $this->db->query("SELECT tgl FROM sensor GROUP BY tgl ORDER BY tgl DESC LIMIT 7")->result();
    }
}