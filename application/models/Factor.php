<?php
Class Factor extends CI_Model {
		
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

	public function get_all_factor_datas($tbl_name) {
		
		$this->db->select('*');
		$this->db->from($tbl_name);
		$query = $this->db->get();
		
		return $query->result();
	}


	public function search_factor_datas($q, $tbl_name){
		$this->db->select('*');
		$this->db->from($tbl_name);
		$this->db->like('source', $q);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	public function get_factor_data($id, $tbl_name){
		$this->db->select('*');
		$this->db->from($tbl_name);
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		return $query->result();
	}

	public function add_factor($type, $source, $factor, $unit, $reference) {

		$data = array(
	        'source'	=> $source,
	        'factor'	=> $factor,
	        'unit'  	=> $unit,
	        'reference' => $reference
	    );

	    return $this->db->insert($type,$data);
	}

	public function edit_factor($id, $type, $source, $factor, $unit, $reference){

		$this->db->set('source', $source);
		$this->db->set('factor', $factor);
		$this->db->set('unit', $unit);
		$this->db->set('reference', $reference);

		$this->db->where('id', $id);

		return $this->db->update($type);
	}

	public function delete_factor($id, $type) {

		
		return $this->db->delete($type, array('id' => $id));
	}

}
?>