<?php
class dep_info_model extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	public function display_dep()
	{
		
		$this->db->select("*");
		$this->db->from("dept_info");
		// $this->db->where("id", $id);

		$query = $this->db->get();
		
		return $query;		
	}
	
	function delete_data($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("dept_info");
	}
	
	function view_dep($id)
	{
		$this->db->where("id", $id);
		$query = $this->db->get();
		return $query;
	}
	function view_dep_update($id)
	{
		$query = $this->db->query("SELECT * FROM dept_info WHERE id = '$id'");
		return $query->result_array();
	}
	
	function update_single($id, $comp_name, $supervisor, $date_deployed, $end_train, $required_hrs, $rendered_hrs, $remaining_hrs, $visit_date, $visit, $status){
		$query = $this->db->query("UPDATE `dept_info` SET `comp_name`='$comp_name',`supervisor`='$supervisor',`date_deployed`='$date_deployed',`end_train`='$end_train',`required_hrs`='$required_hrs',`rendered_hrs`='$rendered_hrs',`remaining_hrs`='$remaining_hrs',`visit_date`='$visit_date',`visit`='$visit',`status`='$status' WHERE `id`= '$id'");
		return true;
	}

	
	// public function view_dep()
	// {
		// $this->db->select("*");
		// $this->db->from("dept_info");
		// $this->db->limit(1);
		// $query = $this->db->get();
		
		// return $query;
	// }

	
	// function add_company()
	// {
			
		// $this->db->select("nature_business");
		// $this->db->from("nature_table");
		// $query = $this->db->get();
		// return $query;
		
	// }
	
	// public function nature_business()
	// {
			
		// $this->db->select("*");
		// $this->db->from("nature_table");
		// $query = $this->db->get();
		// return $query;
		
	// }
	
		
		
        // $this->db->where('fic_uname');
        // $this->db->where('fic_password');
        // $this->db->where('role',"facultyincharge");
        
        // if('role' == "1")
        // {
        	// echo "<script>window.location.href='http://localhost/sita/irjp';</script>";
        // }
        // else
        // {
        	// echo "<script>window.location.href='http://localhost/sita/fic';</script>";
        // }

        // $query=$this->db->get();
        // if ($query->num_rows() == 0)
            // return false;
        // else
            // return $query->result();

		// $query = $this->db->get("users");
		// return $query->result_array();	
	// }

}
