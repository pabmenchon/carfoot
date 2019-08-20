<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start();

class Signin extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//$this->load->library('session');
		$this->load->model('users');
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('signin');
		$this->load->view('footer');
	}
	
	// Check for user login process
	public function user_login_process() {

		$this->form_validation->set_rules('useremail', 'Email', 'trim|required');
		$this->form_validation->set_rules('userpwd', 'Password', 'trim|required');
		
		$this->load->view('header');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				redirect('materials_construction');
			}else{
				$this->load->view('signin');
			}
		} else {
			$data = array(
				'userEmail'	=> $this->input->post('useremail'),
				'userPass'	=> $this->input->post('userpwd')
			);
			$result = $this->users->login($data);
			if ($result == TRUE) {

				$useremail	= $this->input->post('useremail');
				$result		= $this->users->read_user_information($useremail);
				
				if ($result != false) {
					$session_data = array(
					'username'	=> $result[0]->userName,
					'useremail' => $result[0]->userEmail,
					'userid' 	=> $result[0]->id,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					
					redirect('materials_construction');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('signin', $data);
			}
		}
		
		$this->load->view('footer');
	}

	// Logout from admin page
	public function logout() {

		// Removing session data
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		//$data['message_display'] = 'Successfully Logout';
		$this->load->view('header');
		$this->load->view('signin');
		$this->load->view('footer');
	}
}
