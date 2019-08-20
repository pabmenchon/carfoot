<?php
Class Summary_model extends CI_Model {

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
	
}
?>