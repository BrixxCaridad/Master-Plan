

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
              <input id="myInput" type="text" name="comp_query" placeholder="Search for companies, job specifications, or location" onkeyup="companies()">
              <input type="submit" value="Search">
            </form>
          </div>
        </div>
        <?php if($_SESSION['account_type']=='IRJP'):?>
        <div class="col-md-2" style="padding-top: 5px;">
          <button type="button" class="btn btn-cmaroon btn-md" data-toggle="modal" data-target="#myModal">Add Company</button>
        </div>
        <?php endif;?>
      </div>
      <br>
      
       <div class="table-responsive" style="font-size: 14px">          
        <table class="table">
          
          <thead style="color: #800000">
            <th colspan="10" style="background-color: #ffe8e8; color: #800000; font-size: 20px; text-align: center">LIST OF ACCREDITED COMPANIES</th>
            <table class="table table-hover" id="dataTables-user-list">
            <tr>
              <th>COMPANY NAME</th>
              <th>COMPANY TEL.</th>
              <th>COMPANY ADDRESS</th>
              <th>COMPANY CODE</th>
              <th>TYPE</th>
            </tr>
          </thead>


          <tbody>
      <?php echo form_open("companies2/display_company"); ?>
           <?php 
       if ($display_company->num_rows() > 0)
       {
        foreach ($display_company->result() as $row)
        {?>
          
          <tr>
            <td><?php echo $row->Company_Name; ?> </td>
            <td><?php echo $row->Company_Phone; ?> </td>
            <td><?php echo $row->Company_Address; ?> </td>            
            <td><?php echo $row->Company_Code; ?> </td>    
            <td><?php echo $row->Type; ?> </td>    
          </tr>
          
        <?php
        }
        
       }
       else
       {?>
        <tr>
        <td colspan="3"> No Data Found</td>
        </tr>

      <?php
       }
       
       
       ?>
       
       <?php echo form_close(); ?>
            </tbody>
      

      
      </table>
</div>



  <!-- Modal -->

  
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