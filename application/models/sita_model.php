<?php
class sita_model extends CI_Model {

	// public function __construct() 
	// {
	// 	$this->load->database();
	// }
	public function display_dep()
	{
		$this->db->select("*");
		$this->db->from("sit");
		$this->db->join('company', 'sit.Company_Code = company.Company_Code', 'inner');
		$this->db->join('faculty', 'sit.Faculty_ID = faculty.Faculty_ID', 'inner');
		$query = $this->db->get();
		
		return $query;		
	}

	function login($uname, $password)
	{
		$this->db->where('Student_ID', $uname);
		$this->db->where('Password', $password);
		$query = $this->db->get('student');
		if($query->num_rows() > 0)
		{
			return 'student';
		}
		else
		{
			$this->db->where('Faculty_ID', $uname);
			$this->db->where('Password', $password);
			$query = $this->db->get('faculty');
			if($query->num_rows() > 0)
			{
				return 'faculty';
			}
			else
			{
				return null;
			}
		}
	}

	function getstudentfrom_cred($uname, $password){
		$this->db->where('Student_ID', $uname);
		$this->db->where('Password', $password);
		$query = $this->db->get('student');
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
		$this->db->where('Faculty_ID', $uname);
		$this->db->where('Password', $password);
		$query = $this->db->get('faculty');
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
		else
		{
			return null;
		}
	}

	public function display_studentinfo_byid($id)
	{
		
		$this->db->select("*");
		$this->db->from("student");
		$this->db->where("Student_ID", $id);
		$this->db->join('course', 'student.Course_Code = course.Course_Code', 'left');
        $this->db->join('college', 'course.College_Code = college.College_Code', 'left');
		$query = $this->db->get();
		return $query;		
	}

	public function update_studentinfo_byid($id,$info)
	{
		$this->db->where("Student_ID", $id);
		$this->db->update('student', $info);
	}
}
