
<title>SITA | Update Personal Info</title>

<div class="content">
  
      
      <!-- <center><h2 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h2></center>
      
      <center><p style="color: black; font-size: 30px"><b>SITA: SIT ASSISTANT</b></p></h1></center> -->
      <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="<?php echo base_url('assets/img/sita2.png')?>" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">

      <div class="container" style="background-color: #ffe8e8; padding: 10px">
         <div class="row">
         <div class="col-md-12">
             <center><h2 style="color: #800000"><b>Update Personal Information</b></h2></center>
         </div>
       </div>
     </div>
     
      <br>
        
    <div class="container">
         <div class="row">
            <div class="col-md-12">
              <form id="insert_form" action="<?php echo base_url('accountsettings/edit_personalinfo')?>" method="POST">
              <?php foreach ($display_info->result() as $row):?>
                    <div class="form-group" style="padding-bottom: 50px">
                        <label class="control-label col-sm-2" for="email" style="font-size: 20px">Last Name</label>
                            <div class="col-sm-5">          
                                <input type="txt" class="form-control" id="txt" name="s_lname" value="<?php echo $row->Student_Lastname;?>" style="font-size: 20px">
                            </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 50px">
                        <label class="control-label col-sm-2" for="email" style="font-size: 20px">First Name</label>
                            <div class="col-sm-5">          
                                <input type="txt" class="form-control" id="txt" name="s_fname" value="<?php echo $row->Student_Firstname;?>" style="font-size: 20px">
                            </div>
                    </div>

                    <div class="form-group" style="padding-bottom: 50px">
                        <label class="control-label col-sm-2" for="email" style="font-size: 20px">Middle Name</label>
                            <div class="col-sm-5">          
                                <input type="txt" class="form-control" id="txt" name="s_mname" value="<?php echo $row->Student_Middlename;?>" style="font-size: 20px">
                            </div>
                    </div>


                    <div class="form-group" style="padding-bottom: 50px">
                        <label class="control-label col-sm-2" for="email" style="font-size: 20px">Address</label>
                            <div class="col-sm-5">          
                                <input type="txt" class="form-control" id="txt" name="s_address" value="" style="font-size: 20px">
                            </div>
                    </div>
                          
                    <div class="form-group" style="padding-bottom: 50px">
                        <label class="control-label col-sm-2" for="email" style="font-size: 20px">Birthday</label>
                            <div class="col-sm-5">          
                                <input type="txt" class="form-control" id="txt" name="s_birthday" value="<?php echo $row->Birthday; ?>" style="font-size: 20px">
                            </div>
                    </div>

                    <div class="form-group" style="padding-bottom: 50px">
                        <label class="control-label col-sm-2" for="email" style="font-size: 20px">Contact No.</label>
                            <div class="col-sm-5">          
                                <input type="txt" class="form-control" id="txt" name="s_cellphone" value="<?php echo $row->Cellphone; ?>" style="font-size: 20px">
                            </div>
                    </div>
              <?php endforeach;?>
              <input class="btn btn-maroon btn-md pull-right" type="submit" value="Submit" role="button"/>
              </form>
              <a href="<?php echo base_url('accountsettings')?>" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-arrow-left" style="padding-right: 4px"></span>Back</a>
         </div>
    </div>
</div>