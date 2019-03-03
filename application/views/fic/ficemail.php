<?php $this->load->view('include/ficnavbar2'); ?>
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/ficmain.css">
</head>
<title>Student Requirements</title>

<div class="content">
      <center><h2 style="color: black"><img src="<?php echo base_url()?>assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h2></center>
      

      <center><p style="color: black; font-size: 28px"><b>SITA : SIT ASSISTANT</b></p></h1></center>
      <hr style="background-color: #800000">
      

     

      <center>
  <div class="table-responsive" style="font-size: 14px">          
  <table class="table">
    <thead style="color: #800000">
      <th colspan="10" style="background-color: #ffe8e8; color: #800000; font-size: 20px; text-align: center">STUDENT REQUIREMENTS</th>
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
		<?php 
		foreach($req as $r){
			if($row['Student_ID'] == $r['Student_ID']){
				if($r['Waiver'] == "" || $r['Application_Form'] == "" || $r['Placement_Letter'] == "" || $r['NBI'] == "" || 
				$r['Medical_Certificate'] == "" || $r['Tax_Certificate_Student'] == "" || $r['Tax_Certificate_Parent'] == "" || $r['Resume'] == ""
				|| $r['Registration_Form'] == "" )
				
				echo "<td>Incomplete Submission</td>" ;   

				else
					echo "<td>Complete Submission</td>";
				
			}
		}
		?>
        <td style="text-align: center";> <span data-toggle="tooltip" data-placement="top" title="Submission Details">
		<?php foreach($req as $r){
			if($row['Student_ID'] == $r['Student_ID']){
			echo '<a  class="openModal" href="#viewRequirements" data-toggle="modal" data-id='.$row['Student_ID'].'" data-surname="'.$row['Student_Lastname'].'"
           data-firstname="'.$row['Student_Firstname'].'" data-middle="'.$row['Student_Middlename'].'" data-waiver="'.
		   $r['Waiver'].'" data-appform="'.$r['Application_Form'].'" data-placement="'.$r['Placement_Letter'].'" 
		   data-nbi="'.$r['NBI'].'" data-medcert"'.$r['Medical_Certificate'].'" data-taxcerts="'.$r['Tax_Certificate_Student'].'"
		   data-taxcertp="'.$r['Tax_Certificate_Parent'].'" data-resume="'.$r['Resume'].'" data-regform="'.$r['Registration_Form'].'">View submitted requirements</a></td>';
			
			}
		}
		?>
      </tr>
           <?php endforeach; ?> 

    </tbody>
  </table>
  </div>
</center>
</div>


</div>

<div  id="viewRequirements" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
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

                              <input class="form-control" id="view-s-name" placeholder="surname" name="view-s-name" disabled>
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
                              <label>NBI</label> &nbsp;&nbsp;
<!--                           <label class="error" id="edit-error_email"> field is required.</label>
                              <label class="error" id="edit-error_email2"> email has already exist.</label>
                              <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                              <img id="view-nbi" name="view-nbi"/>
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
			  
<script>
$(document).on("click", ".openModal", function () {
     var myId = $(this).data('id');
     var sname = $(this).data('surname');
     var fname = $(this).data('firstname');
    var middle = $(this).data('middle');
    var nbi = $(this).data('nbi');
    var tnum = $(this).data('tnum');
     $(".modal-body #view-id-num").val( myId );
     $(".modal-body #view-s-name").val( sname );
     $(".modal-body #view-f-name").val( fname );
     $(".modal-body #view-m-name").val( middle );
	 var nbiurl = "<?php echo base_url('NBI/'); ?>";
	 a = document.getElementById('view-nbi');
     a.setAttribute("src",nbiurl.concat(nbi) + ".jpg" );
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