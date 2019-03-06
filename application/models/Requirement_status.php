<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class  Requirement_status extends CI_Model {

    function __construct(){ 
        parent::__construct();
        
    }
   
    function check_NBI($data)
    {
            $this->db->set('NBI',$data['comment']);      
            $this->db->where('Student_ID',$data['idnum']);
            $this->db->update('pre_deployment_status');
            return $insert_id = $this->db->insert_id();
    }

    function check_MED($data)
    {

            $this->db->set('Medical_Certificate',$data['comment']);      
            $this->db->where('Student_ID',$data['idnum']);
            $this->db->update('pre_deployment_status');
            return $insert_id = $this->db->insert_id();
    }
        function check_STAX($data)
    {
       
            $this->db->set('Tax_Certificate_Student',$data['comment']);      
            $this->db->where('Student_ID',$data['idnum']);
            $this->db->update('pre_deployment_status');
            return $insert_id = $this->db->insert_id();
    }
          function check_PTAX($data)
    {
       
            $this->db->set('Tax_Certificate_Parent',$data['comment']);      
            $this->db->where('Student_ID',$data['idnum']);
            $this->db->update('pre_deployment_status');
            return $insert_id = $this->db->insert_id();
    }
             function check_ESHEET($data)
    {
       
            $this->db->set('TUP_Evaluation_Sheet',$data['comment']);      
            $this->db->where('Student_ID',$data['idnum']);
            $this->db->update('pre_deployment_status');
            return $insert_id = $this->db->insert_id();
    }

    function check_Resume($data)
    {
       
            $this->db->set('Resume',$data['comment']);      
            $this->db->where('Student_ID',$data['idnum']);
            $this->db->update('pre_deployment_status');
            return $insert_id = $this->db->insert_id();
    }

    function check_Rform($data)
    {
            $this->db->set('Registration_Form',$data['comment']);      
            $this->db->where('Student_ID',$data['idnum']);
            $this->db->update('pre_deployment_status');
            return $insert_id = $this->db->insert_id();
    }


   function read_status($data)
    {       

            $this->db->where('Student_ID',$data['idnum']);    
            $query = $this->db->get('pre_deployment_status');
            return $query->result_array();
    }
    
    
    
}
    

?>