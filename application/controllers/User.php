<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->session->userdata('username') == NULL){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                You must login first!
                </div>');
            redirect('auth');
		} else {
			echo "Selamat datang ". $data['user']['name'];
		}
	}

	public function change()
	{
		
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]',[
			'matches' => 'Password dont match!',
			'min_length' => 'Password to short!'
		]);
		$this->form_validation->set_rules('new_password2', 'Conform New Password', 'required|trim|matches[new_password1]');
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('change', $data);
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if(!password_verify($current_password, $data['user']['password']))
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Password salah!
				</div>');
				redirect('user/change');
			} else {
				if($current_password == $new_password){
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Password baru tidak boleh sama dengan password lama!
					</div>');
					redirect('user/change');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('user');

					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					Password berhasil diganti!
					</div>');
					redirect('user/change');
				}
			}
		}
	}

}