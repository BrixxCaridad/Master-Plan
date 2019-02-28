<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class update_depinfo_cont extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	  private function ajax_checking(){
        if (!$this->input->is_ajax_request()) {
            redirect(base_url());
        }
    }
	public function index()
	{
		// $this->load->model('add_deployment_model');
		
		// $data["display_dep"] = $this->dep_info_model->display_dep();
		
		// $this->add_deployment_model->add_deployment($data);
		
		
		// if($this->input->post()) {
			// $data = array(
                // 'comp_name' => $this->input->post('add_depcomp'),
                // 'supervisor' => $this->input->post('add_depsup'),
                // 'date_deployed' => $this->input->post('add_datedep'),
                // 'end_train' => $this->input->post('add_endtrain'),
                // 'required_hrs' => $this->input->post('add_reqhrs'),
                // 'rendered_hrs' => $this->input->post('add_rendhrs'),
                // 'remaining_hrs' => $this->input->post('add_remainhrs'),
                // 'visit_date' => $this->input->post('add_datevisit'),
                // 'visit' => $this->input->post('add_visit'),
                // 'status' => $this->input->post('add_status')
                       
            // ); 
			// $this->add_deployment_model->add_deployment($data);
		// }
		
		
		
		
		
		
		
		
		
		 // $company=$this->input->post('add_depcomp');
		 // $supervisor=$this->input->post('add_depsup');
		 // $datedep=$this->input->post('add_datedep');
		 // $end=$this->input->post('add_endtrain');
		 // $require=$this->input->post('add_reqhrs');
		 // $rendered=$this->input->post('add_rendhrs');
		 // $remain=$this->input->post('add_remainhrs');
		 // $visitedate=$this->input->post('add_datevisit');
		 // $visit=$this->input->post('add_visit');
		 // $status=$this->input->post('add_status');
         // $data = array(
        // 'comp_name'=>$company,
        // 'supervisor'=>$supervisor,
        // 'date_deployed'=>$datedep,
        // 'end_train'=>$end,
        // 'required_hrs'=>$require,
        // 'rendered_hrs'=>$rendered,
        // 'remaining_hrs'=>$remain,
        // 'visit_date'=>$visitedate,
        // 'visit'=>$visit,
        // 'status'=>$status
    // );
    
		
		
		$this->load->view('include/header');
		$this->load->view('include/navbar2');
		$this->load->view('sita/update_depinfo');
		$this->load->view('include/footer');
		
		// redirect('add_deployment', 'refresh');
		
		//$this->load->view('include/footer');
	}
	
	// function delete_dep()
	// {
		
		// $this->load->model('add_deployment_model');
		
		// $comp_name = $this->input->get('comp_name');
		
		
		
		// {
			// $data['data'] = $this->add_deployment_model->getuser();
			// $this->load->view('sita/add_deployment')
		// }
		// redirect(base_url() . "add_deployment_cont/deleted");
	// }
	
	// funtion deleted()
	// {
	// $this->index();
	// }
	
	
}
