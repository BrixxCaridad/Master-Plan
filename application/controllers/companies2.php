<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class companies2 extends CI_Controller {

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
	

	public function __Construct() {
        parent::__Construct();     
        /*if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        if($this->session->userdata('role') != 'admin' && ('role') == 'admin' ){
            redirect(base_url());
        }*/
		
	
      
    }

    private function ajax_checking(){
        if (!$this->input->is_ajax_request()) {
            redirect(base_url());
        }
    }
	
	public function index()
	{
		$this->load->model('company_model');
		
		$data["display_company"] = $this->company_model->display_company();
		
		
		
		
		$this->load->view('include/header');
		$this->load->view('include/navbar2');
		$this->load->view('sita/companies2',$data);
		$this->load->view('include/footer');
	}
	
	
	
	
	// public function nature($data)
	// {
		// echo 'Hello';
		// $data["nature"] = $this->company_model->nature();
		
		// $this->load->view('include/header');
		// $this->load->view('include/navbar2');
		// $this->load->view('sita/companies2',$data);
		// $this->load->view('sita/company',$data);
		// $this->load->view('include/footer');
	// }
       
	
	
	

    // public function index()
	// {
		// $data = array( 
            // /*'formTitle' => 'Deployment Information',
            // 'title' => 'Deployment Information',*/
            // 'user' => $this->irjp_model->get_comp_list(),
            // 'type' => $this->irjp_model->get_btype(),
            // 'type' => $this->irjp_model->get_comp_list(),
        // );  

		// $this->load->view('include/header');
		// $this->load->view('include/navbar2');
		// $this->load->view('sita/companies2',$data);
		// $this->load->view('sita/company',$data)
		// $this->load->view('include/footer');
	// }
}