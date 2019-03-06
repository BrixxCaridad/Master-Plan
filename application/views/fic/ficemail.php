<div class="main-main-container">
	<div class="page-title fic-dash">
		<h4 class="text-bold"><b><span class="fa fa-copy"></span> REVIEW REQUIREMENTS<small></small></b></h4>
	</div>
	<div class="container-fluid">
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
									<?php 
												$y=0;
												foreach($req as $r){
													if($row['Student_ID'] == $r['Student_ID']){
														if($r['Waiver'] == "Incomplete" || $r['Application_Form'] == "Incomplete" || $r['Placement_Letter'] == "Incomplete" || $r['NBI'] == "Incomplete" || 
														$r['Medical_Certificate'] == "Incomplete" || $r['Tax_Certificate_Student'] == "Incomplete" || $r['Tax_Certificate_Parent'] == "Incomplete" || $r['Resume'] == "Incomplete"
														|| $r['Registration_Form'] == "Incomplete" || $r['TUP_Evaluation_Sheet'] == "Incomplete" )
				
														echo "<td>Incomplete Submission</td>" ;   

														else
															echo "<td>Complete Submission</td>";
														$y++;
													}
												}
												if($y ==0)
													echo "<td>No requirement submitted</td>"; ?>
        				<td style="text-align: center";> <span data-toggle="tooltip" data-placement="top" title="Submission Details">
												<?php foreach($req as $r){
															if($row['Student_ID'] == $r['Student_ID']){
															echo '<a  class="openModal" href="#viewRequirements" data-toggle="modal" data-id='.$row['Student_ID'].' data-surname="'.$row['Student_Lastname'].'"
           												data-firstname="'.$row['Student_Firstname'].'" data-middle="'.$row['Student_Middlename'].'" data-waiver="'.
		   												$r['Waiver'].'" data-appform="'.$r['Application_Form'].'" data-placement="'.$r['TUP_Evaluation_Sheet'].'" 
		   												data-nbi="'.$r['NBI'].'" data-medcert="'.$r['Medical_Certificate'].'" data-taxcerts="'.$r['Tax_Certificate_Student'].'"
		   												data-taxcertp="'.$r['Tax_Certificate_Parent'].'" data-resume="'.$r['Resume'].'" data-regform="'.$r['Registration_Form'].'">View submitted requirements</a></td>';
															}
														}?>
      				</tr>
           		<?php endforeach; ?> 
    				</tbody>
  				</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->

<div  id="viewRequirements" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:2000px; top:50px">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h4 class="modal-title" id="myModalLabel"  style="color: #fff;">VIEW STUDENT DETAILS</h4>
      </div>     
      <div class="modal-body">
        <input type="hidden" id="hidden-id">
          <input type="hidden"  id="view-s-id" value="">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <p>ID NUMBER</p>
                  <input class="form-control" id="view-id-num" placeholder="id number" name="view-id-num" disabled>
                </div> 
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <p>SURNAME</p>
									<input class="form-control" id="view-s-name" placeholder="surname" name="view-s-name" disabled>
                </div> 
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                  <p>FIRST NAME</p>
                  <input class="form-control" id="view-f-name" placeholder="firstname" name="view-f-name" disabled>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <p>MIDDLE NAME</p>
                  <input class="form-control" id="view-m-name" placeholder="MiddleName" name="view-m-name" disabled>
                </div> 
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <p>NBI (<span class="reqstatus text-success fa fa-check"></span>)</p>
									<!--<label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
									<label class="error" id="edit-error_email3"> invalid email adress.</label> -->
									<div class="row">
										<div class="col-md-6">
											<a id="view-nbi" name="view-nbi" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info" title="Approve" target="_blank" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" title="Disapprove" target="_blank" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="" class="my-textarea btn-block" rows="2" placeholder="Comment or notes here..."></textarea>
										</div>
									</div>
									<!-- <button id= "vNBI" type="button" class="btn btn-danger">Verify</button>                            -->
								</div> 
							</div>							
							<div class="col-lg-6">
								<div class="form-group">
                  <p>Medical Certificate (<span class="reqstatus text-default fa fa-minus"></span>)</p>
									<!-- <label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
									<label class="error" id="edit-error_email3"> invalid email adress.</label> -->
									<div class="row ">
										<div class="col-md-6">
											<a id="view-medcert" name="view-medcert" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info" title="Approve" target="_blank" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" title="Disapprove" target="_blank" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="" class="my-textarea btn-block" rows="2" placeholder="Comment or notes here..."></textarea>
										</div>
									</div>
                  <!-- <button id= "vMED" type="button" class="btn btn-danger">Verify</button>  -->
                </div> 
              </div>
						</div>
						<div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <p>Student Tax Certificate (<span class="reqstatus text-success fa fa-minus"></span>)</p>
                  <!--<label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
                  <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                  <!-- <a id= "view-taxcerts" name="view-tax" target="_blank" ><small><span class="fa fa-external-link"></span> View</small></a> 
                  <button id="vSTAX"  type="button"  class="btn btn-danger">Verify</button>                             -->
									<div class="row">
										<div class="col-md-6">
											<a id= "view-taxcerts" name="view-tax" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info" title="Approve" target="_blank" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" title="Disapprove" target="_blank" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="" class="my-textarea btn-block" rows="2" placeholder="Comment or notes here..."></textarea>
										</div>
									</div>
								</div> 
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                  <p>Parent Tax Certificate (<span class="reqstatus text-success fa fa-check"></span>)</p>
                  <!--<label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
                  <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                  <!-- <a id="view-PTax" name="view-PTax" target="_blank"><small><span class="fa fa-external-link"></span> View</small></a> -->
                  <!-- <button id="vPTAX"  type="button"  class="btn btn-danger">Verify</button>   -->
									<div class="row">
										<div class="col-md-6">
											<a id="view-PTax" name="view-PTax" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info" title="Approve" target="_blank" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" title="Disapprove" target="_blank" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="" class="my-textarea btn-block" rows="2" placeholder="Comment or notes here..."></textarea>
										</div>
									</div>
								</div> 
							</div>
						</div>
						<div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <p>TUP Evaluation Sheet (<span class="reqstatus text-success fa fa-check"></span>)</p>
                  <!--<label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
                  <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                  <!-- <a id= "view-eSHEET" name="view-esheet" target="_blank" ><small><span class="fa fa-external-link"></span> View</small></a> 
                  <button id="vESHEET"  type="button"  class="btn btn-danger">Verify</button>                             -->
									<div class="row">
										<div class="col-md-6">
											<a id= "view-eSHEET" name="view-esheet" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info" title="Approve" target="_blank" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" title="Disapprove" target="_blank" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="" class="my-textarea btn-block" rows="2" placeholder="Comment or notes here..."></textarea>
										</div>
									</div>
								</div> 
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <p>Resume (<span class="reqstatus text-default fa fa-minus"></span>)</p>
									<!--<label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
                  <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                  <!-- <a id="view-viewResume" name="view-medcert" target="_blank"><small><span class="fa fa-external-link"></span> View</small></a>
										<button id="vRESUME"  type="button"  class="btn btn-danger">Verify</button>   -->
									<div class="row">
										<div class="col-md-6">
											<a id="view-viewResume" name="view-medcert" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info" title="Approve" target="_blank" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" title="Disapprove" target="_blank" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="" class="my-textarea btn-block" rows="2" placeholder="Comment or notes here..."></textarea>
										</div>
									</div>
                </div> 
							</div> 
						</div>
						<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<p>Registration Form (<span class="reqstatus text-default fa fa-minus"></span>)</p>
								<!--  <label class="error" id="edit-error_email"> field is required.</label>
								<label class="error" id="edit-error_email2"> email has already exist.</label>
								<label class="error" id="edit-error_email3"> invalid email adress.</label> -->
								<!-- <a id="view-viewResume" name="view-medcert" target="_blank"><small><span class="fa fa-external-link"></span> View</small></a>
	 							<button id="vRESUME"  type="button"  class="btn btn-danger">Verify</button>   -->
								<div class="row">
									<div class="col-md-6">
										<a id="view-viewResume" name="view-medcert" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
									</div>
									<div class="col-md-6 text-right">
										<a href="" class="btn btn-xs btn-info" title="Approve" target="_blank" ><span class="fa fa-thumbs-o-up"></span></a>
										<a href="" class="btn btn-xs btn-danger" title="Disapprove" target="_blank" ><span class="fa fa-thumbs-o-down"></span></a> 
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-md-12">
										<textarea name="" id="" class="my-textarea btn-block" rows="2" placeholder="Comment or notes here..."></textarea>
									</div>
								</div>
							</div> 
							</div> 
							<div class="col-md-6">
								<div class="form-group mt-4">
									<button type="submit" class="btn btn-lg btn-block btn-success">Submit</button>
									<button type="button" class="btn btn-lg btn-block btn-secondary" data-dismiss="modal" aria-hidden="true" >Cancel</button>
								</div>
							</div>
						</div>
      </div>
    </div>
			  
<script>
$(document).on("click", ".openModal", function () {
     var myId = $(this).data('id');
     var sname = $(this).data('surname');
     var fname = $(this).data('firstname');
    var middle = $(this).data('middle');
    var nbi = $(this).data('nbi');
    var medcert = $(this).data('medcert');
    var taxcerts = $(this).data('taxcerts');
    var parentTax = $(this).data('taxcertp');
    var Evaluate = $(this).data('placement');
    var Resume = $(this).data('resume');
     $(".modal-body #view-id-num").val( myId );
     $(".modal-body #view-s-name").val( sname );
     $(".modal-body #view-f-name").val( fname );
     $(".modal-body #view-m-name").val( middle );
	 var url = "<?php echo base_url(); ?>";
	 nbi1 = document.getElementById('view-nbi');
     nbi1.setAttribute("href",url.concat(nbi) + ".jpg" );
	 med = document.getElementById('view-medcert');
     med.setAttribute("href",url.concat(medcert) + ".jpg" );

    Stax = document.getElementById('view-taxcerts');
    Stax.setAttribute("href",url.concat(taxcerts) + ".jpg" );
   
    Ptax = document.getElementById('view-PTax');
    Ptax.setAttribute("href",url.concat(parentTax) + ".jpg" );

    Eval = document.getElementById('view-eSHEET');
    Eval.setAttribute("href",url.concat(Evaluate) + ".jpg" );


    Resume1 = document.getElementById('view-viewResume');
    Resume1.setAttribute("href",url.concat(Resume) + ".pdf" );

   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>ficemailcon/Student_Status",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
     
         var data=JSON.parse(msg);
         //alert(data[0]['Guidelines']);
         if(data[0]['NBI'] == 'Approved'){
         $("#vNBI").html('Approved');
         $("#vNBI").removeClass("btn-danger");
         $("#vNBI").addClass("btn-success");
         $("#vNBI").addClass("btn-success");
          $("#vNBI").attr("disabled", "disabled");
         }
        if(data[0]['Medical_Certificate'] == 'Approved'){
         $("#vMED").html('Approved');
         $("#vMED").removeClass("btn-danger");
         $("#vMED").addClass("btn-success");
         $("#vMED").addClass("btn-success");
          $("#vMED").attr("disabled", "disabled");
         }

           if(data[0]['Tax_Certificate_Student'] == 'Approved'){
         $("#vSTAX").html('Approved');
         $("#vSTAX").removeClass("btn-danger");
         $("#vSTAX").addClass("btn-success");
         $("#vSTAX").addClass("btn-success");
          $("#vSTAX").attr("disabled", "disabled");
         }

        if(data[0]['Tax_Certificate_Parent'] == 'Approved'){
         $("#vPTAX").html('Approved');
         $("#vPTAX").removeClass("btn-danger");
         $("#vPTAX").addClass("btn-success");
         $("#vPTAX").addClass("btn-success");
          $("#vPTAX").attr("disabled", "disabled");
         }

         if(data[0]['TUP_Evaluation_Sheet'] == 'Approved'){
         $("#vESHEET").html('Approved');
         $("#vESHEET").removeClass("btn-danger");
         $("#vESHEET").addClass("btn-success");
         $("#vESHEET").addClass("btn-success");
          $("#vESHEET").attr("disabled", "disabled");
         }
          

        if(data[0]['Resume'] == 'Approved'){
         $("#vRESUME").html('Approved');
         $("#vRESUME").removeClass("btn-danger");
         $("#vRESUME").addClass("btn-success");
         $("#vRESUME").addClass("btn-success");
          $("#vRESUME").attr("disabled", "disabled");
         }


     }
   
    });
    
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


$(document).ready(function(){
   $("#vNBI").click(function(){
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myNBI",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' NBI approved!');
          }
          else{
            alert(msg);
          }
     }
    });
    });
  });

//med

$(document).ready(function(){
   $("#vMED").click(function(){
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myMED",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Medical Certificate approved!');
          }
          else{
            alert(msg);
          }
     }
    });
    });
  });
// student tax

$(document).ready(function(){
   $("#vSTAX").click(function(){
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_mySTAX",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Student Tax Certificate approved!');
          }
          else{
            alert(msg);
          }
     }
    });
    });
  });
// parent tax

$(document).ready(function(){
   $("#vPTAX").click(function(){
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myPTAX",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Parent Tax Certificate approved!');
          }
          else{
            alert(msg);
          }
     }
    });
    });
  });

// Evaluation sheet
$(document).ready(function(){
   $("#vESHEET").click(function(){
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myESHEET",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Evaluation Sheet approved!');
          }
          else{
            alert(msg);
          }
     }
    });
    });
  });
//resume
$(document).ready(function(){
   $("#vRESUME").click(function(){
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myResume",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Resume approved!');
          }
          else{
            alert(msg);
          }
     }
    });
    });
  });


</script>
