
<div class="main-main-container">
	<div class="page-title fic-dash">
		<h4 class="text-bold"><b><span class="fa fa-street-view"></span> COMPANY LOCATION<small></small></b></h4>
	</div>
		
    <div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-12">
		    	<div id="map" style="width:100%;height:400px; background-color: #e4e4e4"></div>
			</div>
		</div>
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
