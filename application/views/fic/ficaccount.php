<?php $this->load->view('include/ficnavbar2'); ?>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/ficmain.css">
</head>
<head>
<title>SITA | Account Settings</title>
</head>  
<div class="content">

      
      <center><h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4></center>
      
      <center><p style="color: black; font-size: 20px"><b>SITA: SIT ASSISTANT</b></p></h1></center>
      <hr style="background-color: #800000">
      
		<div class="ficdashtitle">
			<center><h3 style="color: #004000"><b>ACCOUNT SETTINGS</b></h3></center>
		</div>
		
		<div class="col-md-6">
		<div class="col-md-12">
		
		<form role="form">
                                        <fieldset>
                                            <div class="form-group">
                                                <label style="font-size:15px;">ID No.</label>
                                                <input class="form-control" type="text" placeholder="123456789">
                                            </div>
                                           
                                           
                                            
                                        </fieldset>
                                    </form>
									
	
		</div>
		<div class="col-md-12">
		
		<form role="form">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect" style="font-size:15px;">Email</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="tup@gmail.com" disabled>
                                            </div>
                                           
                                           
                                            
                                        </fieldset>
                                    </form>
									
	
		</div>
		
		<div class="col-md-4">
		<div class="form-group">
			<label style="font-size:15px;">Last name</label>
            <input type="text" placeholder="Garcia" class="form-control">
				
        </div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
			<label style="font-size:15px;">First name</label>
            <input type="text" placeholder="May" class="form-control">
				
        </div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
			<label style="font-size:15px;">Middle name</label>
            <input type="text" placeholder="Asdghjfl" class="form-control">
				
        </div>
		</div>
		
		
		
		<div class="form-group col-md-12">
                                            <label style="font-size:15px;">Change password</label>
                                            <input class="form-control" placeholder="12345">
                                        </div>
										
		<div class="form-group col-md-12">
            <label style="font-size:15px;">Confirm password</label>
            <input class="form-control" placeholder="12345">
        </div>
		
		<div class="form-group col-md-12">
                                            <label style="font-size:15px;">College</label>
                                            <input class="form-control" placeholder="College Of Science">
                                        </div>
		
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