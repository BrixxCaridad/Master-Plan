<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class  faculty_model extends CI_Model {

    function __construct(){ 
        parent::__construct();
    }

    function get_student_list(){
        $this->db->select(' id_num, s_lname, s_fname, s_mname, s_cellphone, s_telephone, s_status, course_name');
        //$this->db->distinct();
        $this->db->from('students');
        $this->db->join('course', 'students.course_id = course.course_id');
        $this->db->join('facultyincharge', 'facultyincharge.fic_num = students.fic_num');
        // $this->db->where('client_status', 1);
        //$this->db->where('faculty.fic_num', fic_num);
        //$this->db->order_by('clients.c_id','DESC');
        $query=$this->db->get();
        return $query->result();
    }

    function get_stud_by_id($id){
        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('id', $id);
        $query=$this->db->get();
        return $query->result_array();
    }


    function add_student($postData){

        //$validate = $this->validate_company($postData);
        $this->db->insert('id_num', 's_lname', 'f_name', 'm_name');
        $this->db->to('students');
        $query=$this->db->get();
        return $query->result_array();
    }
    

    function validate_student($postData){
        $this->db->where('id_num', $postData['id_num']);
        $this->db->from('students');
        $this->db->join('course', 'students.course_id = course.course_id');
        $query=$this->db->get();
        if ($query->num_rows() == 0)
            return true;
        else
            return false;
    }


    function edit_student_details($postData){

        $oldData = $this->get_stud_by_id($postData['id']);

        if($oldData[0]['id_num'] == $postData['id_num'])
            $validate = true;
        else
            $validate = $this->validate_student($postData);
        $postData=str_replace("'", "`", $postData);
        
        if($validate){
            $data = array(
                'id_num' => $postData['id_num'],
                's_lname' => $postData['s_lname'],
                's_fname' => $postData['s_fname'],
                's_mname' => $postData['s_mname'],
                
                                    );

            $this->db->where('id', $postData['id']);
            $this->db->update('students', $data);

       
            /*$module = "Client Management";
            $activity = "update client ".$oldData[0]['c_name']."`s details ";
            $this->insert_log($activity, $module);
            return array('status' => 'success', 'message' => '');
        }else{
            return array('status' => 'exist', 'message' => '');
        }*/
        }
    }


    function archive_company($comp_name,$comp_id){

        $data = array(
            'comp_status' => 0,
        );
        $this->db->where('comp_id', $comp_id);
        //$this->db->where('contact_id', $contact_id);
        $this->db->update('company', $data);

        $comp_name=str_replace("%20"," ",$comp_name);
        $comp_name=str_replace("%60","`",$comp_name);

       /* $module = "Client Management";
        $activity = "delete client ".$c_name;
        $this->insert_log($activity, $module);
        return array('status' => 'success', 'message' => '');*/

    }
}
    

?>