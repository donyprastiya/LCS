<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == false){
			$this->load->view('login');
		} else {

			$this->_login();
		}
		
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		//jika user ada
		if($user){
			//jika aktif
			
				//password
			if(password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
				];
				$this->session->set_userdata($data);
				redirect('adminlcs');
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Wrong password!
					</div>');
				redirect('auth');
			}

		} else {
			//gaada user
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				username is not registered!
				</div>');
			redirect('auth');
		}
	}




	// public function registration()
	// {
	// 	$this->form_validation->set_rules('name', 'Name', 'required|trim');
	// 	$this->form_validation->set_rules('username', 'username', 'required|trim|valid_username|is_unique[user.username]',[
	// 		'is_unique' => 'This username has already registered!'
	// 	]);
	// 	$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
	// 		'matches' => 'Password dont match!',
	// 		'min_length' => 'Password to short!'
	// 	]);
	// 	$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


	// 	if($this->form_validation->run() == false){
	// 		$this->load->view('registration');
	// 	} else {
	// 		$data = [
	// 			'name' =>  htmlspecialchars($this->input->post('name', true)),
	// 			'username' => htmlspecialchars($this->input->post('username', true)),
	// 			'image' => 'default.jpg',
	// 			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
	// 			'role_id' => 1,
	// 			'is_active' => 0,
	// 			'date_created' => time()
	// 		];

	// 		$this->db->insert('user', $data);

	// 		// $this->_sendusername();

	// 		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
	// 			Your account has been created. Please Login
	// 			</div>');
	// 		redirect('auth');
	// 	}
		
	// }

	// private function _sendusername()
	// {
	// 	$config = [
	// 		'protocol' => 'smtp',
	// 		'smtp_host' => 'ssl://smtp.googlusername.com',
	// 		'smtp_user' => 'kochengp@gmail.com',
	// 		'smtp_pass' => 'dony7485',
	// 		'smtp_port' => 465,
	// 		'mailtype' => 'html',
	// 		'charset' => 'utf-8',
	// 		'newline' => '\r\n',
			
	// 	];

	// 	$this->load->library('username', $config);
	// 	$this->username->initialize($config);

	// 	$this->username->from('kochengp@gmail.com', 'Lighting Control System');
	// 	$this->username->to('dpn330@gmail.com');
	// 	$this->username->subject('test');
	// 	$this->username->message('Hello Jancok');

	// 	if($this->username->send()){
	// 		return true;
	// 	} else{
	// 		echo $this->username->print_debugger();
	// 		die;
	// 	}
	// }


	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Your have been logout
				</div>');
			redirect('auth');
	}


	// public function forgot()
	// {
	// 	$this->form_validation->set_rules('username', 'username', 'required|trim|valid_username');
	// 	if($this->form_validation->run() == false){
	// 		$this->load->view('forgot');
	// 	} else {
	// 		$username = $this->input->post('username');
	// 		$user = $this->db->get_where('user', ['username' => $username, 'is_active' => 1])->row_array();

	// 		if($user){
	// 			// $token = base64_encode(random_bytes(32));
	// 			// $user_token = [
	// 			// 	'username' = $username,
	// 			// 	'token' = $token,
	// 			// 	'date_created' => time()
	// 			// ];

	// 			// $this->db->insert('user_token', $user_token);




	// 		}else{
	// 			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
	// 			username is not registered!
	// 			</div>');
	// 			redirect('auth');

	// 		}
	// 	}

		
	// }

}