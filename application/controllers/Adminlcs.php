<?php


class Adminlcs extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("Sensor_model");
		$this->load->model("Control_model");
        
	}

	public function index()
	{
        // load view admin/overview.php
        $data['getAll'] = $this->Sensor_model->getAll();
        $data['hello'] = "Hello, world";
        
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

        $data["grafsuhu"] = $this->Sensor_model->grafsuhu();
        $data["grafhumid"] = $this->Sensor_model->grafhumid();
        $data["graftgl"] = $this->Sensor_model->graftgl();

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->session->userdata('username') == NULL){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                You must login first!
                </div>');
            redirect('auth');
        } else {
            $this->load->view('adminlcs', $data);
        }
	}


	public function bisa()
	{
		$grafsuhu = $this->Sensor_model->grafsuhu();
        $grafhumid = $this->Sensor_model->grafhumid();
        $graftgl = $this->Sensor_model->graftgl();

        foreach ($grafsuhu as $data) {
                        echo "'" .number_format($data->suhu) ."',";
                      }
        
    }
}