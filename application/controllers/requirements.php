<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class requirements extends CI_Controller {

	  public function __construct()
        {
                parent::__construct();
                $this->load->model('Requirements_Model','preDep');
                $this->load->model('Requirement_status','status');
        }
	public function index()
	{
		$headerdata['title'] = "SITA | Requirements";
    $req['idnum'] = $_SESSION['account_id'];
    $data['MyReq'] = $this->status->read_Status($req);
		$this->load->view('include/header',$headerdata);
		$this->load->view('include/navbar2',$data);
		$this->load->view('sita/requirements');
		
		
		//$this->load->view('include/footer');
	}
  function submitReport(){
     
   $this->preDep->submitReview($_GET['id']);
   redirect('/ficemailcon');

  }
	public function guidelines()
	{
		// $this->load->view('include/header');
		$headerdata['title'] = "SITA | Guidelines";
		$this->load->view('include/header',$headerdata);
		$this->load->view('sita/postdep', $data);
	}

	public function waiver()
	{
		// $this->load->view('include/header');
		$headerdata['title'] = "SITA | Waiver";
		$this->load->view('include/header',$headerdata);
		$this->load->view('sita/editor');
	}
	public function uploadReq()
	{
		
		  $config['upload_path']          = './NBI/';
          $config['allowed_types']        = 'jpg';
               $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('nbi'))
                {
                        
                        // $error = array('error' =>);
                        $this->session->set_flashdata('error',  $this->upload->display_errors());
						print_r($this->upload->display_errors());
                       // redirect('/requirements');
                   
                }
                else
                {   
                        $data = $this->upload->data();
                        $file= array('NBI'=>'/NBI/'.$data['raw_name'],
                        'Student_ID'=>$_SESSION['account_id']);
                       $this->preDep->uploadNBI($file);
					
			   } 
		// medCert
			 //  jpg|png|pdf|doc
			   $config['upload_path']          = './MedCert/';
               $config['allowed_types']        = 'jpg';
               $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('medCert'))
                {
                        
                        // $error = array('error' =>);
                        $this->session->set_flashdata('error',  $this->upload->display_errors());
						//print_r($this->upload->display_errors());
                      // redirect('/requirements');
                   
                }
                else
                {   
                        $data = $this->upload->data();
                       $file= array('MCert'=>'/MedCert/'.$data['raw_name'],
                        'Student_ID'=>$_SESSION['account_id']);
                       $this->preDep->uploadMED($file);
					  
                      // 	print_r($file);
			   } 
			   
		    //tax
			      $config['upload_path']          = './Tax/';
               $config['allowed_types']        = 'jpg';
               $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('CTax'))
                {
                        
                        // $error = array('error' =>);
                        $this->session->set_flashdata('error',  $this->upload->display_errors());
						//print_r($this->upload->display_errors());
                       redirect('/requirements');
                   
                }
                else
                {   
                        $data = $this->upload->data();
                       $file= array('CTax'=>'/Tax/'.$data['raw_name'],
                        'Student_ID'=>$_SESSION['account_id']);
                       $this->preDep->uploadTax($file);
					          
                      // 	print_r($file);
			      } 


                //guardian Tax
                  $config['upload_path']          = './GTax/';
               $config['allowed_types']        = 'jpg';
               $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('GuardianTax'))
                {
                        
                        // $error = array('error' =>);
                        $this->session->set_flashdata('error',  $this->upload->display_errors());
            print_r($this->upload->display_errors());
                      // redirect('/requirements');
                   
                }
                else
                {   
                        $data = $this->upload->data();
                       $file= array('GTax'=>'/GTax/'.$data['raw_name'],
                        'Student_ID'=>$_SESSION['account_id']);
                       $this->preDep->uploadGTax($file);
                    
                      //  print_r($file);
               } 
		      //evaluation sheet
                $config['upload_path']          = './EvalSheet/';
               $config['allowed_types']        = 'jpg';
               $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('Evaluation'))
                {
                        
                        // $error = array('error' =>);
                        $this->session->set_flashdata('error',  $this->upload->display_errors());
            print_r($this->upload->display_errors());
                       //redirect('/requirements');
                   
                }
                else
                {   
                        $data = $this->upload->data();
                       $file= array('ESheet'=>'/EvalSheet/'.$data['raw_name'],
                        'Student_ID'=>$_SESSION['account_id']);
                       $this->preDep->uploadEval($file);
                    
                      //  print_r($file);
               } 


             //   Resume
                  $config['upload_path']          = './Resume/';
               $config['allowed_types']        = 'pdf|docx';
               $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('resume'))
                {
                        
                        // $error = array('error' =>);
                        $this->session->set_flashdata('error',  $this->upload->display_errors());
            //print_r($this->upload->display_errors());
                        print_r( $this->upload->display_errors());
                   
                }
                else
                {   
                        $data = $this->upload->data();
                       $file= array('resume'=>'/Resume/'.$data['raw_name'],
                        'Student_ID'=>$_SESSION['account_id']);
                       $this->preDep->uploadResume($file);
                    
                      //  print_r($file);
               } 


             $config['upload_path']          = './RegForm/';
               $config['allowed_types']        = 'jpg';
               $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('RForm'))
                {
                        
                        // $error = array('error' =>);
                        $this->session->set_flashdata('error',  $this->upload->display_errors());
            print_r($this->upload->display_errors());
                      // 
                   
                }
                else
                {   
                        $data = $this->upload->data();
                       $file= array('RegistrationForm'=>'/RegForm/'.$data['raw_name'],
                        'Student_ID'=>$_SESSION['account_id']);
                       $this->preDep->uploadRegform($file);
                    
                      //  print_r($file);
               } 
	         	redirect('/companies');
		 
	}

}
