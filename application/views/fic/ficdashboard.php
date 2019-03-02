<?php 
  $this->load->view('include/ficnavbar2'); 
  // session_start();

  if(isset($_SESSION["id"]))
  {
      $user_id = $_SESSION["id"];

      include ("connections.php");

      $get_record = mysqli_query($connections, "SELECT * FROM facultyincharge WHERE role='$user_id'");
          while ($row =  mysqli_fetch_assoc($get_record)) {
              $db_fic_uname = $row["fic_uname"];
                  
               }
  }
  else
  {
      echo "You must login first.";
  }

  // include("connections.php"); 
  // $view_query = mysqli_query($connections, "SELECT * FROM students WHERE");
  //              while ($row =  mysqli_fetch_assoc($view_query)) {
  //                 $db_s_fname = $row["s_fname"];
  //                 echo $db_s_fname . "<br>";
  //              }

?>

<head>
  <link rel="stylesheet" type="text/css" href="assets/css/ficmain.css">
</head>
<title>SITA | Faculty Dashboard</title> 
<div class="content">
      <center><h2 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h2></center>
      
      <center><p style="color: black; font-size: 28px"><b>SITA : SIT ASSISTANT</b></p></h1></center>
      <hr style="background-color: #800000">
      

      <br>
      <h2 style="color: #800000">Welcome to Faculty Dashboard!</h2>
      
      <p id="demo"></p>
        <script>
          document.getElementById("demo").innerHTML = Date();
        </script>
      

       <span data-toggle="tooltip" data-placement="top" title="Add Student">  
                    
          <a class="btn btn-secondary" data-toggle="modal"  data-target="#addStudent" style="color: #fff; font-size: 12px;"> + Add Student</a>
       </span>

      <center>
      <br>
  <div class="table-responsive" style="font-size: 14px">          
  <table class="table">
    <thead style="color: #800000">
      <th colspan="10" style="background-color: #ffe8e8; color: #800000; font-size: 20px; text-align: center">DEPLOYMENT INFORMATION</th>
      <table class="table table-hover" id="dataTables-user-list">
      <tr>
        <th>ID NUMBER</th>
        <th>SURNAME</th>
        <th>COURSE</th>
        <th>STATUS</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php
          foreach($users as $row): 
         ?>             
        <tr>
        <td><?php echo $row->id_num; ?></td>
        <td><?php echo $row->s_lname; ?></td>
        <td><?php echo $row->course_name; ?></td>
          <?php 
          if($row->s_status == 1){
            ?>
              <td><i style="color: green;">On-Going</i></td>
            <?php
          }else{
            ?>
              <td><i style="color: red;">Pending</i></td>
            <?php
          }
          ?>
          <?php 
                  if($row->s_status == 1){
                    ?>
                      <td>
                      <span data-toggle="tooltip" data-placement="top" title="View Student Details">
                      <a class="btn btn-default" id="faculty-view"  
                      onclick="view_student_popup('<?=$row->id_num?>','<?=$row->s_lname?>','<?=$row->s_fname?>','<?=$row->s_mname?>','<?=$row->s_cellphone?>','<?=$row->s_telephone?>','<?=base_url() ?>');" data-toggle="modal" data-target="#viewStudent"><i class="fa fa-eye"></i></a></span>
                          

                      <span data-toggle="tooltip" data-placement="top" title="Edit Student Details">
                      <a class="btn btn-default" id="client-edit"  onclick="edit_client_popup('<?=$row->id_num?>','<?=$row->s_lname?>','<?=$row->s_fname?>','<?=$row->s_mname?>','<?=base_url() ?>');" data-toggle="modal" data-target="#editStudent"><i class="fa fa-edit"></i></a></span>
                      
                      <!--
                  }else{
                    ?>
                      <a class="btn btn-success" id="user-success" onclick="activate_confirmation('<?=$row->contact_id?>','<?=$row->c_id?>','<?=$row->c_name?>','<?=$row->contact_person?>','<?=$row->c_contact?>','<?=$row->c_address?>','<?=$row->b_name?>');" data-toggle="modal" data-target="#activateConfirm" style="color: #fff;"> Activate </a>
  
                    <?php
                  }
                ?>
                </td>
              </tr>  -->
              
            
        
        
        <td style="text-align: center";></td>
      
           <?php endforeach; ?> 
    </tbody>
  </table>
  </div>
</center>
</div>

<div  id="addStudent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >

  
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Student</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>



        <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label>ID Number</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input class="form-control" id="id_num" name="id_num" type="text" autofocus>
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label>Last Name</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input class="form-control" id="s_lname" name="s_lname" type="text" >
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label>First Name</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input class="form-control" id="s_fname" name="s_fname" type="text" >
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label>Middle Name</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input class="form-control" id="s_mname" name="s_mname" type="text" >
                      </div> 
                    </div>  
                </div>
                  
              </div>
       <div class="modal-footer">
                <button id="newStudentSubmit" type="button" class="btn btn-info">SUBMIT</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>

              </div>
      </div>
      
    </div>
  </div>




<div  id="viewStudent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
              <div class="modal-dialog" style="width:2000px;">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                      <h4 class="modal-title" id="myModalLabel"  style="color: #fff;">VIEW STUDENT DETAILS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff;">&times;</button>
                    </div>     
                    <div class="modal-body">
                    <!-- <a id="linkexport" class="btn btn-secondary" href='' style="margin-bottom: 10px;">Export Client Data</a> -->
                    <input type="hidden" id="hidden-id">
               
                     <input type="hidden"  id="view-s-id" value="">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>ID NUMBER</label> &nbsp;&nbsp;
<!--                                <label class="error" id="edit-error_name"> field is required.</label>
                              <label class="error" id="edit-error_name2"> name must be alphanumeric.</label> -->
                              <input class="form-control" id="view-id-num" placeholder="id number" name="view-id-num" disabled>
                            </div> 
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>SURNAME</label> &nbsp;&nbsp;
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <input class="form-control" id="view-s-name" placeholder="surname" name="view-s-name"  disabled>
                            </div> 
                          </div> <!-- col-lg-6 -->
                        </div> <!-- row -->

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>FIRST NAME</label> &nbsp;&nbsp;
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <input class="form-control" id="view-f-name" placeholder="firstname" name="view-f-name" disabled>
                            </div> 
                          </div> <!-- col-lg-6 -->

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>MIDDLE NAME</label> &nbsp;&nbsp;
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <input class="form-control" id="view-m-name" placeholder="MiddleName" name="view-m-name" disabled>
                            </div> 
                          </div> <!-- col-lg-6 -->
                        </div> <!-- row -->

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>CELLPHONE NUMBER</label> &nbsp;&nbsp;
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <input class="form-control" id="view-cp-num" placeholder="cellphonenumber" name="view-cp-num" disabled>
                            </div> 
                          </div> <!-- col-lg-6 -->

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label>TELEPHONE NUMBER</label> &nbsp;&nbsp;
<!--                            <label class="error" id="edit-error_email"> field is required.</label>
                                <label class="error" id="edit-error_email2"> email has already exist.</label>
                                <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                                <input class="form-control" id="view-telephone" placeholder="Contact No" name="view-telephone"  disabled>
                              </div> 
                          </div> <!-- col-lg-6 -->
                        </div> <!-- row -->
                        <?php 
                            foreach($users as $row): endforeach; 
                                ?>
                                  <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" onclick="view_contacts_popup();">Other Contacts</button>

                              <div id="demo" class="collapse">
                                  <table class="table table-hover" id="dataTables-user-list">
                                    <thead>
                                        <tr>
                                          <th>CONTACT NO.</th>
                                          <th>CONTACT PERSON</th>
                                          <th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contact-body">  

                                    </tbody>
                                    </table>
                              </div> -->
                                <?php 
                        ?>
                          
                    </div> <!-- Mode-body -->
                  </div> <!-- Model-dialog -->
                </div> <!-- Model-content -->
              </div> <!-- viewClient -->


  <div  id="editStudent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title" id="myModalLabel" style="color: #fff;">UPDATE CLIENT DETAILS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff;">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden"  id="edit-s-id" value=""/>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>ID Number</label> &nbsp;&nbsp;
<!--                          <label class="error" id="edit-error_name"> field is required.</label>
                              <label class="error" id="edit-error_name2"> name must be alphanumeric.</label> -->
                              <input class="form-control" id="edit-id-num" placeholder="ID Num" name="edit-id-num" type="text" autofocus>
                            </div> 
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">          
                              <label>Last Name</label>&nbsp;&nbsp;
                              <input class="form-control" id="edit-s-lname" placeholder="surname" name="edit-s-lname" type="text" autofocus>
                              </div>
                          </div>
                         
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>First Name</label> &nbsp;&nbsp;
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <input class="form-control" id="edit-s-fname" placeholder="firstname" name="edit-s-fname" type="text" autofocus>
                            </div> 
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Middle Name</label> &nbsp;&nbsp;
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <input class="form-control" id="edit-s-mname" placeholder="MiddleName" name="edit-s-mname" type="text" autofocus>
                            </div> 
                          </div>
                        </div>
                          
                        
                                                
                    </div> <!-- /. modal-body -->
                    <div class="modal-footer">                      
                        <button id="editStudentSubmit" type="button" class="btn btn-info">UPDATE</button>
                        <button id="cancel" type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                    </div>
                </div> <!-- /.Content-->
            </div>  <!-- /.Dialog-->
        </div>  <!-- /.Modal-->


<script src="<?=base_url()?>sita/assets/js/view/faculty_list.js"></script>