<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('operation_model');
		
		$this->userid	= ($this->session->userdata['logged_in']['userid']);
		
		$this->all_tbl_datas = array(
			'tbl_project' => array('p_name', 'p_date'),
			
			'tbl_operation_params' => array('total_area', 'lifetime', 'wastewater', 'equivalent', 'bod5_influent', 'bod5_effluent', 'cod_influent', 'cod_effluent', 'tn_influent', 'tn_effluent', 'nh4_influent', 'nh4_effluent', 'no3_influent', 'no3_effluent', 'tp_influent', 'tp_effluent', 'ecoli_influent', 'ecoli_effluent'),
			
			'tbl_operation_wetland' => array('bed1', 'bed1_type', 'bed1_total', 'bed2', 'bed2_type', 'bed2_total', 'bed3', 'bed3_type', 'bed3_total', 'tonesCO2'),
			
			'tbl_operation_electricty' => array('airpump_num', 'airpump_src', 'airpump_time', 'airpump_total', 'waterpump_num', 'waterpump_src', 'waterpump_time', 'waterpump_total', 'device1_num', 'device1_src', 'device1_time', 'device1_comsuption', 'device1_total', 'device2_num', 'device2_src', 'device2_time', 'device2_comsuption', 'device2_total', 'tonesCO2'),
			
			'tbl_operation_maintenance' => array('removal_no', 'removal_model', 'removal_fuel', 'removal_time', 'removal_total', 'vegetation_no', 'vegetation_model', 'vegetation_fuel', 'vegetation_time', 'vegetation_total', 'travels_no', 'travels_model', 'travels_fuel', 'travels_time', 'travels_total', 'pipe1', 'pipe1_elem', 'pipe1_mat', 'pipe1_total', 'pipe2', 'pipe2_elem', 'pipe2_mat', 'pipe2_total', 'manholes', 'manholes_elem', 'manholes_mat', 'manholes_total', 'lightbulbs', 'lightbulbs_elem', 'lightbulbs_mat', 'lightbulbs_total', 'spotlight', 'spotlight_elem', 'spotlight_mat', 'spotlight_total', 'airpump', 'airpump_total', 'waterpump', 'waterpump_total', 'tonesCO2')
		);
		
		$this->all_fixed_tables = array('materials', 'materials_density_factors', 'liquids_density_factors', 'woods', 'rocks_stones', 'artificials_stones', 'construction_materials', 'bulk_materials', 'partitionss', 'facings', 'concrete', 'mortars_mixes', 'pavements', 'ceilings', 'floors', 'pipes', 'manholes', 'pumps', 'wetland_emissions', 'office_emissions', 'pretreatment', 'special_select_materials', 'liners', 'liners1', 'doors', 'windows', 'griller', 'cables', 'electrical_panels', 'lamps', 'streetlights', 'lights', 'vehicules', 'vehicules1', 'fuel', 'constructed_wetland', 'vehicules2', 'pipes1', 'polimers', 'polimers1', 'polimers2');
		
	}
	
	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
			$data['username']	= ($this->session->userdata['logged_in']['username']);
			$data['useremail'] 	= ($this->session->userdata['logged_in']['useremail']);
			
			$data['page_no']	= 2;
			
			$data['projects']	= $this->operation_model->get_projects_data($this->userid);
			if($this->input->post("project_id")){
				$this->session->set_userdata('project_id', $this->input->post("project_id"));
			}
			$project_id = $this->session->userdata('project_id');
			//print_r("###".$this->session->userdata('project_id'));

			$all_tbl_datas = $this->all_tbl_datas;
			$keys = array_keys($all_tbl_datas);
			for($i = 0; $i < count($all_tbl_datas); $i++) {

				if($i == 0){
					if($project_id && $project_id != ""){
						$result	= $this->operation_model->get_proj_data($this->userid, $project_id);
					}else{
						$result	= $this->operation_model->get_lastproj_data($this->userid);
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
					$result	= $this->operation_model->get_all_tbl_data($data['project_id'], $keys[$i]);
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
						
			foreach($this->all_fixed_tables as $tbl_name){
				$data[$tbl_name]	= $this->operation_model->get_all_fixed_data($tbl_name);
			}
			
			$result = $this->operation_model->get_all_tbl_data($data['project_id'], 'tbl_wetland1');
			if($result != false){
				$data['btm_area'] = $result[0]->btm_area;
			}else{
				$data['btm_area'] = 0;
			}
			
			$result = $this->operation_model->get_all_tbl_data($data['project_id'], 'tbl_wetland2');
			if($result != false){
				$data['tonesCO2'] = $result[0]->tonesCO2;
			}else{
				$data['tonesCO2'] = 0;
			}
			
			$result = $this->operation_model->get_all_tbl_data($data['project_id'], 'tbl_pumps');
			if($result != false){
				$data['airpump_num'] = $result[0]->airpump_num;
				$data['waterpump_num'] = $result[0]->waterpump_num;
			}else{
				$data['airpump_num'] = 0;
				$data['waterpump_num'] = 0;
			}
			
			//$data['tonesCO22']	= $data['bed1_total2'] + $data['bed2_total2'] + $data['bed3_total2'];
			
			$this->load->view('header_main', $data);
			$this->load->view('operation', $data);
			$this->load->view('footer_main');
			
		}else{
			redirect('signin');
		}		
	}
	
	public function validAllDataNumber($field ,$data_field){
		$fields_validation = array(

			"Parameters Total Area"  =>'total_area',
			"Parameters Lifetime of operation"  =>'lifetime',
			"Parameters Treated wastewater"  =>'wastewater',
			"Parameters Population Equivalent"  =>'equivalent',
			"Parameters BOD5 Influent"  =>'bod5_influent',
			"Parameters BOD5 Effluent"  =>'bod5_effluent',
			"Parameters COD Influent"  =>'cod_influent',
			"Parameters COD Effluent"  =>'cod_effluent',
			"Parameters TN Influent"  =>'tn_influent',
			"Parameters TN Effluent"  =>'tn_effluent',
			"Parameters NH4+ Influent"  =>'nh4_influent',
			"Parameters NH4+ Effluent"  =>'nh4_effluent',
			"Parameters NO3- Influent"  =>'no3_influent',
			"Parameters NO3- Effluent"  =>'no3_effluent',
			"Parameters TP Influent"  =>'tp_influent',
			"Parameters TP Effluent"  =>'tp_effluent',
			"Parameters E-coli Influent"  =>'ecoli_influent',
			"Parameters E-coli Effluent"  =>'ecoli_effluent',
			"Constructed Wetland Number Of bed 1"  =>'bed1',
			"Constructed Wetland Number Of bed 2"  =>'bed2',
			"Constructed Wetland Number Of bed 3"  =>'bed3',
			"Electricity Air pump Time"	=>'airpump_time',
			"Electricity Water pump Time"	=>'waterpump_time',
			"Electricity Device 1"	=>'device1_num',
			"Electricity Device 1 time"	=>'device1_time', 
			"Electricity Device 1 comsuption"	=>'device1_comsuption',
			"Electricity Device 2"	=>'device2_num',
			"Electricity Device 2 time"	=>'device2_time', 
			"Electricity Device 2 comsuption"	=>'device2_comsuption',
			"Maintenance Sludge removal"	=>'removal_no',
			"Maintenance Sludge removal time"	=>'removal_time', 
			"Maintenance Pruning Vegetation"	=>'vegetation_no',
			"Maintenance Pruning Vegetation time"	=>'vegetation_time',
			"Maintenance Maintenance travels"	=>'travels_no',
			"Maintenance Maintenance travels time"	=>'travels_time',
			"Maintenance Pipe 1"	=>'pipe1',
			"Maintenance Pipe 2"	=>'pipe2',
			"Maintenance manholes"	=>'manholes',
			"Maintenance lightbulbs"	=>'lightbulbs',
			"Maintenance spotlight"	=>'spotlight',
			"Maintenance airpump"	=>'airpump',
			"Maintenance waterpump"	=>'waterpump'
		);

		$k = array_search($field, $fields_validation);
		if ($k!==false) {
			if (is_numeric($data_field) ){
				return false;
			} else return $k;
		} else return false;

	}

	public function insert_data() {




		$all_tbl_datas = $this->all_tbl_datas;
		
		$keys = array_keys($all_tbl_datas);
		$datas = array();
		for($i = 1; $i < count($all_tbl_datas); $i++) {						
			$data = array();
			$data['userid'] = $this->userid;
			$data['proj_id'] = $this->input->post("project_id");

			foreach($all_tbl_datas[$keys[$i]] as $value) {
				if($this->input->post($value.$i) == ''){
					continue;
				}else{
					$check = $this->validAllDataNumber($value.$i, $this->input->post($value.$i));

					if ($check) {
						
						$this->session->set_flashdata('input_error', array($check, $value.$i));
						redirect('operation');
					}

					$data[$value] = $this->input->post($value.$i);

					
				}				
			}			
			$datas[$keys[$i]] = $data;
		}
		//print_r($datas);

		if(isset($_SESSION['input_error'])){
		    unset($_SESSION['input_error']);
		}

		$result = $this->operation_model->insert_all_tbl($this->input->post("project_id"), $datas);

		$this->session->set_flashdata('project_id', $this->input->post("project_id"));
		redirect('operation');
	}
}
