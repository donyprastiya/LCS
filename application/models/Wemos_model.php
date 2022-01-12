<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wemos_model extends CI_Model
{

    public function status()
    {
        $query = $this->db->query("SELECT nilai FROM lampu_control");
        return $query->result();
    }

    public function sensordata()
	{
		date_default_timezone_set('Asia/Jakarta'); 
		
		$temp = $this->input->get('temp');
		$humid = $this->input->get('humid');
		$cahaya = $this->input->get('cahaya');
		$gerak = $this->input->get('gerak');

		$this->db->query("UPDATE sensor_control SET temp=$temp, humid=$humid, cahaya=$cahaya, gerak=$gerak, waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now() WHERE id=1");

		$this->db->query("INSERT INTO sensor(temp, humid, cahaya, gerak, waktu, tgl, jam) VALUES ($temp, $humid, $cahaya, $gerak, unix_TIMESTAMP(NOW()), NOW(), NOW())");

		//*************FITUR LAMPU***************

        $idlampu = 1;

        while ($idlampu <= 10) 
        {
        	$lampu =$this->db->query("SELECT * FROM lampu_control WHERE id=$idlampu")->row_array();
        	$nostack =$this->db->query("SELECT * FROM lampu WHERE id=$idlampu ORDER BY waktu DESC LIMIT 1")->row_array();
        	
        		if($lampu['sensor']==1)
		        {
		        	if ($cahaya > 500) {
		        		$this->db->query("UPDATE lampu_control SET nilai=1,waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now() WHERE id=$idlampu");

		        		if ($nostack['nilai']==0) {
		        			$this->db->query("INSERT INTO lampu(id, nilai, waktu, tgl, jam, sensor) VALUES ($idlampu, 1, unix_TIMESTAMP(NOW()), NOW(), NOW(), 1)");
		        		}
		        		
		        	}
		        	else{
		        		$this->db->query("UPDATE lampu_control SET nilai=0,waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now() WHERE id=$idlampu");

		        		if ($nostack['nilai']==1) {
		        			$this->db->query("INSERT INTO lampu(id, nilai, waktu, tgl, jam, sensor) VALUES ($idlampu, 0, unix_TIMESTAMP(NOW()), NOW(), NOW(), 1)");
		        		}
		        		
		        	}
		        }
		        else
		        {
		        	if ($lampu['sensor']==2) {
		        		if ($gerak == 0) {
		        			$this->db->query("UPDATE lampu_control SET nilai=0,waktu=unix_TIMESTAMP(NOW()),tgl=now(),jam=now() WHERE id=$idlampu");
		        			
			        		if ($nostack['nilai']==1) {
			        			$this->db->query("INSERT INTO lampu(id, nilai, waktu, tgl, jam, sensor) VALUES ($idlampu, 0, unix_TIMESTAMP(NOW()), NOW(), NOW(), 1)");
			        		}
		        			
		        		}
		        	}
		        }



        	$idlampu++;
        }

        
	}
}