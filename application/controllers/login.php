<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('sita_model','sita');
	}
	public function index()
	{
		if($this->session->userdata('logged_in')==TRUE)
		{
			redirect(base_url('dashboard'), 'refresh');			
		}
		$uname = $this->input->post('uname');
		$password = $this->input->post('password');
		$account=$this->sita->login($uname,$password);
		if($account!=null)
		{
			if($account=='student')
			{
				$q=$this->sita->getstudentfrom_cred($uname,$password);
				foreach ($q as $s) 
				{
			        $this->session->set_userdata('account_id',$s['id_num']);
                    $this->session->set_userdata('account_name',$s['s_fname'].' '.$s['s_lname']);
                    $this->session->set_userdata('account_type','Student');
                    $this->session->set_userdata('logged_in',TRUE);
				}
				redirect(base_url('dashboard'), 'refresh');	
			}
			elseif($account=='fic')
			{
				$q=$this->sita->getficfrom_cred($uname,$password);	
				foreach ($q as $f) 
				{
			        $this->session->set_userdata('account_id',$f['id']);
                    $this->session->set_userdata('account_name',$f['fic_name']);
                    $this->session->set_userdata('account_type','Faculty in Charge');
                    $this->session->set_userdata('logged_in',TRUE);
				}	
				redirect(base_url('dashboard'), 'refresh');	
			}
		}	
		else
		{
			echo 'null';
		}
	}

	public function logout(){
        $this->session->unset_userdata('account_type');
        $this->session->unset_userdata('account_id');
        $this->session->unset_userdata('account_name');
		$this->session->set_userdata('logged_in',FALSE);
		redirect(base_url(), 'refresh');
	}

}
