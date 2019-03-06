<div class="main-main-container">
	<div class="page-title">
    	<h4 class="text-bold"><b><span class="fa fa-gear"></span> ACCOUNT SETTINGS<small></small></b></h4>
  	</div>
    <?php if ($display_info->num_rows() > 0)
		{ foreach ($display_info->result() as $row){ ?>
    <div class="container-fluid">
      	<div class="row mt-4">
      		<div class="col-md-12">
      			<h4><b><span class="fa fa-user-circle-o"></span> Personal Information</b></h4>
      			<hr>
      			<div class="col-md-8">
      				<h4>Name:	<?php echo $row->Student_Firstname . " " . $row->Student_Middlename . " " .  $row->Student_Lastname;?></h4>
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
			<br>
			<br>
			<div class="col-md-8">
      			<a href="<?php echo base_url('accountsettings/personalinfo');?>" class="btn btn-maroon btn-md" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px; margin-left: 0 !important"></span>Edit Personal Information</a>
			  	</div>
			</div>
      	</div>
		

		  <br>
		  <br>
      	<div class="row">
      		<div class="col-md-12">
      			<h4><span class="fa fa-graduation-cap"></span> <b>Academic Information</b></h4>
      			<hr style="">
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
