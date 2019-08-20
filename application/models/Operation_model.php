<?php
Class Operation_model extends CI_Model {
	
	public function get_proj_data($userid, $project_id) {
		
		$condition = "id = ".$project_id;
		$this->db->select('*');
		$this->db->from("tbl_project");
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	public function get_lastproj_data($userid) {
		
		$condition = "userid = ".$userid;
		$this->db->select('*');
		$this->db->from("tbl_project");
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function get_all_tbl_data($projid, $tbl_name) {
		
		$condition = "proj_id = ".$projid;
		$this->db->select('*');
		$this->db->from($tbl_name);
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	public function get_projects_data($userid) {
		
		$condition = "userid = ".$userid;
		$this->db->select('*');
		$this->db->from('tbl_project');
		$this->db->where($condition);
		$query = $this->db->get();
		
		$datas = array();
		foreach ($query->result() as $row){			
			$datas[$row->id] = $row->p_name;
		}
		return $datas;
	}

	public function get_all_fixed_data($tbl_name) {
		
		$this->db->select('*');
		$this->db->from($tbl_name);
		$query = $this->db->get();
		
		$datas = array();
		foreach ($query->result() as $row){			
			$datas[$row->id] = $row->source." | ".$row->factor;
		}
		return $datas;
	}
		
	public function insert_all_tbl($projid, $data) {

		foreach($data as $tbl_name => $tbl_data){
			
			$condition = "proj_id =".$projid;
			$this->db->select('*');
			$this->db->from($tbl_name);
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				$this->db->insert($tbl_name, $tbl_data);
			} else {
				$this->db->where($condition);
				$result = $this->db->update($tbl_name, $tbl_data);				
			}			
		}		
	}
}
?>