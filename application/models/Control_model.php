<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Control_model extends CI_Model
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

    public function show1()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=1");
        return $query->row();
    }

    public function show2()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=2");
        return $query->row();
    }

    public function show3()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=3");
        return $query->row();
    }

    public function show4()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=4");
        return $query->row();
    }

    public function show5()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=5");
        return $query->row();
    }

    public function show6()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=6");
        return $query->row();
    }

    public function show7()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=7");
        return $query->row();
    }

    public function show8()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=8");
        return $query->row();
    }

    public function show9()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=9");
        return $query->row();
    }

    public function show10()
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=10");
        return $query->row();
    }

// ON OFF LAMPU
    public function on($id)
    {
        $isi = $this->Control_model->upload($id);
        $nama = $isi['nama'];

        $this->db->query("INSERT INTO lampu(id, nama, nilai, waktu, tgl, jam) VALUES ($id, '$nama', 1, unix_TIMESTAMP(NOW()), NOW(), NOW())");
        $this->db->query("UPDATE lampu_control SET nilai=1,waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now() WHERE id=$id");
    }
    public function off($id)
    {
        $this->db->query("INSERT INTO lampu(id, nilai, waktu, tgl, jam) VALUES ($id, 0, unix_TIMESTAMP(NOW()), NOW(), NOW())");
        $this->db->query("UPDATE lampu_control SET nilai=0,waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now() WHERE id=$id");
    }

    public function ongerak($id)
    {
        $this->db->query("INSERT INTO lampu(id, nilai, waktu, tgl, jam, sensor) VALUES ($id, 1, unix_TIMESTAMP(NOW()), NOW(), NOW(), 2)");
        $this->db->query("UPDATE lampu_control SET nilai=1,waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now(),sensor=2 WHERE id=$id");
    }
    public function offgerak($id)
    {
        $this->db->query("INSERT INTO lampu(id, nilai, waktu, tgl, jam, sensor) VALUES ($id, 0, unix_TIMESTAMP(NOW()), NOW(), NOW(), 2)");
        $this->db->query("UPDATE lampu_control SET nilai=0,waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now(),sensor=2 WHERE id=$id");
    }

    //SENSOR
    public function cahaya($id)
    {
        $this->db->query("UPDATE lampu SET sensor=1 WHERE id=$id ORDER BY waktu DESC LIMIT 1");
        $this->db->query("UPDATE lampu_control SET sensor=1 WHERE id=$id");
    }
    public function gerak($id)
    {
        $this->db->query("UPDATE lampu SET sensor=2 WHERE id=$id ORDER BY waktu DESC LIMIT 1");
        $this->db->query("UPDATE lampu_control SET sensor=2 WHERE id=$id");
    }
    public function nosensor($id)
    {
        $this->db->query("UPDATE lampu SET sensor=0 WHERE id=$id ORDER BY waktu DESC LIMIT 1");
        $this->db->query("UPDATE lampu_control SET sensor=0 WHERE id=$id");
    }

    public function upload($id)
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id=$id");
        return $query->row_array();
    }

    public function showid($id)
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE idpusat='$id'");
        return $query->row_array(); 
    }

    public function showid2($id)
    {
        $query = $this->db->query("SELECT * FROM lampu_control WHERE id='$id'");
        return $query->row8(); 
    }
}