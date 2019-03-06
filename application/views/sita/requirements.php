<?php print_r($MyReq); ?>
<div class="main-main-container">
	<div class="page-title">
        <h4 class="text-bold"><b><span class="fa fa-copy"></span> REQUIREMENTS FOR SIT APPLICATION<small></small></b></h4>
    </div>
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-12">
				<h4><b>Pre-Deployment Stage</b></h4>
				<p><small><b>NOTE:</b> All forms/documents in this section must be submitted to the Faculty-in-Charge before deployment to training station.</small></b></p>
				<hr style="background-color: #800000">
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<h4><span class="fa fa-copy"></span> <b>To Upload Forms</b></h4>
						<p class="no-lh"><small>These are non-fillable forms. These requirements need to be scanned and uploaded here.
							Click 'Submit All' to submit all of To Upload Forms uploaded.
						</small></b></p>
					</div>
				</div>
				<br/>
				<br/>
		 <?=form_open_multipart('Requirements/uploadReq', 'id="SubmitReq"');?>

				<div class="row">
					<div class="col-md-12">
						<button class="upload-toggle" type="button" <?=($MyReq[0]['NBI']=='Approved'?'disabled':'')?>>NBI Clearance</button>
						<div class="panel">
							<div class="row">
								<div class="col-md-12">
									
								 <input name="nbi" style="margin:auto;" class="btn-block" id="myNBI" type="file">
									<hr/>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-3" style="">
			  						<img src="assets/img/nbi.jpg" alt="NBI Clearance" style="width: 100%">
			  					</div>
			  					<div class="col-md-9">
					  				<p><b>DESCRIPTION:</b> A certificate issued by the National Bureau of Investigation which proves that the student-trainee applied for NBI Clearance. It contains the NBI ID Number, validity of the certificate, full name, address, date and place of birth and citizenship of the applicant, purpose for application, and remarks.</p><br>
					  				<p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  				<p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
					  				<p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
					  				
								</div>
									<textarea name=""  class="my-textarea btn-block comment" rows="2" placeholder="<?php echo $MyReq['0']['NBI'] ?>" disabled></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="upload-toggle" type="button" <?=($MyReq[0]['Medical_Certificate']=='Approved'?'disabled':'')?> >Medical Clearance</button>
						<div class="panel">
							<div class="row">
								<div class="col-md-12">
									<input name="medCert" style="margin:auto;" class="btn-block" type="file"> 
								<!-- 	<input type="file" name="" id="medical" class="btn-block"> -->
									<hr/>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<img src="assets/img/med.png" alt="Medical Certificate" style="width: 100%">
								</div>
								<div class="col-md-9">
									<p><b>DESCRIPTION:</b> A certificate issued by the university clinic to certify that the student-trainee has been examined and found medically and physically fit or unfit.</p><br>
					  				<p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  				<p><b>MUST BE SIGNED BY:</b> Clinic Representative</p><br>
					  				<p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
					  				
								</div>
								<textarea name=""  class="my-textarea btn-block comment" rows="2" placeholder="<?php echo $MyReq['0']['Medical_Certificate'] ?>" disabled></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="upload-toggle" type="button" <?=($MyReq[0]['Tax_Certificate_Student']=='Approved'?'disabled':'')?>>Personal Community Task Certificate</button>
						<div class="panel">
							<div class="row">
								<div class="col-md-12">
									<!-- <input  style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> --> 
									<input type="file" name="CTax" id="ctc" class="btn-block">
									<hr/>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<img src="assets/img/personalctc.jpg" alt="Personal CTC" style="width: 100%">
								</div>
								<div class="col-md-9">
									<p><b>DESCRIPTION:</b> Also known as <i>cedula</i>, a community tax certificate is issued to every individual that has reached the age of majority and upon payment of the community tax. It is considered a primary form of identification in the Philippines, alongside the driver's license and the passport, and is one of the closest, single documents the country has to a national system of identification.</p><br>
					  				<p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  				<p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
					  				<p><i><b>*NOTE:</b> Make sure that your CTC has been signed by the Municipal/City Treasurer. Thumbmarks should be affixed on your CTC. You must submit a scanned copy of this document.</i></p>
					  				<br>
					  				
								</div>
								<textarea name=""  class="my-textarea btn-block comment" rows="2" placeholder="<?php echo $MyReq['0']['Tax_Certificate_Student'] ?>" disabled></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="upload-toggle" type="button" <?=($MyReq[0]['Tax_Certificate_Parent']=='Approved'?'disabled':'')?> >Community Task Certificate of Parent/Guardian</button>
						<div class="panel">
							<div class="row">
								<div class="col-md-12">
									<!-- <input name="GuardianTax" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> --> 
									<input type="file" name="GuardianTax" id="ctcparent" class="btn-block">
									<hr/>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<img src="assets/img/pgctc.jpg" alt="CTC of Parent/Guardian" style=" width: 100%">
								</div>
								<div class="col-md-9">
									<p><b>DESCRIPTION:</b> Also known as <i>cedula</i>, a community tax certificate is issued to every individual that have reached the age of majority and upon payment of the community tax. It is considered a primary form of identification in the Philippines, alongside the driver's license and the passport, and is one of the closest, single documents the country has to a national system of identification.</p><br>
					  				<p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  				<p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
					  				<p><i><b>*NOTE:</b> CTC of Guardian must only be submitted if CTC of parent is unavailable. Make sure that the CTC has been signed by the Municipal/City Treasurer. Thumbmarks should be affixed on the CTC. You must submit a scanned copy of this document.</i></p><br>
							
								</div>
		<textarea name=""  class="my-textarea btn-block comment" rows="2" placeholder="<?php echo $MyReq['0']['Tax_Certificate_Parent'] ?>" disabled></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="upload-toggle" type="button" <?=($MyReq[0]['Resume']=='Approved'?'disabled':'')?> >Resume</button>
						<div class="panel">
							<div class="row">
								<div class="col-md-12">
									<!-- <input name ="resume" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> -->
									<input type="file" name ="resume" id="resume" class="btn-block">
									<hr/>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
									<img src="assets/img/resume.png" alt="resume" style="width: 100%">
								</div>
								<div class="col-md-9">
									<p><b>DESCRIPTION:</b> Your resume should contain your picture, educational background, contact details, qualifications. You must sign this document.</p><br/>
									<p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br/>
					  				<p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br/>
					  					
								</div>
									<textarea name=""  class="my-textarea btn-block comment" rows="2" placeholder="<?php echo $MyReq['0']['Resume'] ?>" disabled></textarea>
							</div>
						</div>
					</div>
			
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="upload-toggle" type="button" <?=($MyReq[0]['Registration_Form']=='Approved'?'disabled':'')?> >Registration Form</button>
						<div class="panel">
							<div class="row">
								<div class="col-md-12">
								<!-- 	<input name="RForm" style="margin:auto;" class="uploadfile btn-md pull-right" type="file">  -->
									<input type="file" name="RForm" id="regform" class="btn-block">
									<hr/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<img src="assets/img/regform.jpg" alt="Registration Form" style="width: 100%">
								</div>
								<div class="col-md-6">
									<p><b>DESCRIPTION:</b> Proof that the student-trainee is enrolled in the university. It contains the subjects in which the student-trainee is currently enrolled into. The student-trainee must submit the registration form for the current semester.</p><br>
					  				<p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  				<p><b>MUST BE SIGNED BY:</b> Student-Trainee, University Registrar/Evaluator</p><br>
					  				<p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
					  				
								</div>
								<textarea name=""  class="my-textarea btn-block comment" rows="2" placeholder="<?php echo $MyReq['0']['Registration_Form'] ?>" disabled></textarea>
							</div>
							<br>
						</div>
					</div>
				</div>


					<div class="row">
					<div class="col-md-12">
						<button class="upload-toggle" type="button" <?=($MyReq[0]['TUP_Evaluation_Sheet']=='Approved'?'disabled':'')?>>Evaluation Form</button>
						<div class="panel">
							<div class="row">
								<div class="col-md-12">
							<!-- 	<input name="Evaluation" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> --> 
									<input type="file" name="Evaluation" id="regform" class="btn-block">
									<hr/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<img src="assets/img/tupeval.jpg" alt="TUP Evaluation Sheet" style="height: 500px; width: 350px">
								</div>
								<div class="col-md-6">
									 <p><b>DESCRIPTION:</b> The TUP Evaluation Sheet contains the list of subjects that you have undertaken during your stay in the university and your corresponding grades for each subject.</p><br>
								 		<p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
								 		 <p><b>MUST BE SIGNED BY:</b> University Registrar/Evaluator</p><br>
								  		<p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
								  		
								</div>
										<textarea name=""  class="my-textarea btn-block comment" rows="2" placeholder="<?php echo $MyReq['0']['Resume'] ?>" disabled></textarea>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<!-- 	<button class ="col-md-12 btn btn-success"	type="submit" form="SubmitReq" value="Submit">Submit</button> -->
					<?php if($MyReq[0]['NBI']=='Approved' && $MyReq[0]['Medical_Certificate']=='Approved' && $MyReq[0]['Tax_Certificate_Student']=='Approved' && $MyReq[0]['Tax_Certificate_Parent']=='Approved' && $MyReq[0]['TUP_Evaluation_Sheet']=='Approved' && $MyReq[0]['Resume']=='Approved' &&$MyReq[0]['Registration_Form']=='Approved'){

								}
								else{

							echo '<button type="submit" class="btn btn-block btn-lg btn-success" form="SubmitReq" value="Submit" id="submitreq">Submit All</button>';
								}
							?>
						
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				</form>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<h4><span class="fa fa-copy"></span> <b>Fill and Print Forms</b></h4>
						<p class="no-lh"><small>Fill up each forms. Click 'Print'. 
							Then, personally submit the printed form to your Faculty-In-Charge.</small></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<br/><br/>
						<ul class="fillandprint">
							<li class="">
								<a href="<?php echo base_url('forms/guideline');?>" class="text-gray"><span class="fa fa-circle"></span>&nbsp;Guidelines for Student-Trainees</a>
							</li>
							<li class="">
								<a href="<?php echo base_url('forms/waiver');?>" class="text-gray"><span class="fa fa-circle"></span>&nbsp;Waiver</a>
							</li>
							<li class="">
								<a href="<?php echo base_url('forms/application');?>" class="text-gray"><span class="fa fa-circle"></span>&nbsp;Application for SIT</a>
							</li>
							<li class="">
								<a href="<?php echo base_url('forms/reqplacement');?>" class="text-gray"><span class="fa fa-circle"></span>&nbsp;Request for Placement Letter</a>
							</li>
							<li class="">
								<a href="" class="text-gray"><span class="fa fa-circle"></span>&nbsp;Placement Letter</a>
							</li>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>    
</div>
<script type="text/javascript">
  		var acc = document.getElementsByClassName("accordion");
		var i;

			for (i = 0; i < acc.length; i++) {
    			acc[i].onclick = function(){
        			this.classList.toggle("active");
        			this.nextElementSibling.classList.toggle("show");
    			}
			}
</script>
<script type="text/javascript">
  		var uploadtoggle = document.getElementsByClassName("upload-toggle");
  		var uploaddiv = document.getElementsByClassName("upload-div");
		var i;

			for (i = 0; i < uploadtoggle.length; i++) {
    			uploadtoggle[i].onclick = function(){
        			this.classList.toggle("active");
        			this.nextElementSibling.classList.toggle("show");
    			}
			}
</script>
