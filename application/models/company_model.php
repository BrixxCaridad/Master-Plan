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
		$this->db->join('business_type', 'company.btype_id = business_type.id', 'left');
        $this->db->join('nature_table', 'company.nature = nature_table.id', 'left');
		$query = $this->db->get();
		return $query;							
	}
	function display_nature()
	{
		$this->db->select("*");
		$this->db->from("nature_table");
		$query = $this->db->get();
		return $query;							
	}
	function display_btype()
	{
		$this->db->select("*");
		$this->db->from("business_type");
		$query = $this->db->get();
		return $query;							
	}
	function search_company($q)
	{
		$this->db->select("*");
		$this->db->from("company");
		$this->db->join('business_type', 'company.btype_id = business_type.id', 'left');
        $this->db->join('nature_table', 'company.nature = nature_table.id', 'left');
        $this->db->like("comp_name",$q);
        $this->db->or_like("comp_add",$q);
        $this->db->or_like("btype_name",$q);
        $this->db->or_like("nature_business",$q);
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
