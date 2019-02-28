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
		$this->load->model('add_deployment_model');
		
		$data["display_dep"] = $this->add_deployment_model->display_dep();
		
		$this->load->view('include/header');
		$this->load->view('include/navbar2');
		$this->load->view('sita/update_depinfo',$data);
		$this->load->view('include/footer');
	}
	
	public function view_dep($id)
	{
		// $data = $this->uri->segment(3);
		$this->load->model('dep_info_model');
		
		$data = $this->dep_info_model->view_dep_update($id);
		// $data["view_dep"] = $this->add_deployment_model->view_dep();
		foreach($data as $a){
			$hold = array(
			'id' =>$a['id'],
			'comp_name' =>$a['comp_name'],
			'supervisor' =>$a['supervisor'],
			'date_deployed' =>$a['date_deployed'],
			'end_train' =>$a['end_train'],
			'required_hrs' =>$a['required_hrs'],
			'rendered_hrs' =>$a['rendered_hrs'],
			'remaining_hrs' =>$a['remaining_hrs'],
			'visit_date' =>$a['visit_date'],
			'visit' =>$a['visit'],
			'status' =>$a['status']
			);
			$hold_array[] = $hold;
		}
		$datas['display_dep'] = $hold_array;
		// print_r($datas);
		$this->load->view('include/header');
		$this->load->view('include/navbar2');		
		
		$this->load->view('sita/update_depinfo', $datas);
		$this->load->view('include/footer');
		
	}
	function update(){
		$id = $this->input->post('id');		
		$comp_name = $this->input->post('add_depcomp');				
		$supervisor = $this->input->post('add_depsup');
		$date_deployed = $this->input->post('add_datedep');
		$end_train = $this->input->post('add_endtrain');
		$required_hrs = $this->input->post('add_reqhrs');
		$rendered_hrs = $this->input->post('add_rendhrs');
		$remaining_hrs= $this->input->post('add_remainhrs');
		$visit_date = $this->input->post('add_datevisit');
		$visit = $this->input->post('add_visit');
		$status = $this->input->post('add_status');
		// print_r($id);
		// print_r($comp_name);
		// print_r($supervisor);
		// print_r($date_deployed );
		// print_r($end_train);
		// print_r($required_hrs);
		// print_r($rendered_hrs);
		// print_r($remaining_hrs);
		// print_r($visit_date);
		// print_r($visit);
		// print_r($status);
		$this->load->model('dep_info_model');	
		$data = $this->dep_info_model->update_single($id, $comp_name, $supervisor, $date_deployed, $end_train, $required_hrs, $rendered_hrs, $remaining_hrs, $visit_date, $visit, $status);
		
		
		
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
