<?php $this->load->view('include/ficnavbar2'); ?>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/ficmain.css">
</head>
<div class="content">
<head>
<title>SITA | Company Tracker</title>
</head>  
      
      <center>
          <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4>
          <p style="color: black; font-size: 20px"><b>SITA: SIT ASSISTANT</b></p></h1></
      </center>
      <hr style="background-color: #004000">
      
     
		<div class="ficdashtitle">
          <center><h3 style="color: #004000"><b>Company Location</b></h3></center>
    </div>
		
    <div class="container">
		    <div id="map" style="width:1000px;height:400px;background:#66ff66"></div>
    </div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
      
    
 
</div>