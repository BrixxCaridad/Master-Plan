



<title>SITA | Faculty Dashboard</title> 
<div class="content">
      <center><h2 style="color: black"><img src="<?php echo base_url()?>assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h2></center>
      

      <center><p style="color: black; font-size: 28px"><b>SITA : SIT ASSISTANT</b></p></h1></center>
      <hr style="background-color: #800000">
      

      <br>
      <h2 style="color: #800000">Welcome to Faculty Dashboard!</h2>
      
      <p id="demo"></p>
        <script>
          document.getElementById("demo").innerHTML = Date();
        </script>
      
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addStudent">Add Student</button>

       <span data-toggle="tooltip" data-placement="top" title="Add Student">  
                    
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
          foreach($data as $row):
         ?>             
        <tr>
        <td><?php echo $row['Student_ID']; ?></td>
        <td><?php echo $row['Student_Lastname']; ?></td>
        <td><?php echo $row['Course_Code']; ?></td>
        <td><?php echo $row['Status']; ?></td>       

        <td style="text-align: center";> <span data-toggle="tooltip" data-placement="top" title="View Student Details">
          <a  class="openModal" href="#viewStudent" data-toggle="modal" data-id="<?=$row['Student_ID']?>" data-surname="<?=$row['Student_Lastname']?>"
           data-firstname="<?=$row['Student_Firstname']?>" data-middle="<?=$row['Student_Middlename']?>" data-cnum="<?=$row['Cellphone']?>"
           data-tnum="<?=$row['Telephone']?>" >View Student Details</a></td>
      </tr>
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
                        <?=form_open('fic/add_student' , 'id="StudentAdd"');?>
                          <label>ID Number</label> &nbsp;&nbsp;
                          
                          <input class="form-control" id="id_num" name="id_num" type="text" autofocus>
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label>Last Name</label> &nbsp;&nbsp;
                        
                          <input class="form-control" id="s_lname" name="s_lname" type="text" >
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label>First Name</label> &nbsp;&nbsp;
             
                          <input class="form-control" id="s_fname" name="f_fname" type="text" >
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <label>Middle Name</label> &nbsp;&nbsp;
                   
                          <input class="form-control" id="s_mname" name="m_mname" type="text" >
                      </div> 
                    </div>  
                </div>
                  
              </div>
            </form>
       <div class="modal-footer">
                <button id="newStudentSubmit" type="submit" form="StudentAdd" class="btn btn-info" value="submit">SUBMIT</button>
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

                              <input class="form-control" id="view-id-num" placeholder="id number" name="view-id-num" disabled>
                            </div> 
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>SURNAME</label> &nbsp;&nbsp;

                              <input class="form-control" id="view-s-name" placeholder="surname" name="view-s-name"  disabled>
                            </div> 
                          </div> <!-- col-lg-6 -->
                        </div> <!-- row -->

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>FIRST NAME</label> &nbsp;&nbsp;

                              <input class="form-control" id="view-f-name" placeholder="firstname" name="view-f-name" disabled>
                            </div> 
                          </div> <!-- col-lg-6 -->

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>MIDDLE NAME</label> &nbsp;&nbsp;

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
                              <input class="form-control" id="edit-s-lname"  placeholder="surname" name="edit-s-lname" type="text" autofocus>
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
                              <input class="form-control" id="edit-s-mname"  placeholder="MiddleName" name="edit-s-mname" type="text" autofocus>
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


<script>
$(document).on("click", ".openModal", function () {
     var myId = $(this).data('id');
     var sname = $(this).data('surname');
     var fname = $(this).data('firstname');
    var middle = $(this).data('middle');
    var cnum = $(this).data('cnum');
    var tnum = $(this).data('tnum');
     $(".modal-body #view-id-num").val( myId );
     $(".modal-body #view-s-name").val( sname );
     $(".modal-body #view-f-name").val( fname );
     $(".modal-body #view-m-name").val( middle );
     $(".modal-body #view-cp-num").val( cnum );
     $(".modal-body #view-telephone").val( tnum );
});
</script>