<?php	

class Requirements_Model extends CI_Model {
	
		public function __construct()
	{
		parent:: __construct();
		
	}
	private $table = "pre_deployment_path";
	
	public function uploadNBI($data){

	
			$this->db->set('NBI',$data['NBI']);
			$this->db->set('Overall_status',1);
			$this->db->where('Student_ID',$data['Student_ID']);
            $this->db->update($this->table);

	    return $insert_id = $this->db->insert_id();
	}
    public function uploadMED($data)
	{
			$this->db->set('Medical_Certificate',$data['MCert']);
			$this->db->set('Overall_status',1);
			$this->db->where('Student_ID',$data['Student_ID']);
            $this->db->update($this->table);

	    return $insert_id = $this->db->insert_id();
	}

	 public function uploadTax($data)
	{

			$this->db->set('Tax_Certificate_Student',$data['CTax']);
			$this->db->set('Overall_status',1);
			$this->db->where('Student_ID',$data['Student_ID']);
            $this->db->update($this->table);

	    return $insert_id = $this->db->insert_id();
	}
	 public function uploadGTax($data)
	{

			$this->db->set('Tax_Certificate_Parent',$data['GTax']);
			$this->db->set('Overall_status',1);
			$this->db->where('Student_ID',$data['Student_ID']);
            $this->db->update($this->table);

	    return $insert_id = $this->db->insert_id();
	}

    public function uploadEval($data)
	{

			$this->db->set('TUP_Evaluation_Sheet',$data['ESheet']);
			$this->db->set('Overall_status',1);
			$this->db->where('Student_ID',$data['Student_ID']);
            $this->db->update($this->table);

	    return $insert_id = $this->db->insert_id();
	}
	
  public function uploadResume($data)
	{
			$this->db->set('Resume',$data['resume']);
			$this->db->set('Overall_status',1);
			$this->db->where('Student_ID',$data['Student_ID']);
            $this->db->update($this->table);

	    return $insert_id = $this->db->insert_id();
	}
 public function uploadRegform($data)
	{
			$this->db->set('Registration_Form',$data['RegistrationForm']);
			$this->db->set('Overall_status',1);
			$this->db->where('Student_ID',$data['Student_ID']);
            $this->db->update($this->table);
	    	return $insert_id = $this->db->insert_id();
	}

	function submitReview($data){
			

			 $this->db->set('Overall_status',0);
			$this->db->where('Student_ID',$data);
			$this->db->update($this->table);
	}



	public function read($data = null){
		if(isset($data))
		$this->db->where('userID',$data);
		$this->db->order_by('coverID','DESC');
		$this->db->limit(1);
		$query=$this->db->get($this->table);
	  return $query->result_array();
	
	
	}
   public function withReq(){
   		$this->db->where('Overall_status',1);
   		$this->db->join('student', 'student.Student_ID = pre_deployment_path.Student_ID');
 		$query=$this->db->get($this->table);
	  return $query->result_array();
	}
	
	public function read_req($data = null){
		$query=$this->db->get($this->table);
	  return $query->result_array();
	}
	

}

	
?>