<?php
Class Configuration_model extends CI_Model {
		
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

	public function get_all_config($userid, $projectid, $tbl_name){
		$this->db->select('*');
		$this->db->from($tbl_name);	
		$this->db->where('proj_id', $projectid)	;
		$this->db->where('userid', $userid);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
					
	}

	public function insert_config($userid, $projectid, $data, $tbl_name) {
		$data['userid'] = $userid;
		$data['proj_id'] = $projectid;

		$this->db->insert($tbl_name, $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else return false;
	}

	public function update_config( $userid, $projectid, $data, $tbl_name){

		$this->db->select('*');
		$this->db->from($tbl_name);
		$this->db->where('userid', $userid);
		$this->db->where('proj_id', $projectid);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return $this->insert_config($userid, $projectid, $data, $tbl_name);
		} else {
			if ($data&&count($data)) {
				foreach ($data as $key => $value) {
					$this->db->set($key, $value);		
				}
			}

			
			$this->db->where('userid', $userid);
			$this->db->where('proj_id', $projectid);

			return $this->db->update($tbl_name);			
		}
	}
	


}
?>