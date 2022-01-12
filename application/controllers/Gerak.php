<?php

class Gerak extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("Sensor_model");
	}

	public function index()
	{
        $data["getSensor"] = $this->Sensor_model->getSensor();
        // load view admin/overview.php
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->session->userdata('username') == NULL){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                You must login first!
                </div>');
            redirect('auth');
        } else {
            $this->load->view('gerak', $data);
        }
        
	}
}