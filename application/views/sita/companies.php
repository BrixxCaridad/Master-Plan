<?php $this->load->view('include/navbar2'); ?>

<title>SITA | Companies</title>

<div class="content">
  
      
      <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
      <div class="row">
        <div class="col-md-7">
          <div class="search">
            <form class="search-form">
              <input type="text" placeholder="Search for companies, job specifications, or location">
              <input type="submit" value="Search">
            </form>
          </div>
        </div>
        <div class="col-md-5" style="padding-top: 5px">
            <h5>Filter by: 
              <button type="button" class="btn btn-cmaroon">Company</button>
              <button type="button" class="btn btn-cmaroon">Job Specifications</button>
              <button type="button" class="btn btn-cmaroon">Location</button>
            </h5>
        </div>
      </div>
      <br>
      
      <div class="table-responsive" style="font-size: 14px">   
      
  <table class="table">
    <thead style="color: #800000">
      <th colspan="9" style="background-color: #ffe8e8; color: #800000; font-size: 20px; text-align: center">ACCREDITED COMPANIES</th>
      
      <tr>
        <th>No.</th>
        <th>Company Name</th>
        <th>Location</th>
        <th>Job Specification</th>
        <th>E-mail Address</th>
        <th>Bookmark</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Grey Sloan Memorial Hospital</td>
        <td>Seattle, Washington DC</td>
        <td>Surgical Intern</td>
        <td>gsmh@gmail.com</td>
        <td><span class="glyphicon glyphicon-star"></span></td>
      </tr>

      <tr>
        <td>2</td>
        <td>Seattle Grace Hospital</td>
        <td>Seattle, Washington DC</td>
        <td>Surgical Intern</td>
        <td>sgh@gmail.com</td>
        <td><span class="glyphicon glyphicon-star-empty"></span></td>
      </tr>

      <tr>
        <td>3</td>
        <td>Seattle Presbyterian Hospital</td>
        <td>Seattle, Washington DC</td>
        <td>Surgical Intern</td>
        <td>sph@gmail.com</td>
        <td><span class="glyphicon glyphicon-star-empty"></span></td>
      </tr>

      <tr>
        <td>4</td>
        <td>Denny Duquette Memorial Clinic</td>
        <td>Seattle, Washington DC</td>
        <td>Clinic Assistant</td>
        <td>ddmc@gmail.com</td>
        <td><span class="glyphicon glyphicon-star-empty"></span></td>
      </tr>

      <tr>
        <td>5</td>
        <td>Mercy West Hospital</td>
        <td>Seattle, Washington DC</td>
        <td>Surgical Intern</td>
        <td>mwh@gmail.com</td>
        <td><span class="glyphicon glyphicon-star-empty"></span></td>
      </tr>

      <tr>
        <td>6</td>
        <td>Klausmann Institute for Medical Research</td>
        <td>Zurich, Switzerland</td>
        <td>Surgical Intern</td>
        <td>mwh@gmail.com</td>
        <td><span class="glyphicon glyphicon-star-empty"></span></td>
      </tr>

    </tbody>
  </table>
  <script type="text/javascript">
      $(document).ready(function (){
          $('table.display').DataTable();
      } );
  </script>
  </div>
<style type="text/css">
/* ===========================
   ====== Search Box ====== 
   =========================== */

.search
{
  border: 2px solid #800000;
  overflow: auto;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  font-size: 14px;
  width: 55%;
}

.search input[type="text"]
{
  border: 0px;
  width: 67%;
  padding: 10px 10px;
}

.search input[type="text"]:focus
{
  outline: 0;
}

.search input[type="submit"]
{
  border: 0px;
  background: none;
  background-color: #800000;
  color: #fff;
  float: right;
  padding: 10px;
  border-radius-top-right: 5px;
  -moz-border-radius-top-right: 5px;
  -webkit-border-radius-top-right: 5px;
  border-radius-bottom-right: 5px;
  -moz-border-radius-bottom-right: 5px;
  -webkit-border-radius-bottom-right: 5px;
        cursor:pointer;
}

/* ===========================
   ====== Medua Query for Search Box ====== 
   =========================== */

@media only screen and (min-width : 150px) and (max-width : 780px)
{
  {}
  .search
  {
    width: 95%;
    margin: 0 auto;
  }

}
</style>
</div>