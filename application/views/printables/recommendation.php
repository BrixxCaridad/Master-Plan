<style type="text/css">

.input{
    border-bottom: 1px solid #0c87eb;
    margin: 3px;
    padding: 3px;
    font-size: 14px;
    width: 30%
}
.inputhrs{
    border-bottom: 1px solid #0c87eb;
    margin: 3px;
    padding: 3px;
    font-size: 14px;
    width: 5%;
}
.inputfic{
    border-bottom: 1px solid #0c87eb;
    margin: 3px;
    padding: 3px;
    font-size: 14px;
    width: 30%;
}
</style>

<title>SITA | Editor</title>

<div id="container" class="container" style="margin-top: 50px; margin-bottom: 50px; padding-right: 100px; padding-left: 100px">
        <div class="col-md-1">
        </div>
        <div class="col-md-11 appsit">
            <img src="<?php echo base_url()?>assets/img/TUPlogo.png" style="float: left; margin-left: 80px" class="img-responsive" width="100px" height="100px">
            <img src="<?php echo base_url()?>assets/img/IRJP.png" style="float: right" class="img-responsive" width="100px" height="100px">
            <center><b>REPUBLIC OF THE PHILIPPINES</b></center>
            <center>TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES</center>
            <center>Office of the Vice President for Academic Affairs</center>
            <center><b>INDUSTRIAL RELATIONS AND JOB PLACEMENT</b></center>
            <center>Ayala Boulevard, Ermita, Manila</center>
            <br>
        </div>
    
    
    <div class="col-md-2">
    </div>
    <div class="col-md-10 guidelines" style="text-align: left">
          <input class="input" type="text" name="date" placeholder="Date"><br>
          <input class="input" type="text" name="companyrep" placeholder="Name of Company Representative"><br>
          <input class="input" type="text" name="position" placeholder="Position"><br>
          <input class="input" type="text" name="compname" placeholder="Company Name"><br>
          <input class="input" type="text" name="address" placeholder="Company Address"><br><br>
          Sir:
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-10 appsit" style="text-align: left">
          Our university is in the process of establishing effective industry linkage for our students. We are considering your prestigious company to be one of our ideal training partners for our students. May I recommend <input class="input" type="text" name="student" placeholder="Name of Student"> to take up written examination / interview for possible placement in Supervised Industrial training (SIT) Program for <input class="inputhrs" type="text" name="hours"> hours in your company.
    </div>
    <div class="col-md-2">
    </div>
    
    <div class="col-md-1"></div>
    
    
    <div class="col-md-12 appsit" style="text-align: left; margin-left: 10em">
            Very truly yours,
    </div>
    <div class="col-md-12 appsit" style="text-align: left; margin-left: 10em">
            <input class="inputfic" type="text" name="fic">
    </div>
    <div class="col-md-12 appsit" style="text-align: left; margin-left: 14em">
            Faculty-in-Charge
    </div>
    

</div>

<div class="col-md-12" style="margin: 20px;">
 <div class="col-md-11">
 </div>
 <div class="col-md-1">
  <button onclick="printContent('container')" id="print" class="btn btn-info btn-lg"> Print</button>
 </div>
 </div>
 
 </div>

    </div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.14.0/printThis.js"></script>
<script>
    function printContent(container){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(container).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }

</script>