<?php $this->load->view('include/navbar2'); ?>
<head>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="icon" type="image/png" href="assets/img/TUPlogo.png"/>
<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
</head>


<title>SITA | Deployment Information</title>
<div class="content">
  
      
     <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
      
      <br>
	  <div class="container">
  <h2>Edit Deployment</h2>
  
  <?php echo form_open_multipart("update_depinfo_cont/update"); ?>
  
  <div class="col-md-12">
	
	
      
					
    <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="email">Company:</label>
      <div class="col-sm-10">
        <input type="hidden" class="form-control" id="id" value="<?php echo $display_dep[0]['id']; ?>" name="id" >
        <input type="text" class="form-control" id="add_depcomp" value="<?php echo $display_dep[0]['comp_name']; ?>" name="add_depcomp">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Supervisor:</label>
      <div class="col-sm-10">          
        <input readonly="readonly" type="text" class="form-control" id="add_depsup" value="<?php echo $display_dep[0]['supervisor']; ?>" name="add_depsup">
      </div>
    </div>
	
	
	 
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Date Deployed:</label>
      <div class="col-sm-10">          
        <input readonly="readonly" type="date" class="form-control" id="add_datedep" value="<?php echo $display_dep[0]['date_deployed']; ?>" name="add_datedep">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">End of Training:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="add_endtrain" value="<?php echo $display_dep[0]['end_train']; ?>" name="add_endtrain">
      </div>
    </div>
	
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Required Hours:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_reqhrs" value="<?php echo $display_dep[0]['required_hrs']; ?>" name="add_reqhrs">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Rendered Hours:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_rendhrs" value="<?php echo $display_dep[0]['rendered_hrs']; ?>" name="add_rendhrs">
      </div>
    </div>
	
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Remaining Hours:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_remainhrs" value="<?php echo $display_dep[0]['remaining_hrs']; ?>" name="add_remainhrs">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Date of On-site Visitation:</label>
      <div class="col-sm-10">          
        <input readonly="readonly" type="date" class="form-control" id="add_datevisit" value="<?php echo $display_dep[0]['visit_date']; ?>" name="add_datevisit">
      </div>
    </div>

	
	 <div class="form-group col-md-6">
	 
      <label class="control-label col-sm-2" for="pwd">Visited:</label>
	  
      <div class="col-sm-10">          
            <select readonly="readonly" style="margin-top: 0px; height: 35px;" name="add_visit" id="add_visit" class="form-control" >
				<option type="text" value="<?php echo $display_dep[0]['visit']; ?>" selected><?php echo $display_dep[0]['visit']; ?></option>
				<option type="text" value="Yes">Yes</option>
				<option type="text" value="No">No</option>
				</select>
      </div>
    </div>
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Status of SIT:</label>
      <div class="col-sm-10">          
        <select readonly="readonly" style="margin-top: 0px; height: 35px;" name="add_status" id="nature" class="form-control" >
				<option type="text" value="<?php echo $display_dep[0]['status']; ?>" selected><?php echo $display_dep[0]['status']; ?></option>
				<option type="text" value="On-Going">On-Going</option>
				<option type="text" value="Finished">Finished</option>
				</select>
      </div>
    </div>
   
	<div class="form-group col-md-6">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="add_depbutton" name="add_deployment" class="btn btn-info add_depbutton">Update</button>
      </div>
    </div>
	</div>
	
				
				
		  
 
  <?php echo form_close(); ?>
</div>
      
      
      <center>
      <br>
  
    
  

</div>

<script>

$(document).ready(function(){
	$(document).on('submit','#add_depbutton', function(){
		alert("assasa");
	});
});
</script>