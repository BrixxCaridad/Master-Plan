<?php
class login_model extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	public function fetch_data()
	{
		$query = $this->db->get("students");
		return $query;
	}

}
