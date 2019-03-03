<div class="main-main-container">
	<div class="page-title">
    <h4 class="text-bold"><b><span class="fa fa-building"></span> EDIT DEPLOYMENT<small></small></b></h4>
  </div>
	<div class="container-fluid">
		<div class="row mt-4">

  
  <?php echo form_open_multipart("depinfo/update"); 
  if ($display_dep->num_rows() > 0)
       {
        foreach ($display_dep->result() as $row)
        {
          ?>
  
  <div class="col-md-12">
	
    <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="email">Company:</label>
      <div class="col-sm-10">
        <input type="hidden" class="form-control" id="id" value="<?php echo $row->Sit_No; ?>" name="id" >
        <input type="text" class="form-control" id="add_depcomp" value="<?php echo $row->Company_Name; ?>" name="add_depcomp">
      </div>
    </div>
    <!--<div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Supervisor:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="add_depsup" value="" name="add_depsup">
      </div>
    </div>-->
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Date Deployed:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="add_datedep" value="<?php echo $row->Date_Deployed; ?>" name="add_datedep">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">End of Training:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="add_endtrain" value="<?php echo $row->Date_Ending;?>" name="add_endtrain">
      </div>
    </div>
	
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Required Hours:</label>
      <div class="col-sm-10">          
        <input readonly="readonly" type="text" class="form-control" id="add_reqhrs" value="<?php echo  (int)$row->Rendered_Hours+(int)$row->Remaining_Hours; ?>" name="add_reqhrs">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Rendered Hours:</label>
      <div class="col-sm-10">          
        <input readonly="readonly" type="text" class="form-control" id="add_rendhrs" value="<?php echo  $row->Rendered_Hours; ?> " name="add_rendhrs">
      </div>
    </div>
	
	
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Remaining Hours:</label>
      <div class="col-sm-10">          
        <input type="text" readonly="readonly" class="form-control" id="add_remainhrs" value="<?php echo $row->Remaining_Hours;; ?>" name="add_remainhrs">
      </div>
    </div>
	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Date of On-site Visitation:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="add_datevisit" value="<?php echo $row->Visit_Date ?>" name="add_datevisit">
      </div>
    </div>

	 <div class="form-group col-md-6">
      <label class="control-label col-sm-2" for="pwd">Status of SIT:</label>
      <div class="col-sm-10">          
        <select style="margin-top: 0px; height: 35px;" name="add_status" id="nature" class="form-control" value="<?php echo $row->Status; ?>" >
				<option type="text" value="On Going" <?php if ($row->Status == "On Going" ) echo 'selected' ; ?>>On Going</option>
				<option type="text" value="Finish" <?php if ($row->Status == "Finish" ) echo 'selected' ; ?>>Finish</option>
				</select>
      </div>
    </div>
   
	<div class="form-group col-md-12">        
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" id="add_depbutton" name="add_deployment" class="btn btn-success btn-block btn-lg add_depbutton">Update</button>
      </div>
    </div>
	</div>
	
				
				
		  
 
  <?php }}echo form_close(); ?>
</div>
      
      
</div>
</div>

<script>

$(document).ready(function(){
	$(document).on('submit','#add_depbutton', function(){
		alert("assasa");
	});
});
</script>
