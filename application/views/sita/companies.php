<div class="main-main-container">
	<div class="page-title">
    <h4 class="text-bold"><b><span class="fa fa-briefcase"></span> LIST OF ACCREDITED COMPANIES<small></small></b></h4>
  </div>
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-10 col-md-offset-1">
				<div class="search">
          <form class="search-form">
            <input id="myInput" type="text" name="comp_query" placeholder="Search for companies, job specifications, or location" onkeyup="companies()">
            <input type="submit" value="Search">
          </form>
        </div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
				<?php 
					if(!isset($_SESSION['account_type'])){
        			$this->session->set_userdata('account_type','Student');
    			}
    			if($_SESSION['account_type']=='IRJP'):?>
      			<div class="col-md-12 text-right" style="padding-top: 5px;">
        			<button type="button" class="btn btn-cmaroon btn-md" data-toggle="modal" data-target="#myModal">Add Company</button>
      			</div>
  				<?php endif;?>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
			<div class="table-responsive" style="font-size: 14px">          
        <table class="table  table-hover" id="dataTables-user-list">
          <thead style="background-color: #e4e4e4">
            <tr>
              <th>COMPANY NAME</th>
              <th>COMPANY TEL.</th>
              <th>COMPANY ADDRESS</th>
              <th>COMPANY CODE</th>
              <th>TYPE</th>
            </tr>
          </thead>
          <tbody>
      			<?php echo form_open("companies2/display_company"); ?>
           	<?php 
       					if ($display_company->num_rows() > 0){
        					foreach ($display_company->result() as $row)
        		{?>
          	<tr>
            	<td><?php echo $row->Company_Name; ?> </td>
            	<td><?php echo $row->Company_Phone; ?> </td>
            	<td><?php echo $row->Company_Address; ?> </td>            
            	<td><?php echo $row->Company_Code; ?> </td>    
            	<td><?php echo $row->Type; ?> </td>    
          	</tr>
        		<?php }} else {?>
        		<tr>
        			<td colspan="3"> No Data Found</td>
        		</tr>
      			<?php } ?>
       			<?php echo form_close(); ?>
        	</tbody>
      	</table>
			</div>
			</div>
		</div>
	</div>
  </div>
</div>
