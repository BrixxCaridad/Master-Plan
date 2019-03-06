<div class="main-main-container">
	<div class="page-title fic-dash">
		<h4 class="text-bold"><b><span class="fa fa-dashboard"></span> DASHBOARD<small></small></b></h4>
	</div>
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-12">
				<h2 style="color: #800000">Welcome to Faculty Dashboard!</h2>
				<p id="demo"></p>
        <script>
          document.getElementById("demo").innerHTML = Date();
        </script>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12 text-right">
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addStudent">Add Student</button>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<h5 class="text-bold text-maroon"><b><span class="fa fa-circle text-maroon"></span> DEPLOYMENT INFORMATION:</b></h5>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<div class="table-responsive" style="font-size: 14px">          
  				<table class="table table-hover" id="dataTables-user-list">
    				<thead style="color: #800000">
      				<tr>
        				<th>ID NUMBER</th>
        				<th>SURNAME</th>
        				<th>COURSE</th>
        				<th>STATUS</th>
        				<th>ACTION</th>
      				</tr>
    				</thead>        
    				<tbody>
      				<?php foreach($data as $row): ?>             
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
			</div>
		</div>
	</div>
      


<div  id="addStudent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >

  
    <div class="modal-dialog" style="top: 50px">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:700px;">
        <div class="modal-header text-center">
          <h4 class="modal-title"><b>Add New Student</b></h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
				</div>
				<?=form_open('fic/add_student' , 'id="StudentAdd"');?>
        <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                          <p>ID Number</p>
                          <input class="form-control" id="id_num" name="id_num" type="text" autofocus>
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <p>Last Name</p>
                          <input class="form-control" id="s_lname" name="s_lname" type="text" >
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <p>First Name</p>
                          <input class="form-control" id="s_fname" name="f_fname" type="text" >
                      </div> 
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                          <p>Middle Name</p>
                          <input class="form-control" id="s_mname" name="m_mname" type="text" >
                      </div> 
                    </div>  
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p>Course</p>
                  <select style="height:40px;" class="form-control" id="course" name="course"  value="<?php echo set_value('course');?>">
                  <?php
                  foreach($courses as $s){ 
                  echo '<option value="'.$s['Course_Code'].'">'.$s['Course_Code'].'</option>';
                  }
                  ?>
                  </select>
                    </div>

              </div>
              </div>
            
       <div class="modal-footer">
                <button id="newStudentSubmit" type="submit" form="StudentAdd" class="btn btn-md btn-info" value="submit">SUBMIT</button>
                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">CANCEL</button>

							</div>
							</form>
      </div>
      
    </div>
  </div>







<div  id="viewStudent" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="top: 50px">
    <div class="modal-content" style="width:700px;">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel" ><b>VIEW STUDENT DETAILS</b></h4>
      </div>     
      <div class="modal-body">
        <input type="hidden" id="hidden-id"> 
        <input type="hidden"  id="view-s-id" value="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <p>ID NUMBER</p>
                <input class="form-control" id="view-id-num" placeholder="id number" name="view-id-num" disabled>
              </div> 
            </div>
						<div class="col-md-6">
              <div class="form-group">
                <p>SURNAME</p>
								<input class="form-control" id="view-s-name" placeholder="surname" name="view-s-name"  disabled>
              </div> 
            </div> 
          </div> 

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <p>FIRST NAME</p>
                <input class="form-control" id="view-f-name" placeholder="firstname" name="view-f-name" disabled>
              </div> 
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <p>MIDDLE NAME</p>
                <input class="form-control" id="view-m-name" placeholder="MiddleName" name="view-m-name" disabled>
              </div> 
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <p>CELLPHONE NUMBER</p>
<!--              <label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
                  <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                <input class="form-control" id="view-cp-num" placeholder="cellphonenumber" name="view-cp-num" disabled>
              </div> 
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <p>TELEPHONE NUMBER</p>
									<!--<label class="error" id="edit-error_email"> field is required.</label>
                <label class="error" id="edit-error_email2"> email has already exist.</label>
                <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                <input class="form-control" id="view-telephone" placeholder="Contact No" name="view-telephone"  disabled>
              </div> 
            </div>
          </div>
        </div>
				<div class="modal-footer text-center">
					<button type="button" class="btn btn-md btn-secondary" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
      </div>
    </div>
  </div>
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
                              <p>ID Number</p>
<!--                          <label class="error" id="edit-error_name"> field is required.</label>
                              <label class="error" id="edit-error_name2"> name must be alphanumeric.</label> -->
                              <input class="form-control" id="edit-id-num" placeholder="ID Num" name="edit-id-num" type="text" autofocus>
                            </div> 
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">          
                              <p>Last Name</p>
                              <input class="form-control" id="edit-s-lname"  placeholder="surname" name="edit-s-lname" type="text" autofocus>
                              </div>
                          </div>
                         
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <p>First Name</p>
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <input class="form-control" id="edit-s-fname" placeholder="firstname" name="edit-s-fname" type="text" autofocus>
                            </div> 
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <p>Middle Name</p>
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


document.getElementById("newStudentSubmit").addEventListener("click", function(event){
  event.preventDefault()
});

$(document).ready(function(){
   $("#newStudentSubmit").click(function(event){
    event.preventDefault();

    $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_user",
   data: "name="+$("#id_num").val(),
   success: function(msg){
          if(msg!="true")
          { 
              alert(msg);
          }
          else{
             $("#StudentAdd").submit();
             }
     }
   
    });


  });
   });
</script>
