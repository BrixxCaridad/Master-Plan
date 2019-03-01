<?php
class sita_model extends CI_Model {

	// public function __construct() 
	// {
	// 	$this->load->database();
	// }

	function login($uname, $password)
	{
		$this->db->where('id_num', $uname);
		$this->db->where('s_password', $password);
		$query = $this->db->get('students');
		if($query->num_rows() > 0)
		{
			return 'student';
		}
		else
		{
			$this->db->where('id', $uname);
			$this->db->where('fic_password', $password);
			$query = $this->db->get('facultyincharge');
			if($query->num_rows() > 0)
			{
				return 'fic';
			}
			else
			{
				return null;
			}
		}
	}

	function getstudentfrom_cred($uname, $password){
		$this->db->where('id_num', $uname);
		$this->db->where('s_password', $password);
		$query = $this->db->get('students');
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return null;
		}
	}

	function getficfrom_cred($uname, $password){
		$this->db->where('id', $uname);
		$this->db->where('fic_password', $password);
		$query = $this->db->get('facultyincharge');
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return null;
		}
	}
}
