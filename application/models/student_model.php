<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class  student_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
       
    }
    function get_student(){
    	$this->db->where('Student_ID',$_SESSION['account_id']);
        $query = $this->db->get('student');
        return $query->result_array();
    }
   
}
    

?>