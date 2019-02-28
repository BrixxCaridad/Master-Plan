<?php $this->load->view('include/navbar2'); ?>

<title>SITA | Messages</title>

<div class="content">
  
      
      <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
     
	      <div class="dashtitle">
	      	 <center><h3 style="color: #800000"><b>MESSAGES</b></h3></center>
	      </div>
	    
     
      <br>      
      	
        <button class="accordionM"><div class="col-md-10" style="padding-top: 10px"><b>Miranda Bailey</b></div> <div class="col-md-2"> <b>August 21, 2018 8:45PM</b></div></button>
			<div class="panelM">
				<div class="col-md-12" style="padding-bottom: 15px">
      				<br><p style="font-size: 15px">Greetings, Dr. Meredith Grey! The Chief of Surgery wishes to appoint you as the new Chief of General Surgery. We'll keep in touch to update you of your appointment schedule with the Chief. Congratulations!</p>
      			</div>
      			<a href="#replymessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            	<a href="#deletemessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
			</div>
		<br>
		<button class="accordionM"><div class="col-md-10" style="padding-top: 10px"><b>Richard Webber</b></div> <div class="col-md-2"> <b>August 21, 2018 8:45PM</b></div></button>
			<div class="panelM">
				<div class="col-md-12" style="padding-bottom: 15px">
      				<br><p style="font-size: 15px">Hi Meredith! I have sent you all the charts of your new patients. Congratulations on your promotion!</p>
      			</div>
      			<a href="#replymessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            	<a href="#deletemessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
			</div>
		<br>
		<button class="accordionM"><div class="col-md-10" style="padding-top: 10px">Thatcher Grey</div> <div class="col-md-2"> August 21, 2018 8:45PM</div></button>
			<div class="panelM">
				<div class="col-md-12" style="padding-bottom: 15px">
      				<br><p style="font-size: 15px">I miss you so much Meredith! Congratulations, my daughter!</p>
      			</div>
      			<a href="#replymessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            	<a href="#deletemessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
			</div>
		<br>
		<button class="accordionM"><div class="col-md-10" style="padding-top: 10px">Cristina Yang</div> <div class="col-md-2"> August 21, 2018 8:45PM</div></button>
			<div class="panelM">
				<div class="col-md-12" style="padding-bottom: 15px">
      				<br><p style="font-size: 15px">I heard you got promoted. Congratulations on that! Nonetheless, I am still prettier.</p>
      			</div>
      			<a href="#replymessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            	<a href="#deletemessage" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
			</div>
		
		
  	<script type="text/javascript">
  		var acc = document.getElementsByClassName("accordionM");
		var i;

			for (i = 0; i < acc.length; i++) {
    			acc[i].onclick = function(){
        			this.classList.toggle("active");
        			this.nextElementSibling.classList.toggle("show");
    			}
			}
  	</script>

</div>