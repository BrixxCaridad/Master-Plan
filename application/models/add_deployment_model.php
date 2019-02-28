<?php
class add_deployment_model extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	function add_deployment($data)
	{
		
		 return $this->db->insert('dept_info', $data);
	// $query = $this->db->insert('dept_info', $data);
        // return query;
    // $this->db->insert('dept_info',$data);
		}
		
		function display_dep()
		{
			$this->db->select("*");
		$this->db->from("dept_info");

		$query = $this->db->get();
		
		return $query;
		}
		
		
		// function view_dep()
		// {
			// $this->db->select("*");
		// $this->db->from("dept_info");

		// $query = $this->db->get('dept_info');
		
		// return $query;
		// }
		
		// function delete_dep($comp_name)
// {
		// $this->db->where('comp_name', $comp_name);
		// $this->db->delete('dept_info'); 
		// return true;
// }
		
		
		// $this->db->select("*");
		// $this->db->from("company");
		// $query = $this->db->get();
		// return $query;	
		
	
	

	
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

