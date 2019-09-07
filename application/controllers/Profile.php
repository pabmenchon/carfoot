<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('users');
	}
	
	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
			$data['username']	= ($this->session->userdata['logged_in']['username']);
			$data['useremail'] 	= ($this->session->userdata['logged_in']['useremail']);
			
			$this->load->view('header_main', $data);
			$this->load->view('profile');
			$this->load->view('footer_main');
			
		}else{
			redirect('signin');
		}
		
	}
}
