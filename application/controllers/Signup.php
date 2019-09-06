<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct() {
		parent::__construct();

			
		$this->load->model('users');
	}
			
	public function index()
	{
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	
	public function new_user_registration() {

		// Check validation for user input in SignUp form
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('useremail', 'Email', 'trim|required');
		$this->form_validation->set_rules('userpwd', 'Password', 'trim|required|min_length[5]');
		
		$this->load->view('header');
		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('signup');
			
		}else{
			$data = array(
				'userName'	=> $this->input->post('username'),
				'userEmail'	=> $this->input->post('useremail'),
				'userPass'	=> $this->input->post('userpwd')
			);
			$result = $this->users->registration_insert($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successfully !';
				$this->load->view('signup', $data);
			} else {
				$data['message_display'] = 'Username or Email already exist!';
				$this->load->view('signup', $data);
			}
		}
		$this->load->view('footer');
	}
}
