<div class="main-main-container">
	<div class="page-title">
    <h4 class="text-bold"><b><span class="fa fa-building"></span> ADD DEPLOYMENT<small></small></b></h4>
	</div>
	
	<div class="container-fluid">
  <!-- <h2>Add Deployment</h2> -->
  <div class="row mt-4">
  <form class="form-horizontal" method="post" action="#">
  <div class="col-md-12">
  
    <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="email">Company:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="add_depcomp" placeholder="Enter Company" name="add_depcomp">
      </div>
    </div>
    <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Supervisor:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_depsup" placeholder="Enter Supervisor" name="add_depsup">
      </div>
    </div>
	
	
	 
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Date Deployed:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="add_datedep" placeholder="Enter Date Deployed" name="add_datedep">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">End of Training:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="add_endtrain" placeholder="Enter End of Training" name="add_endtrain">
      </div>
    </div>
	
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Required Hours:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_reqhrs" placeholder="Enter Required Hours" name="add_reqhrs">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Rendered Hours:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_rendhrs" placeholder="Enter Rendered Hours" name="add_rendhrs">
      </div>
    </div>
	
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Remaining Hours:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_remainhrs" placeholder="Enter Remaining Hours" name="add_remainhrs">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Date of On-site Visitation:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="add_datevisit" placeholder="Enter Date of Visitation" name="add_datevisit">
      </div>
    </div>

	
	 <div class="form-group col-md-6">
	 
      <label class="control-label col-sm-2" for="pwd">Visited:</label>
	  
      <div class="col-sm-10">          
            <select style="margin-top: 0px; height: 35px;" name="add_visit" id="add_visit" class="form-control" >
				<option type="text" value=""disabled selected>Select your option</option>
				<option type="text">Yes</option>
				<option type="text">No</option>
				</select>
      </div>
    </div>
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Status of SIT:</label>
      <div class="col-sm-10">          
        <select style="margin-top: 0px; height: 35px;" name="add_status" id="nature" class="form-control" >
				<option type="text" value="" disabled selected>Select your option</option>
				<option type="text">On-Going</option>
				<option type="text">Finished</option>
				</select>
      </div>
    </div>
   <br/>
	<div class="form-group col-md-12">        
      <div class="col-sm-offset-3 col-sm-6">
				<br/>
        <button type="submit" id="add_depbutton" name="add_deployment" class="btn btn-success btn-lg add_depbutton btn-block">Submit</button>
      </div>
    </div>
	</div>
	
	</form>
</div>
</div>
      
      
      <center>
      <br>
  
    
  

</div>

<script>
$(document).ready(function(){
	$('.add_depbutton').click(function(){
		
		window.location="<?php echo base_url('depinfo');?>";
	});
});
</script>
