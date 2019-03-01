<?php
class company_model extends CI_Model {

	

	function add_company($company_info)
	{
		$this->db->insert('company', $company_info);
	}

	function display_company()
	{
		$this->db->select("*");
		$this->db->from("company");
		$this->db->join('classification', 'company.Company_Code = classification.Company_Code', 'left');
        $this->db->join('type', 'classification.Type_No = type.Type_No', 'left');
		$query = $this->db->get();
		return $query;							
	}
	
	function search_company($q)
	{
		$this->db->select("*");
		$this->db->from("company");
		$this->db->join('classification', 'company.Company_Code = classification.Company_Code', 'left');
        $this->db->join('type', 'classification.Type_No = type.Type_No', 'left');
        $this->db->like("Company_Name",$q);
        $this->db->or_like("Company_Address",$q);
        $this->db->or_like("Type",$q);
        $this->db->or_like("company.Company_Code",$q);
		$query = $this->db->get();
		return $query;							
	}
	
	
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
