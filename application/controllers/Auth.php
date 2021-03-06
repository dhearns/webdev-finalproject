<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index(){
		
	}

	public function login(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation-> run() == false){
			$data['title'] = 'Login';
			$this->load->view('templates/auth_header', $data);	
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else{
			$this->_login();
		} 


	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if($user){
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				redirect('user');
			} else{
				$this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
				redirect('auth/login');
			}
		} else{
			$this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Acount not found, please check your email again!</div>');
			redirect('auth/login');

		}

	}

	public function registration(){	
		$this->form_validation->set_rules('username', 'Username', 'required|trim');

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email is taken!']);

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', ['matches' => "Password don't match!", 'min_length' => 'Password too short!']);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation-> run() == false){
			$data['title'] = 'Registration';
			$this->load->view('templates/auth_header', $data);	
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else{
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)), 
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Congratulations! Your acount is succesfully created! Please login now!</div>');
			redirect('auth/login');
		}	
		
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Succesfully Logged Out!</div>');
			redirect('auth/login');
	}
}
?>