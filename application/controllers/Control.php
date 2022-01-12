<?php

class Control extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("Control_model");
        $this->load->library('form_validation');
		
	}

	public function index()
	{
        $data["show1"] = $this->Control_model->show1();
        $data["show2"] = $this->Control_model->show2();
        $data["show3"] = $this->Control_model->show3();
        $data["show4"] = $this->Control_model->show4();
        $data["show5"] = $this->Control_model->show5();
        $data["show6"] = $this->Control_model->show6();
        $data["show7"] = $this->Control_model->show7();
        $data["show8"] = $this->Control_model->show8();
        $data["show9"] = $this->Control_model->show9();
        $data["show10"] = $this->Control_model->show10();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->session->userdata('username') == NULL){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                You must login first!
                </div>');
            redirect('auth');
        } else {
            $this->load->view('control', $data);
        }
        // load view admin/overview.php
        
	}

	public function on($id)
	{
		
        $this->Control_model->on($id);
     	
     	redirect(base_url('control'));
	}
	public function off($id)
	{
		
        $this->Control_model->off($id);
     	
     	redirect(base_url('control'));
	}

	public function ongerak($id)
	{
		
        $this->Control_model->ongerak($id);
     	
     	redirect(base_url('control'));
	}
	public function offgerak($id)
	{
		
        $this->Control_model->offgerak($id);
     	
     	redirect(base_url('control'));
	}

	public function cahaya($id)
	{
		$this->Control_model->cahaya($id);
     	
     	redirect(base_url('control'));
	}
	public function gerak($id)
	{
		$this->Control_model->gerak($id);
     	
     	redirect(base_url('control'));
	}
	public function nosensor($id)
	{
		
        $this->Control_model->nosensor($id);
     	
     	redirect(base_url('control'));
	}

    public function uploadon($id)
    {
        $isi = $this->Control_model->upload($id);
        $idlampu = $isi['idpusat'];
        $nilai = $isi['nilai'];
        $sensor = $isi['sensor'];
        $waktu = $isi['waktu'];

        echo $idlampu, $nilai, $waktu;

        redirect('http://webpusat/lampu/'.$idlampu.'?nilai='.$nilai.'&sensor='.$sensor.'&waktu='.$waktu); 
    }

    public function jsonPusat()
    {
        $url="https://bwcr.rizaldiariif.com/public/api/control/zRcZKYgkPIcrhJk8qe4DhKgwHCG3/house?deviceId=e3ddc5510ac9461397cb";
        $get_url = file_get_contents($url);
        $decoded = json_decode($get_url,TRUE);

        foreach( $decoded as $key => $value ){
            $idlampu = $value['id'];
            $nilai = $value['nilai'];
            $sensor = $value['sensor'];
            $timestamp = $value['timestamp'];
            $waktu = $value['waktu'];

            $isi = $this->Control_model->showid($idlampu);
            $xidlampu = $isi['idpusat'];
            $xnilai = $isi['nilai'];
            $xsensor = $isi['sensor'];
            $xwaktu = $isi['waktu'];


            if($timestamp > $xwaktu)
            {
                $this->db->query("UPDATE lampu_control SET nilai=$nilai,sensor=$sensor,waktu=$timestamp WHERE idpusat='$idlampu'");
            }
        }
           

           // https://stackoverflow.com/questions/42014813/how-to-insert-json-to-mysql-database-with-codeigniter
           // https://blog.cacan.id/parsing-data-json-dari-url-codeigniter-3/
        
        
    }

    public function edit($id)
    {
        $data['showid'] = $this->Control_model->showid2($id);

        $this->form_validation->set_rules('idlampu', 'ID Lampu', 'required|trim');
        $this->form_validation->set_rules('namalampu', 'Nama Lampu', 'trim');

        if ($this->form_validation->run() == false)
        {
            $this->load->view('edit', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                    ID Lampu dan Nama Lampu tidak boleh kosong
                    </div>');
        } else {
            $idlampu = $this->input->post('idlampu');
            $namalampu = $this->input->post('namalampu');

            $this->db->query("UPDATE lampu_control SET idpusat='$idlampu', nama='$namalampu' WHERE id=$id");

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                    ID Lampu dan Nama Lampu berhasil diperbarui
                    </div>');
            redirect('control');
        }

        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // if ($this->session->userdata('username') == NULL){
        //     $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
        //         You must login first!
        //         </div>');
        //     redirect('auth');
        // } else {
        //     $this->load->view('edit', $data);
        // }
        // load view admin/overview.php
        
    }
}