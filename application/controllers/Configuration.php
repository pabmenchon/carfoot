<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('configuration_model');
		
		$this->userid	= ($this->session->userdata['logged_in']['userid']);
		
		$this->all_tbl_datas = array(
			'tbl_project' => array('p_name', 'p_date')
		);
		
		$this->all_configuration_datas = array( 'material_eq_min', 'material_eq_max', 'material_ceq_min', 'material_ceq_max', 'meterial_pro_min', 'meterial_pro_max', 'energy_eq_min', 'energy_eq_max', 'energy_ceq_min', 'energy_ceq_max', 'energy_pro_min', 'energy_pro_max', 'subtotal_eq_min', 'subtotal_eq_max', 'subtotal_ceq_min', 'subtotal_ceq_max', 'subtotal_pro_min', 'subtotal_pro_max', 'wetland_eq_min', 'wetland_eq_max', 'wetland_ceq_min', 'wetland_ceq_max', 'wetland_pro_min', 'wetland_pro_max', 'op_energy_eq_min', 'op_energy_eq_max', 'op_energy_ceq_min', 'op_energy_ceq_max', 'op_energy_pro_min', 'op_energy_pro_max', 'op_maintenance_eq_min', 'op_maintenance_eq_max', 'op_maintenance_ceq_min', 'op_maintenance_ceq_max', 'op_maintenance_pro_min', 'op_maintenance_pro_max', 'op_subtotal_eq_min', 'op_subtotal_eq_max', 'op_subtotal_ceq_min', 'op_subtotal_ceq_max', 'op_subtotal_pro_min', 'op_subtotal_pro_max', 'el_material_eq_min', 'el_material_eq_max', 'el_material_ceq_min', 'el_material_ceq_max', 'el_material_pro_min', 'el_material_pro_max', 'el_energy_eq_min', 'el_energy_eq_max', 'el_energy_ceq_min', 'el_energy_ceq_max', 'el_energy_pro_min', 'el_energy_pro_max', 'el_subtotal_eq_min', 'el_subtotal_eq_max', 'el_subtotal_ceq_min', 'el_subtotal_ceq_max', 'el_subtotal_pro_min', 'el_subtotal_pro_max', 'cs_material_eq_min', 'cs_material_eq_max', 'cs_material_ceq_min', 'cs_material_ceq_max', 'cs_material_pro_min', 'cs_material_pro_max', 'cs_energy_eq_min', 'cs_energy_eq_max', 'cs_energy_ceq_min', 'cs_energy_ceq_max', 'cs_energy_pro_min', 'cs_energy_pro_max', 'cs_maintenance_eq_min', 'cs_maintenance_eq_max', 'cs_maintenance_ceq_min', 'cs_maintenance_ceq_max', 'cs_maintenance_pro_min', 'cs_maintenance_pro_max', 'cs_wetland_eq_min', 'cs_wetland_eq_max', 'cs_wetland_ceq_min', 'cs_wetland_ceq_max', 'cs_wetland_pro_min', 'cs_wetland_pro_max', 'cs_total_eq_min', 'cs_total_eq_max', 'cs_total_ceq_min', 'cs_total_ceq_max', 'cs_total_pro_min', 'cs_total_pro_max', 'ce_indirect_eq_min', 'ce_indirect_eq_max', 'ce_indirect_ceq_min', 'ce_indirect_ceq_max', 'ce_indirect_pro_min', 'ce_indirect_pro_max', 'ce_direct_eq_min', 'ce_direct_eq_max', 'ce_direct_pro_min', 'ce_direct_pro_max', 'ce_direct_ceq_min', 'ce_direct_ceq_max' );
		
	}
	
	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
			$data['username']	= ($this->session->userdata['logged_in']['username']);
			$data['useremail'] 	= ($this->session->userdata['logged_in']['useremail']);
			
			$data['page_no']	= 6;

			$data['projects']	= $this->configuration_model->get_projects_data($this->userid);

			if($this->input->post("project_id")){
				$this->session->set_userdata('project_id', $this->input->post("project_id"));
			}
			$project_id = $this->session->userdata('project_id');


			if($project_id && $project_id != ""){
				$result	= $this->configuration_model->get_proj_data($this->userid, $project_id);
			}else{
				$result	= $this->configuration_model->get_lastproj_data($this->userid);
			}



			if($result != false){
				$data['project_id']	= $result[0]->id;
				$data['p_name0']	= $result[0]->p_name;
				$data['p_date0']	= $result[0]->p_date;
			}else{
				$data['project_id']	= '';
				$data['p_name0']	= '';
				$data['p_date0']	= '';
			}

			


			$configs_data = $this->configuration_model->get_all_config($this->userid, $data['project_id'] ,'config');
			$all_configs_data = $configs_data?(count($configs_data)?$configs_data[0]:array()):array();
			if ($all_configs_data) {
				$all_configs_data = json_decode(json_encode($all_configs_data), true);
				if (is_array($all_configs_data)&&count($all_configs_data)) {
					
					$data['all_config'] = $all_configs_data;
				}
			}

			
			
			$this->load->view('header_main', $data);
			$this->load->view('configuration', $data);
			$this->load->view('footer_main');

		} else{
			redirect('signin');
		}		
	}
	public function update_configuration(){
		$update_data = array();
		foreach ($this->all_configuration_datas as $key => $value) {
			$data_post = $this->input->post($value);

			if ($data_post) {
				if (is_numeric($data_post)) {
					$update_data[$value] = $data_post;
					 //

				} else {
					$this->session->set_flashdata('config_error', "All Config data must be numeric");
					redirect('configuration');
				}
			}
		}
		$project_id = $this->input->post('project_id');

		if (count($update_data)) {
			$this->configuration_model->update_config($this->userid, $project_id, $update_data, 'config');
			
		}

		
		if(isset($_SESSION['config_error'])){
			unset($_SESSION['config_error']);
		}
		$this->session->set_tempdata('config_success', 'Update configuration successfully', 10);

		redirect('configuration');
	}
	
	
}
