<?php
Class Project_model extends CI_Model {

	public function insert_data($data) {

		$result = $this->db->insert("tbl_project", $data);
		return $result;
	}
}
?>