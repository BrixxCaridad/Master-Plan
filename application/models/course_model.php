<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class  course_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
        $this->load->model('course','course');
    }
    function get_course(){
        $query = $this->db->get('course');
        return $query->result_array();
    }
   
}
    

?>