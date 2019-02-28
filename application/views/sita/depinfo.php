<?php $this->load->view('include/navbar2'); ?>

<title>SITA | Deployment Information</title>
<div class="content">
  
      
     <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
      
      <br>
      
      
      <center>
      <br>
  <div class="table-responsive" style="font-size: 14px">          
  <table id="myTable"  class="table">
    <thead style="color: #800000">
      <th colspan="10" style="background-color: #ffe8e8; color: #800000; font-size: 20px; text-align: center">DEPLOYMENT INFORMATION</th>
      <tr>
        <th>Company</th>
        <th>Supervisor</th>
        <th>Date Deployed</th>
        <th>End of Training</th>
        <th>Required Hours</th>
        <th>Rendered Hours</th>
        <th>Remaining Hours</th>
        <th>Date of On-site Visitation</th>
        <th>Visited</th>
        <th>Status of SIT</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    
	<?php
	
       if ($display_dep->num_rows() > 0)
		   {
				foreach ($display_dep->result() as $row)
				{ ?>
					
					<tr>
															
						<td><?php echo $row->comp_name; ?> </td>
						<td><?php echo $row->supervisor; ?> </td>
						<td><?php echo $row->date_deployed; ?> </td>
						<td><?php echo $row->end_train; ?> </td>
						<td><?php echo $row->required_hrs; ?> </td>
						<td><?php echo $row->rendered_hrs; ?> </td>
						<td><?php echo $row->remaining_hrs; ?> </td>
						
						<td><?php echo $row->visit_date; ?> </td>
						<?php if ($row->visit == "No"){
							?>
						<td style="color: red"> <?php echo $row->visit; ?> </td>
						<?php } ?>
						
						<?php if($row->visit == "Yes")
						{?>
						<td style="color: green"> <?php echo $row->visit; ?> </td>
						
						<?php } ?>
						
						<?php if ($row->status == "On-Going"){
							?>
						<td style="color: green"><strong><?php echo $row->status; ?> </strong></td>
						<?php } ?>
						
						<?php if ($row->status == "Finished"){
							?>
						<td style="color: red"><strong><?php echo $row->status; ?> </strong></td>
						<?php } ?>
						
						
						
						<!--<button id="<?php// echo $row->id; ?>" data-toggle="modal" data-target="#myModal" class="btn btn-info update_dep" role="button"><span class="glyphicon glyphicon-plus">  View</span></button> -->
						<td><a href="<?php echo base_url("update_depinfo_cont/view_dep/".$row->id)?>" id="<?php echo $row->id; ?>" class="btn btn-warning update_btn" role="button"><span class="glyphicon glyphicon-pencil"></span> Update</a>						
						<button type="submit" id="<?php echo $row->id; ?>" href="#"  class="btn btn-danger delete_data" role="button"><span class="glyphicon glyphicon-trash" style="padding-right: 4px"></span>Delete</button></td>
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
		    
    </tbody>
  </table>
  </div>
  
    <!--<button data-toggle="modal" data-target="#myModal" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-pencil" style="padding-right: 4px"></span>Fill Out Forms</button> -->
    <a href="add_deployment_cont" class="btn btn-maroon btn-md pull-right" role="button"><span class="glyphicon glyphicon-plus" style="padding-right: 4px"></span>Add Deployment</a>
  
  
  
  
  
 
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
			
          <h4 class="modal-title">Deployment Info</h4>
        </div>
        <div class="modal-body">
         <form method="post" id="insert_form">
		 <?php
	
       if ($display_dep->num_rows() > 0)
		   {
				
				foreach ($display_dep->result() as $row)
				{?>
                          <label>Company Name</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->comp_name; ?>" id="comp_name" name="comp_name" type="text" autofocus>
						<br>
                     
                
               
                          <label>Supervisor</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->supervisor; ?>" id="supervisor" name="supervisor" type="text" >
						<br>
                
                          <label>Date Deployed</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->date_deployed; ?>" id="date_dep" name="date_dep" type="text" >
                      <br>
					  <label>End of Training</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->end_train; ?>" id="end_train" name="end_train" type="text" >
                      <br>
					  
					  <label>Required Hours</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->required_hrs; ?>" id="req_hrs" name="req_hrs" type="text" >
                      <br>
					   <label>Rendered Hours</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->rendered_hrs; ?>" id="rend_hrs" name="rend_hrs" type="text" >
                      <br>
					   <label>Remaining Hours</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->remaining_hrs; ?>" id="remain_hrs" name="remain_hrs" type="text" >
                      <br>
					   <label>On-site Visitation</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->visit_date; ?>" id="date_visit" name="date_visit" type="text" >
                      <br>
					   <label>Visited</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->visit; ?>" id="visit" name="visit" type="text" >
                      <br>
					   <label>Status of SIT</label> &nbsp;&nbsp;
                          <!-- <label class="error" id="error_name"> field is required.</label>
                          <label class="error" id="error_name2"> industry already exists.</label> -->
                          <input disabled class="form-control" placeholder="<?php echo $row->status; ?>" id="status" name="status" type="text" >
                      <br>
				<?php }

		   }				?>
        </div>
        <div class="modal-footer">
         
        <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
        </div>
      </div>
      
    </div>
  </div>
  

  
  
  
  
  
  
  
  

</div>


<script>

$(document).ready(function(){
	$('.delete_data').click(function(){
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			window.location="depinfo/delete_data/"+id;
		}
		
		else 
		{
			return false;
		}
	});
	
	
	
	
});



function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("td")[n];
      y = rows[i + 1].getElementsByTagName("td")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
 
</script>