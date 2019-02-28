<?php
class Users_model extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	public function get_usersfic()
	{
		$this->db->select('*');
		$this->db->from('facultyincharge');
        $this->db->where('fic_uname');
        $this->db->where('fic_password');
        $this->db->where('role',"facultyincharge");
        
        if('role' == "1")
        {
        	echo "<script>window.location.href='http://localhost/sita/irjp';</script>";
        }
        else
        {
        	echo "<script>window.location.href='http://localhost/sita/fic';</script>";
        }

        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return false;
        else
            return $query->result();

		$query = $this->db->get("users");
		return $query->result_array();	
	}

	public function get_usersstud()
	{
		$query = $this->db->get('students');
		return $query->result_array();	
	}

	function login($fic_uname, $fic_password)
	{

		$this->db->where('fic_uname', $fic_uname);
		$this->db->where('fic_password', $fic_password);
		$query = $this->db->get('facultyincharge');

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
