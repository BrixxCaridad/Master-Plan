
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
		   												data-taxcertp="'.$r['Tax_Certificate_Parent'].'" data-resume="'.$r['Resume'].'" data-regform="'.$r['Registration_Form'].'">View Student Requirements</a></td>';
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
                  <p>NBI</p>
									<!--<label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
									<label class="error" id="edit-error_email3"> invalid email adress.</label> -->
									<div class="row">
										<div class="col-md-6">
											<a id="view-nbi" name="view-nbi" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" id="up-nbi" class="btn btn-xs btn-info submit-nbi" title="Approve" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" id="dis-NBI" class="btn btn-xs btn-danger" title="Disapprove" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="com-nbi" class="my-textarea btn-block comment" rows="2" placeholder="Comment or notes here..."></textarea>
                      <button id="nbi-button" type="submit" class="btn btn-lg btn-block btn-success submitBTN submit-nbi">Submit</button>
										</div>
									</div>
									<!-- <button id= "vNBI" type="button" class="btn btn-danger">Verify</button>                            -->
								</div> 
							</div>							
							<div class="col-lg-6">
								<div class="form-group">
                  <p>Medical Certificate </p>
									<!-- <label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
									<label class="error" id="edit-error_email3"> invalid email adress.</label> -->
									<div class="row ">
										<div class="col-md-6">
											<a id="view-medcert" name="view-medcert" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info submit-med" id="up-med" title="Approve"><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" id="dis-med" title="Disapprove" ><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="com-med" class="my-textarea btn-block comment" rows="2" placeholder="Comment or notes here..."></textarea>
                        <button id="med-button" type="submit" class="btn btn-lg btn-block btn-success submitBTN submit-med">Submit</button>
										</div>
									</div>
                  <!-- <button id= "vMED" type="button" class="btn btn-danger">Verify</button>  -->
                </div> 
              </div>
						</div>
						<div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <p>Student Tax Certificate  </p>
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
											<a href="" class="btn btn-xs btn-info submit-stax" id="up-stax" title="Approve" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger " id="dis-stax" title="Disapprove" ><span class="fa fa-thumbs-o-down"></span></a> 
                        
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="com-stax" class="my-textarea btn-block comment" rows="2" placeholder="Comment or notes here..."></textarea>
                      <button id="stax-button" type="submit" class="btn btn-lg btn-block btn-success submitBTN submit-stax">Submit</button>
										</div>
									</div>
								</div> 
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                  <p>Parent Tax Certificate</p>
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
											<a href="" class="btn btn-xs btn-info submit-ptax" id="up-ptax" title="Approve"><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" class="btn btn-xs btn-danger" title="Disapprove" id="dis-ptax"><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="com-ptax" class="my-textarea btn-block comment" rows="2" placeholder="Comment or notes here..."></textarea>
                      <button id="ptax-button" type="submit" class="btn btn-lg btn-block btn-success submitBTN submit-ptax">Submit</button>
										</div>
									</div>
								</div> 
							</div>
						</div>
						<div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <p>TUP Evaluation Sheet</p>
                  <!--<label class="error" id="edit-error_email"> field is required.</label>
                  <label class="error" id="edit-error_email2"> email has already exist.</label>
                  <label class="error" id="edit-error_email3"> invalid email adress.</label> -->
                  <!-- <a id= "view-eSHEET" name="view-esheet" target="_blank" ><small><span class="fa fa-external-link"></span> View</small></a> 
                  <button id="vESHEET"  type="button"  class="btn btn-danger">Verify</button>                             -->
									<div class="row">
										<div class="col-md-6">
											<a id= "view-eSHEET" name="view-esheet" target="_blank"><span class="fa fa-external-link"></span> View</a> 
										</div>
										<div class="col-md-6 text-right">
											<a href="" class="btn btn-xs btn-info submit-eval" id="up-eval" title="Approve" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" id="dis-eval" class="btn btn-xs btn-danger" title="Disapprove" ><span id="icon-nbi"  class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">
											<textarea name="" id="com-eval" class="my-textarea btn-block comment" rows="2" placeholder="Comment or notes here..."></textarea>
                      <button id="eval-button" type="submit" class="btn btn-lg btn-block btn-success submitBTN submit-eval">Submit</button>
										</div>
									</div>
								</div> 
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <p>Resume </p>
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
											<a href="" id="up-resume" class="btn btn-xs btn-info submit-resume" title="Approve" ><span class="fa fa-thumbs-o-up"></span></a>
											<a href="" id="dis-resume" class="btn btn-xs btn-danger" title="Disapprove"><span class="fa fa-thumbs-o-down"></span></a> 
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-md-12">

											<textarea name="" id="com-resume" class="my-textarea btn-block comment" rows="2" placeholder="Comment or notes here..."></textarea>
                      <button id="resume-button" type="submit" class="btn btn-lg btn-block btn-success submitBTN submit-resume">Submit</button>
										</div>
									</div>
                </div> 
							</div> 
						</div>
						<div class="row">
							<div class="col-md-6">
							<div class="form-group">
								<p>Registration Form </p>
								<!--  <label class="error" id="edit-error_email"> field is required.</label>
								<label class="error" id="edit-error_email2"> email has already exist.</label>
								<label class="error" id="edit-error_email3"> invalid email adress.</label> -->
								<!-- <a id="view-viewResume" name="view-medcert" target="_blank"><small><span class="fa fa-external-link"></span> View</small></a>
	 							<button id="vRESUME"  type="button"  class="btn btn-danger">Verify</button>   -->
								<div class="row">
									<div class="col-md-6">
										<a id="view-Regform" name="view-medcert" target="_blank" ><span class="fa fa-external-link"></span> View</a> 
									</div>
									<div class="col-md-6 text-right">
										<a href=""  id="up-rform" class="btn btn-xs btn-info submit-rform" title="Approve"  ><span class="fa fa-thumbs-o-up"></span></a>
										<a href="" id="dis-rform" class="btn btn-xs btn-danger" title="Disapprove"  ><span class="fa fa-thumbs-o-down"></span></a> 
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-md-12">
										<textarea name="" id="com-rform" class="my-textarea btn-block comment" rows="2" placeholder="Comment or notes here..."></textarea>
                     <button id="rform-button" type="submit" class="btn btn-lg btn-block btn-success submitBTN submit-rform">Submit</button>
									</div>
								</div>
							</div> 
							</div> 
							<div class="col-md-12">
								<div class="form-group mt-4">
									 <a  id="submitRep" href="" class="btn btn-lg btn-block btn-success">Submit</a>
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
    var Registration = $(this).data('regform');
     var data;
     $(".modal-body #view-id-num").val( myId );
     $(".modal-body #view-s-name").val( sname );
     $(".modal-body #view-f-name").val( fname );
     $(".modal-body #view-m-name").val( middle );
	 var url = "<?php echo base_url(); ?>";

 	 sub = document.getElementById('submitRep');
     sub.setAttribute("href",url.concat('requirements/submitReport/?id='+myId));

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

    form = document.getElementById('view-Regform');
    form.setAttribute("href",url.concat(Registration) + ".jpg" )

      $(".comment").hide();
      $(".submitBTN").hide();
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>ficemailcon/Student_Status",
   data: "idnum="+$("#view-id-num").val(),
   success: function(msg){
    
        data=JSON.parse(msg);
         if(data[0]['NBI'] == 'Approved'){
              
                 $("#dis-NBI").hide();
                 $(".submit-nbi").hide();
         }
         else{
               
                 $("#dis-NBI").show();
                 $("#up-nbi").show();
              
         }
        if(data[0]['Medical_Certificate'] == 'Approved'){
               
                 $("#dis-med").hide();
                 $(".submit-med").hide();
         }
         else{
               
                 $("#dis-med").show();
               $("#up-med").show();
               //  $(".submit-med").show();
         }

           if(data[0]['Tax_Certificate_Student'] == 'Approved'){
           
                 $("#dis-stax").hide();
                 $(".submit-stax").hide();
         }
         else{

                 $("#dis-stax").show();
               $("#up-stax").show();
         }

        if(data[0]['Tax_Certificate_Parent'] == 'Approved'){
           
                 $("#dis-ptax").hide();
                 $(".submit-ptax").hide();
         }
          else{
          
                 $("#dis-ptax").show();
                 $("#up-ptax").show();
          }
         if(data[0]['TUP_Evaluation_Sheet'] == 'Approved'){
                 
                 $("#dis-eval").hide();
                 $(".submit-eval").hide();
         }
         else{
       
                 $("#dis-eval").show();
               $("#up-eval").show();
         }
          

        if(data[0]['Resume'] == 'Approved'){
              
                 $("#dis-resume").hide();
                 $(".submit-resume").hide();
         }
         else{

          
                 $("#dis-resume").show();
               $("#up-resume").show();
         }

           if(data[0]['Registration_Form'] == 'Approved'){
              
                 $("#dis-rform").hide();
                 $(".submit-rform").hide();
         }
         else{
          
                 $("#dis-rform").show();
               $("#up-rform").show();
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
   $(".submit-nbi").click(function(e){
    e.preventDefault();
    var userID = $("#view-id-num").val();
    var comment = $("#com-nbi").val();

    if(comment ==''){
        var message = 'Approved';
    }
    else
    {
      var message = comment;
    }

   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myNBI",
   data:  {idnum: userID,comment: message },
  
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' NBI approved!');
              $("#com-nbi").val('');
              $("#com-nbi").hide();
              $("#nbi-button").hide();
          }
          else{
         alert($("#view-s-name").val()+' NBI Rejected!');
              $("#com-nbi").val('');
              $("#com-nbi").hide();
              $("#nbi-button").hide();
          }
     }
    });
    });
  });

//med

$(document).ready(function(){
   $(".submit-med").click(function(e){
    e.preventDefault();
    var userID = $("#view-id-num").val();
    var comment = $("#com-med").val();
    if(comment ==''){
        var message = 'Approved';
    }
    else
    {
      var message = comment;
    }
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myMED",
    data:  {idnum: userID,comment: message },
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Medical Certificate approved!');
              $("#com-med").val('');
              $("#com-med").hide();
              $("#med-button").hide();

          }
          else{
            alert($("#view-s-name").val()+' Medical Certificate Rejected!');
              $("#com-med").val('');
              $("#com-med").hide();
              $("#med-button").hide();
          }
     }
    });
    });
  });
// student tax

$(document).ready(function(){
   $(".submit-stax").click(function(e){
        e.preventDefault();
    var userID = $("#view-id-num").val();
    var comment = $("#com-stax").val();
    if(comment ==''){
        var message = 'Approved';
    }
    else
    {
      var message = comment;
    }
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_mySTAX",
   data:  {idnum: userID,comment: message },
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Student Tax Certificate approved!');
              $("#com-stax").val('');
              $("#com-stax").hide();
              $("#stax-button").hide();
             }
          else{
               alert($("#view-s-name").val()+' Student Tax Certificate Rejected!');
              $("#com-stax").val('');
              $("#com-stax").hide();
              $("#stax-button").hide();
          }
     }
    });
    });
  });
// parent tax

$(document).ready(function(){
   $(".submit-ptax").click(function(e){
         e.preventDefault();
    var userID = $("#view-id-num").val();
    var comment = $("#com-ptax").val();
    if(comment ==''){
        var message = 'Approved';
    }
    else
    {
      var message = comment;
    }
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myPTAX",
    data:  {idnum: userID,comment: message },
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Parent Tax Certificate approved!');
              $("#com-ptax").val('');
              $("#com-ptax").hide();
              $("#ptax-button").hide();
          }
          else{
               alert($("#view-s-name").val()+' Parent Tax Certificate Rejected!');
               $("#com-ptax").val('');
              $("#com-ptax").hide();
              $("#ptax-button").hide();
          }
     }
    });
    });
  });

// Evaluation sheet
$(document).ready(function(){
   $(".submit-eval").click(function(e){
    e.preventDefault();
    var userID = $("#view-id-num").val();
    var comment = $("#com-eval").val();

    if(comment ==''){
        var message = 'Approved';
    }
    else
    {
      var message = comment;
    }
   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myESHEET",
   data:  {idnum: userID,comment: message },
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Evaluation Sheet approved!');
               $("#com-eval").val('');
              $("#com-eval").hide();
              $("#eval-button").hide();
          }
          else{
              alert($("#view-s-name").val()+' Evaluation Sheet Denied!');
              $("#com-eval").val('');
              $("#com-eval").hide();
              $("#eval-button").hide();
          }
     }
    });
    });
  });
//resume
$(document).ready(function(){
   $(".submit-resume").click(function(e){
      e.preventDefault();
     
    var userID = $("#view-id-num").val();
    var comment = $("#com-resume").val();
    if(comment ==''){
        var message = 'Approved';
    }
    else
    {
      var message = comment;
    }

   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myResume",
   data:  {idnum: userID,comment: message },
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Resume approved!');
               $("#com-resume").val('');
              $("#com-resume").hide();
              $("#resume-button").hide();
          }
          else{
          alert($("#view-s-name").val()+' Resume Rejected!');
               $("#com-resume").val('');
              $("#com-resume").hide();
              $("#resume-button").hide();
          }
     }
    });
     });
  });

$(document).ready(function(){
   $(".submit-rform").click(function(e){
      e.preventDefault();
    var userID = $("#view-id-num").val();
    var comment = $("#com-rform").val();
    if(comment ==''){
        var message = 'Approved';
    }
    else
    {
      var message = comment;
    }

   $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>fic/check_myRform",
   data:  {idnum: userID,comment: message },
   success: function(msg){
          if(msg=="true")
          { 
              alert($("#view-s-name").val()+' Registration Form approved!');
              $("#com-rform").val('');
              $("#com-rform").hide();
              $("#rform-button").hide();
          }
          else{
          alert($("#view-s-name").val()+' Registration Form Rejected!');
               $("#com-rform").val('');
              $("#com-rform").hide();
              $("#rform-button").hide();
          }
     }
    });
    });
  });











//show hide comment box


$(document).ready(function(){


    $("#dis-NBI").click(function(e){
        e.preventDefault();
      $("#com-nbi").toggle();
      $("#nbi-button").toggle();
    });

    $("#dis-med").click(function(e){
        e.preventDefault();
      $("#com-med").toggle();
      $("#med-button").toggle();
    });

      $("#dis-stax").click(function(e){
        e.preventDefault();
      $("#com-stax").toggle();
      $("#stax-button").toggle();
    });

      $("#dis-ptax").click(function(e){
        e.preventDefault();
      $("#com-ptax").toggle();
      $("#ptax-button").toggle();
    });

      $("#dis-eval").click(function(e){
        e.preventDefault();
      $("#com-eval").toggle();
      $("#eval-button").toggle();
    });
     $("#dis-resume").click(function(e){
        e.preventDefault();
      $("#com-resume").toggle();
      $("#resume-button").toggle();
    });

    
       $("#dis-rform").click(function(e){
        e.preventDefault();
      $("#com-rform").toggle();
      $("#rform-button").toggle();
    });

});


</script>
