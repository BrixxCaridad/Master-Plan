
<title>SITA | Deployment Information</title>
<div class="content">
  
      
     <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="<?php echo base_url('assets/img/sita2.png')?>" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
      
      <br>
	  <div class="container">
  <h2>Edit Deployment</h2>
  
  <?php 
  if($_SESSION['account_type']=='Students'){
    echo form_open_multipart("depinfo/update"); 
  }
  else{
    echo form_open_multipart("ficdepinfo/update"); 
  }

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
        <select style="margin-top: 0px; height: 35px;" name="com"  id="coll" class="form-control"  >
                <?php foreach ($display_company->result() as $com)
              {?>
          <option type="text" value="<?php echo $com->Company_Code?>" <?php if ($row->Company_Code == $com->Company_Code ) echo 'selected' ; ?>><?php echo $com->Company_Name?></option>
        <?php }?>
        </select>
      </div>
    </div>

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
   
	<div class="form-group col-md-6">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="add_depbutton" name="add_deployment" class="btn btn-info add_depbutton">Update</button>
      </div>
    </div>
	</div>
	
				
				
		  
 
  <?php }}echo form_close(); ?>
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