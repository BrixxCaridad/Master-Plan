<div class="main-main-container">
	<div class="page-title fic-dash">
		<h4 class="text-bold"><b><span class="fa fa-gear"></span> ACCOUNT SETTINGS<small></small></b></h4>
	</div>
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-6">
				<?php 
					if ($display_info->num_rows() > 0)
      				 {
        				foreach ($display_info->result() as $row)
					{?>
					
					<form id="insert_form" action="<?php echo base_url('ficaccountcon/edit_personalinfo')?>" method="POST">
	<div class="col-md-12">
		<div class="col-md-12">
			<form role="form">
	            <fieldset>
	                <div class="form-group">
	                    <label style="font-size:15px;">ID No.</label>
	                    <input class="form-control" type="text" value="<?php echo $row->Faculty_ID; ?>" disabled>
	                </div>
	            </fieldset>
	        </form>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label style="font-size:15px;">Last name</label>
	            <input type="text" value="<?php echo $row->Faculty_Lastname; ?>" name="lname" class="form-control">
	        </div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label style="font-size:15px;">First name</label>
	            <input type="text" value="<?php echo $row->Faculty_Firstname; ?>" name="fname" class="form-control">
	        </div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label style="font-size:15px;">Middle name</label>
	            <input type="text" value="<?php echo $row->Faculty_Middlename; ?>" name="mname" class="form-control">
					
	        </div>
		</div>
		
		<div class="form-group col-md-12">
            <label style="font-size:15px;">College</label>

            <select style="margin-top: 0px; height: 35px;" name="coll"  id="coll" class="form-control" value="<?php echo $row->Status; ?>" >
            	<?php foreach ($display_college->result() as $col)
        		{?>
				<option type="text" value="<?php echo $col->College_Code?>" <?php if ($row->College_Code == $col->College_Code ) echo 'selected' ; ?>><?php echo $col->College_Name?></option>
			<?php }?>
			</select>
        </div>
		<div class="form-group col-md-12">
            <label style="font-size:15px;">Change password <small><i>*Optional</i></small></label>
            <input class="form-control" id="pass1" type="password" name="pass" onkeyup="confirm_pass()">
        </div>
		
		<div id="pass_2"class="form-group col-md-12 has-feedback">
            <label style="font-size:15px;">Confirm password <small id="alert-text" class="text-danger hide"><i>Password didn't match</i></small></label>
            <input class="form-control" id="pass2" type="password" onkeyup="confirm_pass()"> 
		</div>
		
        <input class="btn btn-info btn-md pull-right" type="submit" value="Save Changes" role="button" id="edit_btn"/>
	</div>
    
	</form>
	<?php }}?>



			</div>
			<div class="col-md-6">
		<div class="form-group">
            <label style="font-size:15px; text-align:center;">Profile Picture</label>
            <img src="<?php echo base_url();?>assets/img/panpan.jpg" style="display: block; margin-left: auto;margin-right: auto;height: 50%; width: 50%;">
		</div>
		<div class="form-group col-md-12">
            <label style="font-size:15px; text-align:center;">Change Profile Picture</label>
            <input style="display: block; margin:auto;" type="file">
        </div>
	</div>

		</div>
	</div>


		
      
    
 
</div>

<script type="text/javascript">
	function confirm_pass(){
		if(document.getElementById("pass2").value != document.getElementById("pass1").value){
			document.getElementById("edit_btn").disabled = true;
			$("#pass_2").addClass("has-error ");
			$("#alert-text").removeClass("hide");
		}
		else{
			document.getElementById("edit_btn").disabled = false;
			$("#alert-text").addClass("hide");
			$("#pass_2").removeClass("has-error ");
		}
	}
</script>
