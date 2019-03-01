

<title>SITA | Account Settings</title>

<div class="content">
  
      
      <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
   
	      <div class="dashtitle">
	      	 <center><h3 style="color: #800000"><b>ACCOUNT SETTINGS</b></h3></center>
	      </div>
	  
     
      <br>
        <?php
	
       if ($display_info->num_rows() > 0)
		   {
				foreach ($display_info->result() as $row)
				{ ?>
    <div class="container">
      	<div class="row">
      		<div class="col-md-12">
      			<h4><b>Personal Information</b></h4>
      			<hr style="background-color: #800000">
      			<div class="col-md-8">
      				<h4>Name:	<?php echo $row->Student_Firstname . " " . $row->Student_Middlename . " " .  $row->Student_Lastname;?></h4>
      			</div>
      			<div class="col-md-8">
      				<h4>Address:	</h4>
      			</div>
      			<div class="col-md-8">
              <h4>Birthday:  <?php echo $row->Birthday; ?></h4>
            </div>
            <div class="col-md-8">
              <h4>Cellphone No.:  <?php echo $row->Cellphone; ?></h4>
            </div>
            <div class="col-md-8">
              <h4>Civil Status:  <?php echo $row->Civil_Stat; ?></h4>
            </div>
            <div class="col-md-8">
              <h4>Religion:  <?php echo $row->Religion; ?></h4>
            </div>
      			<a href="<?php echo base_url('accountsettings/personalinfo');?>" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Edit Personal Information</a>
      		</div>
      	</div>
		

      	
      	<div class="row">
      		<div class="col-md-12">
      			<h4><b>Academic Information</b></h4>
      			<hr style="background-color: #800000">
      			<div class="col-md-8">
      				<h4>Student No.:	<?php echo $row->Student_ID; ?></h4>
      			</div>
      			<div class="col-md-8">
      				<h4>College:	<?php echo $row->College_Code; ?></h4>
      			</div>
      			<div class="col-md-8">
      				<h4>Course:		<?php echo $row->Course_Code; ?></h4>
      			</div>
      		</div>
      	</div>
      	   <?php
        }
        
       } ?>

	</div>

		
	  
    
  	<script type="text/javascript">
  		var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
  	</script>

</div>