<?php $this->load->view('include/ficnavbar2'); ?>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/ficmain.css">
</head>
<title>SITA | Messages</title>

<div class="content">
  
      
       <center>
          <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4>
          <p style="color: black; font-size: 20px"><b>SITA: SIT ASSISTANT</b></p></h1></
       </center>
      <hr style="background-color: #0040000">
      
      <div class="ficdashtitle">
          <center><h3 style="color: #004000"><b>MESSAGES</b></h3></center>
      </div>
        
        <button class="accordionF"><div class="col-md-10" style="padding-top: 10px"><b>Meredith Grey</b></div> <div class="col-md-2"> <b>August 21, 2018 8:45PM</b></div></button>
      <div class="panelF">
        <div class="col-md-12" style="padding-bottom: 15px">
              <br><p style="font-size: 15px">Greetings, Prof. Garcia. Are you at the office tomorrow? I would like to pass my narrative report. Thanks! </p>
            </div>
            <a href="#replymessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
              <a href="#deletemessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
      </div>
    <br>
    <button class="accordionF"><div class="col-md-10" style="padding-top: 10px"><b>Cristina Yang</b></div> <div class="col-md-2"> <b>August 21, 2018 8:45PM</b></div></button>
      <div class="panelF">
        <div class="col-md-12" style="padding-bottom: 15px">
              <br><p style="font-size: 15px">Good day, Prof. Garcia! Can we meet you tomorrow? We would like to meet you regarding some problems in our company.</p>
            </div>
            <a href="#replymessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
              <a href="#deletemessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
      </div>
    <br>
    <button class="accordionF"><div class="col-md-10" style="padding-top: 10px">Thatcher Grey</div> <div class="col-md-2"> August 21, 2018 8:45PM</div></button>
      <div class="panelF">
        <div class="col-md-12" style="padding-bottom: 15px">
              <br><p style="font-size: 15px">Good morning, Ma'am May! There is a meeting at exactly 2PM later. Attendance is a must.</p>
            </div>
            <a href="#replymessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
              <a href="#deletemessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
      </div>
    <br>
    <button class="accordionF"><div class="col-md-10" style="padding-top: 10px">Alex Karev</div> <div class="col-md-2"> August 21, 2018 8:45PM</div></button>
      <div class="panelF">
        <div class="col-md-12" style="padding-bottom: 15px">
              <br><p style="font-size: 15px">Stock has been filled in the pantry. You are welcome to join us at a little celebration for Ms. LunaFreya's promotion.</p>
            </div>
            <a href="#replymessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-edit" style="padding-right: 4px"></span>Reply</a>
              <a href="#deletemessage" class="btn btn-green btn-lg pull-right" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</a>
      </div>
    
    
    <script type="text/javascript">
      var acc = document.getElementsByClassName("accordionF");
    var i;

      for (i = 0; i < acc.length; i++) {
          acc[i].onclick = function(){
              this.classList.toggle("active");
              this.nextElementSibling.classList.toggle("show");
          }
      }
    </script>

</div>