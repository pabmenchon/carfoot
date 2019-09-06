<?php
Class Users extends CI_Model {

	// Insert registration data in database
	public function registration_insert($data) {

		// Query to check whether username already exist or not
		$condition = "userName = '".$data['userName']."'";
		// Query to check whether email already exist or not
		$condition_email = "userEmail = '".$data['userEmail']."'";

		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where($condition);
		$this->db->or_where($condition_email);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			$data['userPass'] = md5($data['userPass']);
			// Query to insert data in database
			$this->db->insert('tbl_users', $data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
		} else {
			return false;
		}
	}

	// Read data using username and password
	public function login($data) {

		$condition = "userEmail = '".$data['userEmail']."' AND userPass = '".md5($data['userPass'])."'";
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	// Read data from database to show data in admin page
	public function read_user_information($useremail) {
		
		//$db_query = "select * from tbl_users where userEmail = '".$useremail."'";

		$condition = "userEmail = '".$useremail."'";
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		//$query = $this->db->query($db_query);

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}
?>