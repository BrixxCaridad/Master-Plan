<?php $this->load->view('include/navbar3'); ?>

<title>SITA | Messages</title>

<div class="content">
  
      
      <center><h2 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h2></center>
      
      <center><p style="color: black; font-size: 28px"><b>SITA : SIT ASSISTANT</b></p></h1></center>
      <hr style="background-color: #800000">
      
      <br>
      
      <div class="container" style="background-color: #ffe8e8; padding: 10px">
      	<div class="row">
	      <div class="col-md-12">
	      	 <center><h2 style="color: #800000"><b>MESSAGES</b></h2></center>
	      </div>
	    </div>
  	  </div>
     
      <br>

      <!--<div class="container">
        <div class="row">
        <div class="col-md-12">
           <a href="#newmessage" class="btn btn-maroon btn-lg pull-right" role="button" data-toggle="modal" data-target="#myModal><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Create New Message</a>
        </div>
      </div>
      </div>-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
             <button id="myBtn" class="btn btn-maroon btn-lg pull-right">Create new message</button>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                  <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                          <h2>Create new message</h2>
                            <span class="close">×</span>
                                
                        </div>
                    <div class="modal-body">
                        <form role="form">
                          <div class="form-group">
                            <label for="email">Recipient:</label>
                            <input type="email" class="form-control" style="font-size: 15px" id="email">
                          </div>
                          <div class="form-group">
                            <label for="txt">Subject:</label>
                            <input type="text" class="form-control" style="font-size: 15px" id="txt">
                          </div>
                          <div class="form-group">
                            <label for="comment">Message:</label>
                            <textarea class="form-control" style="font-size: 15px" rows="5" id="comment"></textarea>
                          </div>
                         
                        </form>
                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-maroon btn-lg pull-right">Send message</button>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    <div class="container">
      	<div class="row">
      		<div class="col-md-12">
      			
      			<hr style="background-color: #800000">
      			<div class="col-md-12" style="padding-bottom: 15px">
      				<h3>Sender:	Miranda Bailey, M.D., Chief of Surgery, Grey Sloan Memorial Hospital</h3>
      			</div>
      			<div class="col-md-12" style="padding-bottom: 15px">
      				<h3>Address:	Technological University of the Philippines - Manila</h3>
      			</div>
      			<div class="col-md-12	" style="padding-bottom: 15px">
      				<h3>Message:	</h3><br><p style="font-size: 15px"><i>Greetings, Dr. Meredith Grey! The Chief of Surgery wishes to appoint you as the new Chief of General Surgery. We'll keep in touch to update you of your appointment schedule with the Chief. Congratulations!</i></p>
      			</div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Date sent:  September 14, 2018</h3>
            </div>
      			<div class="col-md-12" style="padding-bottom: 15px">
      				<h3>Time sent:	10:27 AM</h3>
      			</div>
      			<a href="#replymessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            <a href="#deletemessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Delete</a>
      		</div>
      	</div>
      	<br>
      	
        <div class="row">
          <div class="col-md-12">
            
            <hr style="background-color: #800000">
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Sender: Amelia Shepherd, M.D., Chief of Neurosurgery, Grey Sloan Memorial Hospital</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Address:  Technological University of the Philippines - Manila</h3>
            </div>
            <div class="col-md-12 " style="padding-bottom: 15px">
              <h3>Message:  </h3><br><p style="font-size: 15px"><i>Hi lovely sister of mine! I would like to drop by your house later to talk about the internship rotation schedule tomorrow. Gotta bring some drinks, see you!</i></p>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Date sent:  September 14, 2018</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Time sent:  10:34 AM</h3>
            </div>
           <a href="#replymessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            <a href="#deletemessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Delete</a>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-12">
            
            <hr style="background-color: #800000">
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Sender: Margaret Pierce, M.D., Chief of Cardiothoracic Surgery, Grey Sloan Memorial Hospital</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Address:  Technological University of the Philippines - Manila</h3>
            </div>
            <div class="col-md-12 " style="padding-bottom: 15px">
              <h3>Message:  </h3><br><p style="font-size: 15px"><i>Hi sister! I baked some cookies and I would like to share some to you. Will you be home later? I wanna spend time with Zola, Bailey, and Ellis too! I called our friends too. It's gonna be a great cookie party. See you!</i></p>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Date sent:  September 14, 2018</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Time sent:  10:37 AM</h3>
            </div>
            <a href="#replymessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            <a href="#deletemessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Delete</a>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-12">
            
            <hr style="background-color: #800000">
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Sender: Cristina Yang, M.D., Chief Medical Officer & Director of Cardiothoracic Surgery, Klausman Institute for Medical Research</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Address:  Zurich, Switzerland</h3>
            </div>
            <div class="col-md-12 " style="padding-bottom: 15px">
              <h3>Message:  </h3><br><p style="font-size: 15px"><i>Meredith, my twisted sister! Hope you're doing well! Congratulations on being Chief of General Surgery! See you soon!</i></p>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Date sent:  September 14, 2018</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Time sent:  10:42 AM</h3>
            </div>
            <a href="#replymessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            <a href="#deletemessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Delete</a>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-12">
            
            <hr style="background-color: #800000">
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Sender: Owen Hunt, M.D., Chief of Trauma Surgery, Grey Sloan Memorial Hospital</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Address:  Technological University of the Philippines - Manila</h3>
            </div>
            <div class="col-md-12 " style="padding-bottom: 15px">
              <h3>Message:  </h3><br><p style="font-size: 15px"><i>Congratulations, Chief of General Surgery Meredith Grey! I'm coming with Amelia later. Let's drink to that!</i></p>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Date sent:  September 14, 2018</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Time sent:  10:44 AM</h3>
            </div>
            <a href="#replymessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            <a href="#deletemessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Delete</a>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-12">
            
            <hr style="background-color: #800000">
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Sender: Thatcher Grey</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Address:  Sacramento, California</h3>
            </div>
            <div class="col-md-12 " style="padding-bottom: 15px">
              <h3>Message:  </h3><br><p style="font-size: 15px"><i>Congratulations, my dear daughter. Dad misses you so much. I love you! See you soon!</i></p>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Date sent:  September 14, 2018</h3>
            </div>
            <div class="col-md-12" style="padding-bottom: 15px">
              <h3>Time sent:  10:45 AM</h3>
            </div>
            <a href="#replymessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
            <a href="#deletemessage" class="btn btn-maroon btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Delete</a>
          </div>
        </div>
        <br>
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