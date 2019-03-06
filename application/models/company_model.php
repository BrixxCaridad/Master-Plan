<?php
class company_model extends CI_Model {


	function add_company($company_info)
	{
		$this->db->insert('company', $company_info);
	}

	function display_company()
	{
		$this->db->select('company.Company_Code, company.Company_Name, company.Company_Address, company.Company_Phone, GROUP_CONCAT(type.Type SEPARATOR ",") AS Type');
		$this->db->from("company");
		$this->db->join('classification', 'company.Company_Code = classification.Company_Code', 'inner');
        $this->db->join('type', 'classification.Type_No = type.Type_No', 'inner');
        $this->db->group_by('classification.Company_Code');
		$query = $this->db->get();
		return $query;
	}

	function search_company($q)
	{
		$this->db->select('company.Company_Code, company.Company_Name, company.Company_Address, company.Company_Phone, GROUP_CONCAT(type.Type SEPARATOR ",") AS Type');
		$this->db->from("company");
		$this->db->join('classification', 'company.Company_Code = classification.Company_Code', 'inner');
        $this->db->join('type', 'classification.Type_No = type.Type_No', 'inner');
        $this->db->group_by('classification.Company_Code');

        $this->db->like("Company_Name",$q);
        $this->db->or_like("Company_Address",$q);
        $this->db->or_like("Type",$q);
        $this->db->or_like("company.Company_Code",$q);

		$query = $this->db->get();
		return $query;
	}
	 function all_type(){
		 $query = $this->db->query("SELECT * FROM type");
		 return $query->result_array();
	 }
	 function create_company($code,$name,$address,$tel){
		 $this->db->query("INSERT INTO company (Company_Code, Company_Name, Company_Phone, Company_Address) VALUES('$code','$name','$tel','$address')");
	 }
	 function create_classification($code,$type){
		 $this->db->query("INSERT INTO classification (Classification_No, Company_Code, Type_No) VALUES('','$code','$type')");
	 }
	 function get_company($code){
		 $query = $this->db->query("SELECT * FROM company WHERE Company_Code = '$code'");
		 return $query->result_array();
	 }
	 function get_company_classification($code){
		 $query = $this->db->query("SELECT type.Type_No, type.Type FROM company JOIN classification JOIN type WHERE company.Company_Code = classification.Company_Code AND classification.Type_No = type.Type_No AND company.Company_Code = '$code'");
		 return $query->result_array();
	 }
	 function delete_company($code){
		 $this->db->query("DELETE FROM company WHERE Company_Code = '$code'");
	 }
	 function edit_company($code,$name,$address,$tel){
		 $this->db->query("UPDATE company SET Company_Name = '$name', Company_Phone = '$tel', Company_Address = '$address' WHERE Company_Code = '$code'");
	 }
	 function delete_classification($code){
		 $this->db->query("DELETE FROM classification WHERE Company_Code = '$code'");
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
