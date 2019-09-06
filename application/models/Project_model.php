<?php
Class Project_model extends CI_Model {


	public function get_project($id){

		$this->db->select('*');
		$this->db->from("tbl_project");
		$this->db->where('id', $id);

		$this->db->limit(1);
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}

	}

	public function insert_data($data) {

		$result = $this->db->insert("tbl_project", $data);
		return $result;
	}


	public function delete_project($id) {

		$array = array(  
				'tbl_hut','tbl_excavation','tbl_electricity','tbl_pretreatment_tank','tbl_pretreatment_situ','tbl_wetland1',
				'tbl_wetland2','tbl_wetland3', 'tbl_pipes','tbl_pumps','tbl_electrical','tbl_project_draw'
		)
		foreach ($array as $key => $value) {
			$this->db->delete($value, array('proj_id' => $id));
		}
		return $this->db->delete('tbl_project', array('id' => $id));


	}
}
?>