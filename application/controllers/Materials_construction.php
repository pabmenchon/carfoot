<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials_construction extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('materials');
		$this->load->model('factor');
		
		$this->userid	= ($this->session->userdata['logged_in']['userid']);
		
		$this->all_tbl_datas = array(
			'tbl_project' => array('p_name', 'p_date'),			
			
			'tbl_hut' => array('length', 'height', 'width', 'floors_num', 'pilars30_num', 'pilars25_num', 'paint', 'doors_num', 'windows_num', 'partitions_elem', 'partitions_mat','partitions_total', 'roof_elem', 'roof_mat', 'roof_total', 'facing_elem','facing_mat', 'facing_total', 'floor_elem', 'floor_mat', 'floor_total','pavement_elem', 'pavement_mat', 'pavement_total', 'pilars_elem', 'pilars_mat', 'pilars_total', 'paint_elem', 'paint_mat', 'paint_total', 'door_elem', 'door_mat', 'door_total', 'windows_elem', 'windows_mat', 'windows_total', 'tonesCO2'),
			
			'tbl_excavation' => array('excavator1', 'excavator1_model', 'excavator1_fuel', 'excavator1_time', 'excavator1_total', 'excavator2', 'excavator2_model', 'excavator2_fuel', 'excavator2_time', 'excavator2_total', 'truck1','truck1_model', 'truck1_fuel', 'truck1_time', 'truck1_total', 'truck2','truck2_model', 'truck2_fuel', 'truck2_time', 'truck2_total', 'tonesCO2'),
			
			'tbl_electricity' => array('device1_num', 'device1_cons', 'device1_src', 'device1_time', 'device1_total', 'device2_num', 'device2_cons', 'device2_src', 'device2_time', 'device2_total', 'device3_num','device3_cons', 'device3_src', 'device3_time', 'device3_total', 'tonesCO2'),
			
			'tbl_pretreatment_tank' => array('tank1_num', 'tank1_elem', 'tank1_mat', 'tank1_total', 'tank2_num', 'tank2_elem', 'tank2_elem', 'tank2_mat', 'tank2_total', 'tank3_num', 'tank3_elem','tank3_mat', 'tank3_total', 'tonesCO2'),
			
			'tbl_pretreatment_situ' => array('length', 'height', 'width', 'griller', 'tank_elem', 'tank_mat', 'tank_total', 'griller_elem', 'griller_mat', 'griller_total', 'tonesCO2'),
			
			'tbl_wetland1' => array('length', 'width', 'deep', 'layer1', 'layer2', 'layer3', 'layer4', 'layer5', 'stone_width', 'stone_height','btm_area', 'top_area', 'beds_no', 'geotextil_elem', 'geotextil_mat','geotextil_total', 'liner_elem', 'liner_mat', 'liner_total', 'leak_liner_elem','leak_liner_mat', 'leak_liner_total', 'bed1_elem', 'bed1_mat', 'bed1_total', 'bed2_elem', 'bed2_mat', 'bed2_total', 'bed3_elem', 'bed3_mat', 'bed3_total', 'bed4_elem', 'bed4_mat', 'bed4_total', 'bed5_elem', 'bed5_mat', 'bed5_total', 'stone_elem', 'stone_mat', 'stone_total', 'vege_matter_elem', 'vege_matter_mat', 'vege_matter_total', 'tonesCO2'),
			
			'tbl_wetland2' => array('length', 'width', 'deep', 'layer1', 'layer2', 'layer3', 'layer4', 'layer5', 'stone_width', 'stone_height','btm_area', 'top_area', 'beds_no', 'geotextil_elem', 'geotextil_mat','geotextil_total', 'liner_elem', 'liner_mat', 'liner_total', 'leak_liner_elem','leak_liner_mat', 'leak_liner_total', 'bed1_elem', 'bed1_mat', 'bed1_total', 'bed2_elem', 'bed2_mat', 'bed2_total', 'bed3_elem', 'bed3_mat', 'bed3_total', 'bed4_elem', 'bed4_mat', 'bed4_total', 'bed5_elem', 'bed5_mat', 'bed5_total', 'stone_elem', 'stone_mat', 'stone_total', 'vege_matter_elem', 'vege_matter_mat', 'vege_matter_total', 'tonesCO2'),
			
			'tbl_wetland3' => array('length', 'width', 'deep', 'layer1', 'layer2', 'layer3', 'layer4', 'layer5', 'stone_width', 'stone_height','btm_area', 'top_area', 'beds_no', 'geotextil_elem', 'geotextil_mat','geotextil_total', 'liner_elem', 'liner_mat', 'liner_total', 'leak_liner_elem','leak_liner_mat', 'leak_liner_total', 'bed1_elem', 'bed1_mat', 'bed1_total', 'bed2_elem', 'bed2_mat', 'bed2_total', 'bed3_elem', 'bed3_mat', 'bed3_total', 'bed4_elem', 'bed4_mat', 'bed4_total', 'bed5_elem', 'bed5_mat', 'bed5_total', 'stone_elem', 'stone_mat', 'stone_total', 'vege_matter_elem', 'vege_matter_mat', 'vege_matter_total', 'tonesCO2'),
			
			'tbl_pipes' => array('length1', 'pipe1_elem', 'pipe1_mat', 'pipe1_total', 'length2', 'pipe2_elem', 'pipe2_mat', 'pipe2_total', 'length3', 'pipe3_elem', 'pipe3_mat','pipe3_total', 'manholes_num', 'manhole_elem', 'manhole_mat', 'manhole_total', 'tonesCO2'),
			
			'tbl_pumps' => array('airpump_num', 'airpump_elem', 'airpump_mat', 'airpump_total', 'waterpump_num', 'waterpump_elem', 'waterpump_mat', 'waterpump_total', 'tonesCO2'),
			
			'tbl_electrical' => array('panels_num', 'panels_elem', 'panels_mat', 'panels_total', 'switches_num', 'switches_elem', 'switches_mat', 'switches_total', 'mcb_num', 'mcb_elem','mcb_mat', 'mcb_total', 'cables1_num', 'cables1_elem', 'cables1_mat','cables1_total', 'cables2_num', 'cables2_elem', 'cables2_mat', 'cables2_total','bulbs1_num', 'bulbs1_elem', 'bulbs1_mat', 'bulbs1_total', 'bulbs2_num', 'bulbs2_elem', 'bulbs2_mat', 'bulbs2_total', 'bulbs3_num', 'bulbs3_elem', 'bulbs3_mat', 'bulbs3_total', 'spotlight1_num', 'spotlight1_elem', 'spotlight1_mat', 'spotlight1_total', 'spotlight2_num', 'spotlight2_elem', 'spotlight2_mat', 'spotlight2_total', 'streetlight1_num', 'streetlight1_elem', 'streetlight1_mat', 'streetlight1_total', 'streetlight2_num', 'streetlight2_elem', 'streetlight2_mat', 'streetlight2_total', 'tonesCO2'),
			
			'tbl_project_draw' => array('p_hours', 'p_elem', 'p_subtotal')
			
		);
		
		$this->all_fixed_tables = array('materials', 'materials_density_factors', 'liquids_density_factors', 'woods', 'rocks_stones', 'artificials_stones', 'construction_materials', 'bulk_materials', 'partitionss', 'facings', 'concrete', 'mortars_mixes', 'pavements', 'ceilings', 'floors', 'pipes', 'manholes', 'pumps', 'wetland_emissions', 'office_emissions', 'pretreatment', 'special_select_materials', 'liners', 'liners1', 'doors', 'windows', 'griller', 'cables', 'electrical_panels', 'lamps', 'streetlights', 'lights', 'vehicules', 'vehicules1', 'fuel', 'constructed_wetland', 'vehicules2', 'pipes1', 'polimers', 'polimers1', 'polimers2');
		
	}	
	
	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
			
			$data['username']		= ($this->session->userdata['logged_in']['username']);
			$data['useremail'] 		= ($this->session->userdata['logged_in']['useremail']);
			
			$data['page_no']		= 1;

			$data['projects']	= $this->materials->get_projects_data($this->userid);
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
						$result	= $this->materials->get_proj_data($this->userid, $project_id);
					}else{
						$result	= $this->materials->get_lastproj_data($this->userid);
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
					$result	= $this->materials->get_all_tbl_data($data['project_id'], $keys[$i]);
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
				$data[$tbl_name]	= $this->materials->get_all_fixed_data($tbl_name);
			}

			//print_r($data);					
			/* foreach($this->all_factor_datas as $tbl_name){
				$all_data = $this->factor->get_all_factor_datas($tbl_name);
				$data[$tbl_name] = $all_data;
			} */
			
			$this->load->view('header_main', $data);
			$this->load->view('materials_construction', $data);
			$this->load->view('footer_main');
			
		}else{
			redirect('signin');
		}
		
	}
	
	public function validAllDataNumber($field ,$data_field){
		// 
		$fields_validation = array(
			"Project Hours" 						=>  'p_hours12',

			"Hut length"             				=>'length1', 
			"Hut height"              				=>'height1', 
			"Hut width"              				=>'width1', 
			"Hut floors"              				=>'floors_num1', 
			"Hut pilars 30"              			=>'pilars30_num1', 
			"Hut pilars 25"              			=>'pilars25_num1', 
			"Hut paint"              				=>'paint1', 
			"Hut doors"              				=>'doors_num1', 
			"Hut windows"							=>'windows_num1',

			"Excavation Excavator 1 num"			=>'excavator12',
			"Excavation Excavator 1 time"			=>'excavator1_time2',
			"Excavation Excavator 2"				=>'excavator22',
			"Excavation Excavator 2 time"			=>'excavator2_time2',
			"Excavation Truck 1 num"				=>'truck12',
			"Excavation Truck 1 time"				=>'truck1_time2',
			"Excavation Truck 2 num"				=>'truck22',
			"Excavation Truck 2 time"				=>'truck2_time2',

			"Electricity Device 1 num"				=>'device1_num3', 
			"Electricity Device 1 Consuption"		=>'device1_cons3',
			"Electricity Device 1 Time"				=>'device1_time3',
			"Electricity Device 2 num"				=>'device2_num3', 
			"Electricity Device 2 Consuption"		=>'device2_cons3',
			"Electricity Device 2 Time"				=>'device2_time3',
			"Electricity Device 3 num"				=>'device3_num3', 
			"Electricity Device 3 Consuption"		=>'device3_cons3',
			"Electricity Device 3 Time"				=>'device3_time3',

			"Pretreatment Tank 1 num"				=>'tank1_num4',
			"Pretreatment Tank 2 num"				=>'tank2_num4',
			"Pretreatment Tank 3 num"				=>'tank3_num4',

			"Pretreatment Built 'in situ' length"				=>'length5', 
			"Pretreatment Built 'in situ' height"				=>'height5', 
			"Pretreatment Built 'in situ' width"				=>'width5', 
			"Pretreatment Built 'in situ' grillers"				=>'griller5',

			"Wetland 1 length"				=>'length6', 
			"Wetland 1 width"				=>'width6', 
			"Wetland 1 deep"				=>'deep6', 
			"Wetland 1 layer 1"				=>'layer16', 
			"Wetland 1 layer 2"				=>'layer26', 
			"Wetland 1 layer3"				=>'layer36', 
			"Wetland 1 layer4"				=>'layer46', 
			"Wetland 1 layer5"				=>'layer56', 
			"Wetland 1 stone width"			=>'stone_width6', 
			"Wetland 1 stone height"		=>'stone_height6',			
			"Wetland 1 bed num"				=>'beds_no6',

			"Wetland 2 length"				=>'length7', 
			"Wetland 2 width"				=>'width7', 
			"Wetland 2 deep"				=>'deep7', 
			"Wetland 2 layer 1"				=>'layer17', 
			"Wetland 2 layer 2"				=>'layer27', 
			"Wetland 2 layer3"				=>'layer37', 
			"Wetland 2 layer4"				=>'layer47', 
			"Wetland 2 layer5"				=>'layer57', 
			"Wetland 2 stone width"			=>'stone_width7', 
			"Wetland 2 stone height"		=>'stone_height7',			
			"Wetland 2 bed num"				=>'beds_no7',

			"Wetland 3 length"				=>'length8', 
			"Wetland 3 width"				=>'width8', 
			"Wetland 3 deep"				=>'deep8', 
			"Wetland 3 layer 1"				=>'layer18', 
			"Wetland 3 layer 2"				=>'layer28', 
			"Wetland 3 layer3"				=>'layer38', 
			"Wetland 3 layer4"				=>'layer48', 
			"Wetland 3 layer5"				=>'layer58', 
			"Wetland 3 stone width"			=>'stone_width8', 
			"Wetland 3 stone height"		=>'stone_height8',			
			"Wetland 3 bed num"				=>'beds_no8',

			"Pipes length 1"				=>'length19',
			"Pipes length 2"				=>'length29',
			"Pipes length 3"				=>'length39',
			"Pipes manholes num"			=>'manholes_num9',

			"Air pump"						=>'airpump_num10',
			"Water pump"					=>'waterpump_num10',

			"Electrical panels"				=>'panels_num11', 
			"Electrical switches"			=>'switches_num11', 
			"Electrical mcb"				=>'mcb_num11', 
			"Electrical cables 1"			=>'cables1_num11', 
			"Electrical cables 2"			=>'cables2_num11', 
			"Electrical Light bulbs 1"		=>'bulbs1_num11', 
			"Electrical Light bulbs 2"		=>'bulbs2_num11', 
			"Electrical Light bulbs 3"		=>'bulbs3_num11', 
			"Electrical Spotlight 1"		=>'spotlight1_num11', 
			"Electrical Spotlight 2"		=>'spotlight2_num11', 
			"Electrical Streetlight 1"		=>'streetlight1_num11', 
			"Electrical Streetlight 2"		=>'streetlight2_num11'


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
						redirect('materials_construction');
					}

					$data[$value] = $this->input->post($value.$i);
				}
				

			}			
			$datas[$keys[$i]] = $data;
		}

		if(isset($_SESSION['input_error'])){
		    unset($_SESSION['input_error']);
		}


		$result = $this->materials->insert_all_tbl($this->input->post("project_id"), $datas);

		$this->session->set_flashdata('project_id', $this->input->post("project_id"));
		redirect('materials_construction');
	}
}
