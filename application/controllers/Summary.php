<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summary extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('summary_model');
		$this->load->model('configuration_model');
		
		$this->userid	= ($this->session->userdata['logged_in']['userid']);
		
		$this->all_tbl_datas = array(
			'tbl_project' => array('p_name', 'p_date')
		);
		
	}
	
	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
			$data['username']	= ($this->session->userdata['logged_in']['username']);
			$data['useremail'] 	= ($this->session->userdata['logged_in']['useremail']);
			
			$data['page_no']		= 3;
			
			$data['projects']	= $this->summary_model->get_projects_data($this->userid);
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
						$result	= $this->summary_model->get_proj_data($this->userid, $project_id);
					}else{
						$result	= $this->summary_model->get_lastproj_data($this->userid);
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
					$result	= $this->summary_model->get_all_tbl_data($data['project_id'], $keys[$i]);
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

			$configs_data = $this->configuration_model->get_all_config($this->userid, $data['project_id'] ,'config');
			
			$all_configs_data = $configs_data?(count($configs_data)?$configs_data[0]:array()):array();
			if ($all_configs_data) {
				$all_configs_data = json_decode(json_encode($all_configs_data), true);
				if (is_array($all_configs_data)&&count($all_configs_data)) {
					
					$data['all_config'] = $all_configs_data;
				}
			}




			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_operation_params');
			if($result != false){
				$data['lifetime']	= $result[0]->lifetime;
				$data['wastewater']	= $result[0]->wastewater;
				$data['equivalent']	= $result[0]->equivalent;
				
				$bod5_influent	= $result[0]->bod5_influent;
				$bod5_effluent	= $result[0]->bod5_effluent;
				$cod_influent	= $result[0]->cod_influent;
				$cod_effluent	= $result[0]->cod_effluent;
				$tn_influent	= $result[0]->tn_influent;
				$tn_effluent	= $result[0]->tn_effluent;
				$nh4_influent	= $result[0]->nh4_influent;
				$nh4_effluent	= $result[0]->nh4_effluent;
				$no3_influent	= $result[0]->no3_influent;
				$no3_effluent	= $result[0]->no3_effluent;
				$tp_influent	= $result[0]->tp_influent;
				$tp_effluent	= $result[0]->tp_effluent;
				$ecoli_influent	= $result[0]->ecoli_influent;
				$ecoli_effluent	= $result[0]->ecoli_effluent;			
			}else{
				$data['lifetime']	= 0;
				$data['wastewater']	= 0;
				$data['equivalent']	= 0;
				
				$bod5_influent	= 0;
				$bod5_effluent	= 0;
				$cod_influent	= 0;
				$cod_effluent	= 0;
				$tn_influent	= 0;
				$tn_effluent	= 0;
				$nh4_influent	= 0;
				$nh4_effluent	= 0;
				$no3_influent	= 0;
				$no3_effluent	= 0;
				$tp_influent	= 0;
				$tp_effluent	= 0;
				$ecoli_influent	= 0;
				$ecoli_effluent	= 0;		
				
			}
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_hut');
			$tonesCO2_hut = $result != false ? $result[0]->tonesCO2 : 0;
						
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_pretreatment_tank');
			$tonesCO2_pretreatment_tank	= $result != false ? $result[0]->tonesCO2 : 0;
						
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_pretreatment_situ');
			$tonesCO2_pretreatment_situ	= $result != false ? $result[0]->tonesCO2 : 0;
						
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_wetland1');
			$tonesCO2_wetland1	= $result != false ? $result[0]->tonesCO2 : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_wetland2');
			$tonesCO2_wetland2	= $result != false ? $result[0]->tonesCO2 : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_wetland3');
			$tonesCO2_wetland3	= $result != false ? $result[0]->tonesCO2 : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_pipes');
			$tonesCO2_pipes		= $result != false ? $result[0]->tonesCO2 : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_pumps');
			$tonesCO2_pumps		= $result != false ? $result[0]->tonesCO2 : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_electrical');
			$tonesCO2_electrical= $result != false ? $result[0]->tonesCO2 : 0;
			
			$data['tonesCO2_material_cons']	= $tonesCO2_hut + $tonesCO2_pretreatment_tank + $tonesCO2_pretreatment_situ + $tonesCO2_wetland1 + $tonesCO2_wetland2 + $tonesCO2_wetland3 + $tonesCO2_pipes + $tonesCO2_pumps + $tonesCO2_electrical;
			
			$data['tonesCO2_material_c_cons']	= $data['tonesCO2_material_cons'] * 0.2727;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_project_draw');
			$tonesCO2_project_draw= $result != false ? $result[0]->p_subtotal : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_electricity');
			$tonesCO2_electricity= $result != false ? $result[0]->tonesCO2 : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_excavation');
			$tonesCO2_excavation= $result != false ? $result[0]->tonesCO2 : 0;
			
			$data['tonesCO2_energy_cons']	= $tonesCO2_project_draw + $tonesCO2_electricity + $tonesCO2_excavation;
			
			$data['tonesCO2_energy_c_cons']	= $data['tonesCO2_energy_cons'] * 0.2727;
			
			$data['tonesCO2_cons_total']	= $data['tonesCO2_material_cons'] + $data['tonesCO2_energy_cons'];
			
			$data['tonesCO2_c_cons_total']	= $data['tonesCO2_material_c_cons'] + $data['tonesCO2_energy_c_cons'];
			
			if($data['tonesCO2_cons_total'] == 0){
				$data['tonesCO2_material_cons_p']	= 0;
				$data['tonesCO2_energy_cons_p']		= 0;
			}else{
				$data['tonesCO2_material_cons_p']	= $data['tonesCO2_material_cons'] * 100 / $data['tonesCO2_cons_total'];
				$data['tonesCO2_energy_cons_p']		= $data['tonesCO2_energy_cons'] * 100 / $data['tonesCO2_cons_total'];
			}
			
			
			
			$data['tonesCO2_cons_total_p']	= $data['tonesCO2_material_cons_p'] + $data['tonesCO2_energy_cons_p'];
			
			//////////////
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_operation_wetland');
			$data['tonesCO2_wetland_operation'] = $result != false ? $result[0]->tonesCO2 : 0;
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_operation_electricty');
			$tonesCO2_operation_electricty = $result != false ? $result[0]->tonesCO2 : 0;
			
			$data['tonesCO2_energy_operation']		= $tonesCO2_operation_electricty * 365 * $data['lifetime'];
			
			$result				= $this->summary_model->get_all_tbl_data($data['project_id'], 'tbl_operation_maintenance');
			$data['tonesCO2_maintenance_operation'] = $result != false ? $result[0]->tonesCO2 : 0;
			
			$data['tonesCO2_operation_total']			= $data['tonesCO2_wetland_operation'] + $data['tonesCO2_energy_operation'] + $data['tonesCO2_maintenance_operation'];
			
			$data['tonesCO2_c_wetland_operation']		= $data['tonesCO2_wetland_operation'] * 0.2727;
			
			$data['tonesCO2_c_energy_operation']		= $data['tonesCO2_energy_operation'] * 0.2727;
			
			$data['tonesCO2_c_maintenance_operation']	= $data['tonesCO2_maintenance_operation'] * 0.2727;
			
			$data['tonesCO2_c_operation_total']	= $data['tonesCO2_c_wetland_operation'] + $data['tonesCO2_c_energy_operation'] + $data['tonesCO2_c_maintenance_operation'];
			
			if($data['tonesCO2_operation_total'] == 0){
				$data['tonesCO2_wetland_operation_p']		= 0;				
				$data['tonesCO2_energy_operation_p']		= 0;				
				$data['tonesCO2_maintenance_operation_p']	= 0;
			}else{
				$data['tonesCO2_wetland_operation_p']		= $data['tonesCO2_wetland_operation'] * 100 / $data['tonesCO2_operation_total'];					
				$data['tonesCO2_energy_operation_p']		= $data['tonesCO2_energy_operation'] * 100 / $data['tonesCO2_operation_total'];				
				$data['tonesCO2_maintenance_operation_p']	= $data['tonesCO2_maintenance_operation'] * 100 / $data['tonesCO2_operation_total'];
			}
			
			$data['tonesCO2_operation_total_p']	= $data['tonesCO2_wetland_operation_p'] + $data['tonesCO2_energy_operation_p'] + $data['tonesCO2_maintenance_operation_p'];
			
			///////////////
			$data['tonesCO2_energy_source']		= $data['tonesCO2_energy_cons'] + $data['tonesCO2_energy_operation'];
			
			$data['tonesCO2_c_energy_source']	= $data['tonesCO2_energy_source'] * 0.2727;
			
			$data['tonesCO2_total_source']		= $data['tonesCO2_material_cons'] + $data['tonesCO2_energy_source'] + $data['tonesCO2_maintenance_operation'] + $data['tonesCO2_wetland_operation'];
			
			$data['tonesCO2_c_total_source']	= $data['tonesCO2_material_c_cons'] + $data['tonesCO2_c_energy_source'] + $data['tonesCO2_c_maintenance_operation'] + $data['tonesCO2_c_wetland_operation'];
			
			if($data['tonesCO2_total_source'] == 0){
				$data['tonesCO2_material_source_p']		= 0;
				$data['tonesCO2_energy_source_p']		= 0;
				$data['tonesCO2_maintenance_source_p']	= 0;
				$data['tonesCO2_wetland_source_p']		= 0;
			}else{
				$data['tonesCO2_material_source_p']		= $data['tonesCO2_material_cons'] * 100 / $data['tonesCO2_total_source'];
				$data['tonesCO2_energy_source_p']		= $data['tonesCO2_energy_source'] * 100 / $data['tonesCO2_total_source'];
				$data['tonesCO2_maintenance_source_p']	= $data['tonesCO2_maintenance_operation'] * 100 / $data['tonesCO2_total_source'];
				$data['tonesCO2_wetland_source_p']		= $data['tonesCO2_wetland_operation'] * 100 / $data['tonesCO2_total_source'];
			}
			
			$data['tonesCO2_total_source_p']		= $data['tonesCO2_material_source_p'] + $data['tonesCO2_energy_source_p'] + $data['tonesCO2_maintenance_source_p'] + $data['tonesCO2_wetland_source_p'];
			
			//////////////////
			$data['tonesCO2_indirect_emission']		= $data['tonesCO2_cons_total'] + $data['tonesCO2_energy_operation'];
			$data['tonesCO2_direct_emission']		= $data['tonesCO2_wetland_operation'] + $data['tonesCO2_maintenance_operation'];
			
			$data['tonesCO2_c_indirect_emission']	= $data['tonesCO2_indirect_emission'] * 0.2727;
			$data['tonesCO2_c_direct_emission']		= $data['tonesCO2_direct_emission'] * 0.2727;
			
			$tonesCO2_total_emission = $data['tonesCO2_indirect_emission'] + $data['tonesCO2_direct_emission'];
			if($tonesCO2_total_emission == 0){
				$data['tonesCO2_indirect_emission_p']	= 0;
				$data['tonesCO2_direct_emission_p']		= 0;
			}else{
				$data['tonesCO2_indirect_emission_p']	= $data['tonesCO2_indirect_emission'] * 100 / $tonesCO2_total_emission;
				$data['tonesCO2_direct_emission_p']		= $data['tonesCO2_direct_emission'] * 100 / $tonesCO2_total_emission;
			}
			
			///////////////
			if($data['lifetime'] * 365 * $data['wastewater'] == 0){
				$data['tonesCO2_m3']	= 0;
			}else{
				$data['tonesCO2_m3']	= $data['tonesCO2_total_source'] * 1000 / ($data['lifetime'] * 365 * $data['wastewater']);
			}
			
			if($data['equivalent'] == 0){
				$data['tonesCO2_pe']	= 0;	
			}else{
				$data['tonesCO2_pe']	= $data['tonesCO2_total_source'] * 1000 / $data['equivalent'];
			}
			
			if((($bod5_influent - $bod5_effluent) / 1000) * $data['wastewater'] * 365 * $data['lifetime'] == 0){
				$data['tonesCO2_dbo5']	= 0;
			}else{
				$data['tonesCO2_dbo5']	= $data['tonesCO2_total_source'] * 1000 / ((($bod5_influent - $bod5_effluent) / 1000) * $data['wastewater'] * 365 * $data['lifetime']);
			}
			
			if((($cod_influent - $cod_effluent) / 1000) * $data['wastewater'] * 366 * $data['lifetime'] == 0){
				$data['tonesCO2_cod']	= 0;
			}else{
				$data['tonesCO2_cod']	= $data['tonesCO2_total_source'] * 1000 / ((($cod_influent - $cod_effluent) / 1000) * $data['wastewater'] * 366 * $data['lifetime']);
			}
			
			if((($tn_influent - $tn_effluent) / 1000) * $data['wastewater'] * 367 * $data['lifetime'] == 0){
				$data['tonesCO2_tn']	= 0;
			}else{
				$data['tonesCO2_tn']	= $data['tonesCO2_total_source'] * 1000 / ((($tn_influent - $tn_effluent) / 1000) * $data['wastewater'] * 367 * $data['lifetime']);		
			}
			
			if((($nh4_influent - $nh4_effluent) / 1000) * $data['wastewater'] * 368 * $data['lifetime'] == 0){
				$data['tonesCO2_nh4']	= 0;
			}else{
				$data['tonesCO2_nh4']	= $data['tonesCO2_total_source'] * 1000 / ((($nh4_influent - $nh4_effluent) / 1000) * $data['wastewater'] * 368 * $data['lifetime']);		
			}
			
			if((($no3_influent - $no3_effluent) / 1000) * $data['wastewater'] * 369 * $data['lifetime'] == 0){
				$data['tonesCO2_no3']	= 0;
			}else{
				$data['tonesCO2_no3']	= $data['tonesCO2_total_source'] * 1000 / ((($no3_influent - $no3_effluent) / 1000) * $data['wastewater'] * 369 * $data['lifetime']);
			}
			
			if((($tp_influent - $tp_effluent) / 1000) * $data['wastewater'] * 370 * $data['lifetime'] == 0){
				$data['tonesCO2_tp']	= 0;
			}else{
				$data['tonesCO2_tp']	= $data['tonesCO2_total_source'] * 1000 / ((($tp_influent - $tp_effluent) / 1000) * $data['wastewater'] * 370 * $data['lifetime']);		
			}
			
			if((($ecoli_influent - $ecoli_effluent) * 100) * $data['wastewater'] * 371 * $data['lifetime'] == 0){
				$data['tonesCO2_coli']	= 0;
			}else{
				$data['tonesCO2_coli']	= $data['tonesCO2_total_source'] * 1000 / ((($ecoli_influent - $ecoli_effluent) * 100) * $data['wastewater'] * 371 * $data['lifetime']);
			}
			
			$data['tonesCO2_m3_c']	= $data['tonesCO2_m3'] * 0.2727;
			$data['tonesCO2_pe_c']	= $data['tonesCO2_pe'] * 0.2727;
			$data['tonesCO2_dbo5_c']= $data['tonesCO2_dbo5'] * 0.2727;
			$data['tonesCO2_cod_c']	= $data['tonesCO2_cod'] * 0.2727;
			$data['tonesCO2_tn_c']	= $data['tonesCO2_tn'] * 0.2727;
			$data['tonesCO2_nh4_c']	= $data['tonesCO2_nh4'] * 0.2727;
			$data['tonesCO2_no3_c']	= $data['tonesCO2_no3'] * 0.2727;
			$data['tonesCO2_tp_c']	= $data['tonesCO2_tp'] * 0.2727;
			$data['tonesCO2_coli_c']= $data['tonesCO2_coli'] * 0.2727;
		
			
			$this->load->view('header_main', $data);
			$this->load->view('summary', $data);
			$this->load->view('footer_main');
			
		}else{
			redirect('signin');
		}
		
	}
}
