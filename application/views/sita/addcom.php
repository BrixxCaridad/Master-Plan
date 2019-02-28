<?php $this->load->view('include/navbar2'); ?>

<title>SITA | Add Company</title>

<div class="content">
  		
      
      <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
      
      <br>
      
      <div class="container" style="background-color: #ffe8e8; padding: 10px">
      	<div class="row">
	      <div class="col-md-12">
	      	 <center><h2 style="color: #800000"><b>Add Company</b></h2></center>
	      </div>
	    </div>
  	  </div>
     
      <br>      
      	
        <button class="addcom"><div class="col-md-10" style="padding-top: 10px"><b>Add Nature of Business</b></div> </button>
			<div class="panelAdd">
						<div class="col-md-12" style="padding-bottom: 15px">
      				<div class="col-md-3">
              
                  
                  <div class="form-group" style="padding-bottom: 50px">
                        <label class="control-label" for="email" style="font-size: 20px">Nature of Business</label>
                        <input type="txt" class="form-control col-sm-8" id="txt" style="font-size: 20px">
                   </div>
              
          </div>
      			</div>
      			<a href="#replymessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            	<a href="#deletemessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
			</div>
		
		
		
  	<script type="text/javascript">
  		var acc = document.getElementsByClassName("addcom");
		var i;

			for (i = 0; i < acc.length; i++) {
    			acc[i].onclick = function(){
        			this.classList.toggle("active");
        			this.nextElementSibling.classList.toggle("show");
    			}
			}
  	</script>

</div>