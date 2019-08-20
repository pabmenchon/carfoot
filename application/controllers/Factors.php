<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factors extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('factor');
		
		$this->userid	= ($this->session->userdata['logged_in']['userid']);
		
		$this->all_tbl_datas = array(
			'tbl_project' => array('p_name', 'p_date')
		);
		
		$this->all_factor_datas = array('materials', 'materials_density_factors', 'liquids_density_factors', 'woods', 'rocks_stones', 'artificials_stones', 'construction_materials', 'bulk_materials', 'partitionss', 'facings', 'concrete', 'mortars_mixes', 'pavements', 'ceilings', 'floors', 'pipes', 'manholes', 'pumps', 'wetland_emissions', 'office_emissions', 'pretreatment', 'special_select_materials', 'liners', 'liners1', 'doors', 'windows', 'griller', 'cables', 'electrical_panels', 'lamps', 'streetlights', 'lights', 'vehicules', 'vehicules1', 'fuel', 'constructed_wetland', 'vehicules2', 'pipes1', 'polimers', 'polimers1', 'polimers2');
		
	}
	
	public function index()
	{

		if(isset($this->session->userdata['logged_in'])){

			


			$data['username']	= ($this->session->userdata['logged_in']['username']);
			$data['useremail'] 	= ($this->session->userdata['logged_in']['useremail']);
			
			$data['page_no']	= 4;
			
			$data['projects']	= $this->factor->get_projects_data($this->userid);
			if($this->input->post("project_id")){
				$this->session->set_userdata('project_id', $this->input->post("project_id"));
			}
			$project_id = $this->session->userdata('project_id');
			//print_r("###".$this->session->userdata('project_id'));
			$url = parse_url($_SERVER['REQUEST_URI']);
			$searchfactors = "";
			if (isset($url['query'])) {

				parse_str($url['query'], $params);
				$searchfactors = trim($params['factors']);

			}

			$all_tbl_datas = $this->all_tbl_datas;
			$keys = array_keys($all_tbl_datas);
			for($i = 0; $i < count($all_tbl_datas); $i++) {

				if($i == 0){
					if($project_id && $project_id != ""){
						$result	= $this->factor->get_proj_data($this->userid, $project_id);
					}else{
						$result	= $this->factor->get_lastproj_data($this->userid);
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
				}else{
					$result	= $this->factor->get_all_tbl_data($data['project_id'], $keys[$i]);
					if($result != false){
						foreach($all_tbl_datas[$keys[$i]] as $value) {
							$data[$value.$i] = $result[0]->$value;
						}
					}else{
						foreach($all_tbl_datas[$keys[$i]] as $value) {
							$data[$value.$i] = '';
						}
					}
				}
				
			}
			
			$all_factor_datas = $this->all_factor_datas;
			foreach($all_factor_datas as $tbl_name){
				$tbl_title = str_replace('_', ' ', ucfirst($tbl_name));
				if (!$searchfactors) {
					$all_data = $this->factor->get_all_factor_datas($tbl_name);
				} else {
					$all_data = $this->factor->search_factor_datas($searchfactors, $tbl_name);
				}
				$data['all_data_lists'][$tbl_title] = $all_data;
			}
			
			$this->load->view('header_main', $data);
			$this->load->view('factors', $data);
			$this->load->view('footer_main');
			
		}else{
			redirect('signin');
		}		
	}
	public function get_factor(){
		if (trim($this->input->post('type')))
			$type = $this->input->post('type');

		if (trim($this->input->post('factor')))
			$factor = $this->input->post('factor');

		if ($type && $factor) {
			echo json_encode($this->factor->get_factor_data($factor, $type));
		} else echo 0;

		exit();
	}

	public function insert_data(){
		//        
		if (trim($this->input->post('type')))
			$type = $this->input->post('type');
		if (trim($this->input->post('factor')))
			$factor = $this->input->post('factor');
		if (trim($this->input->post('source'))) 
			$source = $this->input->post('source');
		if (trim($this->input->post('unit'))) 
			$unit = $this->input->post('unit');
		if (trim($this->input->post('reference'))) 
			$reference = $this->input->post('reference');

		if (!($type)){
			$this->session->set_flashdata('factor_error', "Type is required");
			redirect('factors');
		}

		if (!($factor)){
			$this->session->set_flashdata('factor_error', "Factor is Required");
			redirect('factors');
		}

		if (!($source)){
			$this->session->set_flashdata('factor_error', "Source is required");
			redirect('factors');
		}

		if (!is_numeric($factor)){
			$this->session->set_flashdata('factor_error', "Factor must be numeric");
			redirect('factors');
		}	
		if (!is_numeric($reference)) {
			$this->session->set_flashdata('factor_error', "Reference must be numeric");
			redirect('factors');
		}

		if (!in_array($type, $this->all_factor_datas)){
			$this->session->set_flashdata('factor_error', "Error in Type choose");
			redirect('factors');
		}

		$res = $this->factor->add_factor($type, $source, $factor, $unit, $reference);
		if (!$res) {
			$this->session->set_flashdata('factor_error', "Error in create new factor");
		} else {
			if(isset($_SESSION['factor_error'])){
			    unset($_SESSION['factor_error']);
			}
			$this->session->set_tempdata('factor_success', 'Create new factor successfully', 10);
			
		}
		
        redirect('factors');
	}


	public function edit_data(){

		if (trim($this->input->post('type')))
			$type = $this->input->post('type');

		if (($this->input->post('factorid')))
			$factorid = $this->input->post('factorid');

		if (trim($this->input->post('factor')))
			$factor = $this->input->post('factor');

		if (trim($this->input->post('source'))) 
			$source = $this->input->post('source');

		if (trim($this->input->post('unit'))) 
			$unit = $this->input->post('unit');

		if (trim($this->input->post('reference'))) 
			$reference = $this->input->post('reference');

		if (!($type)){
			$this->session->set_flashdata('factor_error', "Type is required");
			redirect('factors');
		}

		if (!($factor)){
			$this->session->set_flashdata('factor_error', "Factor is Required");
			redirect('factors');
		}

		if (!($source)){
			$this->session->set_flashdata('factor_error', "Source is required");
			redirect('factors');
		}

		if (!is_numeric($factor)){
			$this->session->set_flashdata('factor_error', "Factor must be numeric");
			redirect('factors');
		}	
		if (!is_numeric($reference)) {
			$this->session->set_flashdata('factor_error', "Reference must be numeric");
			redirect('factors');
		}

		if (!in_array($type, $this->all_factor_datas)){
			$this->session->set_flashdata('factor_error', "Error in Type choose");
			redirect('factors');
		}
		$check = $this->factor->get_factor_data($factorid, $type);
		if (count($check))
			$res = $this->factor->edit_factor($factorid, $type, $source, $factor, $unit, $reference);

		if (!$res) {
			$this->session->set_flashdata('factor_error', "Error in updating factor");
		} else {
			if(isset($_SESSION['factor_error'])){
			    unset($_SESSION['factor_error']);
			}
			$this->session->set_tempdata('factor_success', 'Edit factor successfully', 10);
			
		}
		
        redirect('factors');
	}

	public function delete_factor(){
		if (trim($this->input->post('type')))
			$type = $this->input->post('type');

		if (trim($this->input->post('factor')))
			$factor = $this->input->post('factor');

		if ($type && $factor) {
			$check = $this->factor->get_factor_data($factor, $type);
			if (count($check)) {
				echo $this->factor->delete_factor($factor, $type);
			}
		} else echo 0;

		exit();
	}
	
}
