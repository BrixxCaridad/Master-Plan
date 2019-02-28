<?php $this->load->view('include/navbar2');?>

<title>SITA | IRJP Dashboard</title>
<div class="content">
      <center>
        <h2 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">
        Technological University of the Philippines - Manila
        </h2>
      </center>
      
      <center>
        <p style="color: black; font-size: 28px">
          <b>SITA : SIT ASSISTANT</b>
        </p>
      </center>
      
      <hr style="background-color: #800000">
      
      <br>
      
      <p id="demo"></p>
      <script>
        document.getElementById("demo").innerHTML = Date();
      </script>
      

  <!-- Modal -->
  
 
      <br>

      <div class="table-responsive" style="font-size: 14px">          
        <table class="table">
          
          <thead style="color: #800000">
            <th colspan="10" style="background-color: #ffe8e8; color: #800000; font-size: 20px; text-align: center">LIST OF ACCREDITED COMPANIES</th>
            <table class="table table-hover" id="dataTables-user-list">
            <tr>
              <th>COMPANY NAME</th>
              
             <!--  <th>NATURE OF BUSINESS</th>
 -->           
               <th>COMPANY TEL.</th>
               <th>COMPANY ADDRESS</th>
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
						
						
						<td><?php echo $row->comp_name; ?> </td>
						<td><?php echo $row->comp_telno; ?> </td>
						<td><?php echo $row->comp_add; ?> </td>
						
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
	 
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add Company</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title" style="text-align:left;">Add Company</h4>
		  
		  
		</div>
       <div class="modal-body">
	   
               
                    
                      <form method="post" id="insert_form">
                          <label>Company Name</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input class="form-control" placeholder="Company" id="comp_name" name="comp_name" type="text" autofocus>
						<br>
                     
                
               
                          <label>Contact Number</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input class="form-control" placeholder="Contact" id="comp_telno" name="comp_telno" type="text" >
						<br>
                
                          <label>Address</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input class="form-control" placeholder="Address" id="comp_add" name="comp_add" type="text" >
                      <br>
               
				  
                          <label>Nature of Business</label>&nbsp;&nbsp;
                          <select style="margin-top: 0px; height: 35px;" name="nature" id="nature" class="form-control" >
                              <?php 
		  
		   
				foreach ($display_company->result() as $rows)
				{?>
				
				<option><?php echo $rows->nature ?></option>
					
				<?php
				}
		   
		   ?>
			
		    
                          </select> 
						  
						  <br>
						  
						 
						  </form>
						  
                     
                  <div class="row">
                    <div class="col-lg-12">
                 <!-- <div class="form-group">       
                                   <?php 
                            //foreach($user as $row): endforeach; 
                                ?>
                                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#company" onclick="add_business_popup();">+</button>

                              <div id="company" class="collapse">
                                  <table class="table table-hover" id="dataTables-user-list">
                                    <thead>
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Add New - Nature of Business</label> &nbsp;&nbsp;
                                                <!-- <label class="error" id="error_name"> field is required.</label>
                                                <label class="error" id="error_name2"> industry already exists.</label> 
                                                <input class="form-control" id="nature_business" name="nature_business" type="text" >
                                            </div> 
                                          </div>  
                                      </div>
                                    </thead>
                                    <tbody id="contact-body">  

                                    </tbody>
                                    </table>
                              </div>
                                <?php 
                        ?>
                      </div> -->
                    </div>
                </div>
              </div>
        <div class="modal-footer">
		<button id="newCompanySubmit" name="submit" type="button" class="btn btn-info">SUBMIT</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
		
        </div>
      </div>
      
    </div>
  </div>
  

	
   
</div>







  
  






<script src="<?=base_url()?>sita/assets/js/view/irjp_list.js"></script>
<script type="text/javascript">
      var acc = document.getElementsByClassName("accordionM");
    var i;

      for (i = 0; i < acc.length; i++) {
          acc[i].onclick = function(){
              this.classList.toggle("active");
              this.nextElementSibling.classList.toggle("show");
          }
      }
    </script>