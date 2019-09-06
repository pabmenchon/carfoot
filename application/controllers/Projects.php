<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('project_model');
		
		$this->userid	= ($this->session->userdata['logged_in']['userid']);
	}	
	
	public function index()
	{
		
	}
	
	public function insert_project() {
		$proj_name = $this->input->post("proj_name");
		$proj_date = $this->input->post("proj_date");

		$data = array(
			'p_name'=>$proj_name,
			'p_date'=>$proj_date,
			'userid'=>$this->userid
		);
		
		$result = $this->project_model->insert_data($data);
		$this->session->set_userdata('project_id', $result);
		echo $result;
	}

	public function delete_project(){
		$proj_id = $this->input->post('proj_id');

		if ($this->project_model->get_project($proj_id)) {
			echo $this->project_model->delete_project($proj_id);
		} else echo "";
	}
}
