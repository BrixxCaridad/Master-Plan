
<div class="col-md-8">
<title>SITA | Requirements</title>

  
      
     <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
    
      	<div class="dashtitle">
	      	 <center><h3 style="color: #800000"><b>REQUIREMENTS FOR SIT APPLICATION</b></h3></center>
	    </div>
  	  
     
      <br>
      <h4 class="header4"><b>Pre-Deployment Stage</b></h4>
      	<hr style="background-color: #800000">
      	<p class="supporting"><b>NOTE: All forms/documents in this section must be submitted to the Faculty-in-Charge before deployment to training station.</b></p><br>
        <button class="accordion">Guidelines for Student-Trainees</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/guidelines.png" alt="guidelines" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
				  	<div class="col-md-12" style="padding: 20px">
						  <p><b>DESCRIPTION:</b> Contains guidelines that need to be observed and followed by the student-trainee.</p><br>
						  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
						  <p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
						  <div class="col-md-5">
				    		  <a href ="" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-print" style="padding-right: 4px"></span>Print</a>
				    	  </div>
				    </div>
				</div>
			</div>
		<button class="accordion">Waiver</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/waiver.png" alt="waiver" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> An agreement between the student-trainee and the Technological University of the Philippines - Manila.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge, College Department Head</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Student-Trainee, Faculty-in-Charge, College Department Head</p><br>
					   <!-- <p><i><b>*NOTE:</b> Print this form after filling it out then place thumbmarks on the boxes provided. Upload a scanned copy of the document.</i></p><br> -->
					  <div class="col-md-12" style="padding-top: 50px">
			    		  <a href="editor_waiver" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-pencil" style="padding-right: 4px"></span>Fill Out Form</a>
			    	  </div>
			    	  <!-- <input style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> -->
			    	</div>
		    	</div>
			</div>

		<button type ="button" class="accordion">Application for SIT Form</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/appsit.png" alt="Application for SIT (FORM)" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> A letter addressed to the IRJP Director which contains student-trainee's personal data, academic data, and preference for placement.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Student-Trainee, Faculty-in-Charge, IRJP Director</p><br>
			    		  <a href="editor_appsit" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-pencil" style="padding-right: 4px"></span>Fill Out Form</a>
			    	</div>
			    </div>
			</div>
       <?=form_open_multipart('Requirements/uploadReq', 'id="SubmitReq"');?>
		<button class="accordion" type ="button" >NBI Clearance</button>
			<div class="panel">
			 
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/nbi.jpg" alt="NBI Clearance" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> A certificate issued by the National Bureau of Investigation which proves that the student-trainee applied for NBI Clearance. It contains the NBI ID Number, validity of the certificate, full name, address, date and place of birth and citizenship of the applicant, purpose for application, and remarks.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
					  <p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
					
			    		  <input name="nbi" style="margin:auto;" class="uploadfile btn-md pull-right" id="myNBI" type="file"> 
			    	 

			    	</div>
			    </div>
			</div>

		<button type ="button" class="accordion">Medical Clearance</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/med.png" alt="Medical Certificate" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> A certificate issued by the university clinic to certify that the student-trainee has been examined and found medically and physically fit or unfit.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Clinic Representative</p><br>
					  <p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
			    		  <input name="medCert" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> 
						    
			    		  </div>
			    </div>
			</div>
 
		<button type="button" class="accordion">Personal Community Tax Certificate</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/personalctc.jpg" alt="Personal CTC" style="height: 250px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> Also known as <i>cedula</i>, a community tax certificate is issued to every individual that has reached the age of majority and upon payment of the community tax. It is considered a primary form of identification in the Philippines, alongside the driver's license and the passport, and is one of the closest, single documents the country has to a national system of identification.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
					  <p><i><b>*NOTE:</b> Make sure that your CTC has been signed by the Municipal/City Treasurer. Thumbmarks should be affixed on your CTC. You must submit a scanned copy of this document.</i></p><br>
			    		  <input name="CTax" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> 
			    	</div>
			    </div>
			</div>

		<button type="button" class="accordion">Community Tax Certificate of Parent OR Guardian</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/pgctc.jpg" alt="CTC of Parent/Guardian" style="height: 250px; width: 350px">
			  	</div>
				<div class="col-md-6">
					<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> Also known as <i>cedula</i>, a community tax certificate is issued to every individual that have reached the age of majority and upon payment of the community tax. It is considered a primary form of identification in the Philippines, alongside the driver's license and the passport, and is one of the closest, single documents the country has to a national system of identification.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
					  <p><i><b>*NOTE:</b> CTC of Guardian must only be submitted if CTC of parent is unavailable. Make sure that the CTC has been signed by the Municipal/City Treasurer. Thumbmarks should be affixed on the CTC. You must submit a scanned copy of this document.</i></p><br>
			    		  <input name="GuardianTax" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> 
			    	</div>
			    </div>
			</div>

		<button type="button" class="accordion">TUP Evaluation Sheet</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/tupeval.jpg" alt="TUP Evaluation Sheet" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> The TUP Evaluation Sheet contains the list of subjects that you have undertaken during your stay in the university and your corresponding grades for each subject.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> University Registrar/Evaluator</p><br>
					  <p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
			    		  <input name="Evaluation" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> 
			    	</div>
			    </div>
			</div>

		<button type ="button" class="accordion">Resume</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/resume.png" alt="resume" style="height: 500px; width: 450px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> Your resume should contain your picture, educational background, contact details, qualifications. You must sign this document.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Student-Trainee</p><br>
			    		  <input name ="resume" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> </div>
			    </div>
			</div>

		<button type ="button" class="accordion">Registration Form</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/regform.jpg" alt="Registration Form" style="height: 400px; width: 500px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> Proof that the student-trainee is enrolled in the university. It contains the subjects in which the student-trainee is currently enrolled into. The student-trainee must submit the registration form for the current semester.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Student-Trainee, University Registrar/Evaluator</p><br>
					  <p><i><b>*NOTE:</b> You must submit a scanned copy of this document.</i></p><br>
			    		  <input name="RForm" style="margin:auto;" class="uploadfile btn-md pull-right" type="file"> 
			    	</div>
			    </div>
			</div>
</form>
		<button type ="button" class="accordion">Request for Placement Letter</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/rqplacement.png" alt="Request for Placement Letter" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> A request for placement letter must be submitted to the IRJP Director. It contains the name/s of the student-trainee/s, course, number of required hours, and company details.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Faculty-in-Charge</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Faculty-in-Charge</p><br>
			    		  <a href="editor_reqplacement" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-pencil" style="padding-right: 4px"></span>Fill Out Form</a>
			    	</div>
			    </div>
			</div>
		      
		<button type ="button" class="accordion">Placement Letter</button>
			<div class="panel">
				<div class="col-md-6" style="padding: 20px">
			  		<img src="assets/img/appsit.jpg" alt="Placement Letter" style="height: 500px; width: 350px">
			  	</div>
			  	<div class="col-md-6">
			  		<div class="col-md-12" style="padding: 20px">
					  <p><b>DESCRIPTION:</b> The placement letter is a document submitted to the company and to the faculty-in-charge as proof of deployment.</p><br>
					  <p><b>MUST BE SUBMITTED TO:</b> Company HR Representative, IRJP Director</p><br>
					  <p><b>MUST BE SIGNED BY:</b> Company HR Representative, IRJP Director</p><br>
                         
        			
			    		  <a href="upload" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-pencil" style="padding-right: 4px"></span>Fill Out Form</a>
			    	</div>
			    </div>
			</div>
			  
			<button class ="col-md-12 btn btn-success"	type="submit" form="SubmitReq" value="Submit">Submit</button>
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

