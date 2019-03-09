

<div class="main-main-container">
	<div class="page-title">

    <h4 class="text-bold"><b><a href="<?php echo base_url();?>irjp_fic"><span class="fa fa-user"></span> FACULTY IN CHARGE</a> / <span class="fa fa-users"></span> STUDENTS<small></small></b></h4>
  </div>
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-10 col-md-offset-1">
				<div class="search">
          <form class="search-form">
            <!-- <input id="myInput" type="text" name="type_query" placeholder="Search for type number or type" onkeyup="type()"> -->
            <input id="myInput" type="text" name="search_query" placeholder="Search for Faculty Name or Student Name or ID Number" >
            <!-- <input id="myInput" type="text" name="type_query" placeholder="Search for type number or type"> -->
            <input type="submit" value="Search">
          </form>
        </div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-12">
			<div class="table-responsive" style="font-size: 14px">
        <table class="table  table-hover" id="dataTables-user-list">
          <thead style="background-color: #e4e4e4">
            <tr>
              <th>SIT NO</th>
              <!-- <th>STUDENT ID</th> -->
							<th>FACULTY NAME</th>
              <th>STUDENT NAME</th>
              <!-- <th>FACULTY ID</th> -->
              <th>COMPANY</th>
              <th>VISIT</th>
              <!-- <th>VIEW</th> -->
            </tr>
          </thead>
          <tbody>

           	<?php
       					if (isset($sit)){
        					foreach ($sit as $row)
        		{?>
          	<tr>
            	<td><?php echo $row["Sit_No"]; ?> </td>
            	<!-- <td><?php echo $row["Student_ID"]; ?> </td> -->
							<td><?php echo $row["Faculty_Name"]; ?> </td>
            	<td><?php echo $row["Student_Name"]; ?> </td>
            	<!-- <td><?php echo $row["Faculty_ID"]; ?> </td> -->
            	<td><?php echo $row["Company_Name"]; ?> </td>
							<?php if($row["Visit"] != ''){?>
								<td><i class="fa fa-check"></i></td>
							<?php } else{?>
								<td><i class="fa fa-times"></i></td>
							<?php }?>
							<!-- <td><button type='button' id='<?php echo $row["Sit_No"]; ?>' name="<?php echo $row['Sit_No']; ?>" class='btn btn-info center-block view'><span class='fa fa-eye'></span></button></td> -->
          	</tr>
        		<?php }} else {?>
        		<tr>
        			<td colspan="3"> No Data Found</td>
        		</tr>
      			<?php } ?>
        	</tbody>
      	</table>
			</div>
			</div>
		</div>
	</div>
  </div>
</div>


<!-- Modal -->
 <div class="modal fade" id="view_visit" role="dialog">
	 <div class="modal-dialog">

		 <!-- Modal content-->
		 <div class="modal-content">
			 <div class="modal-header" id="default_header">
				 <h4 class="modal-title_add">Add New Type</h4>
				 <!-- <h4 class="modal-title_edit" hidden>Edit Type</h4> -->
				 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 </div>
			 <div class="modal-body" id="default_body">
				 <div class="row">
						 <div class="col-lg-6">
							 <div class="form-group">
									 <label>SIT No</label> &nbsp;&nbsp;
									 <input class="form-control" id="sit_no" name="sit_no" type="text" autofocus readonly>
							 </div>
						 </div>
						 <div class="col-lg-6">
							 <div class="form-group">
									 <label>Visit</label> &nbsp;&nbsp;
									 <input class="form-control" id="visit" name="visit" type="text" autofocus readonly>
							 </div>
						 </div>
				</div>
						 <div class="row">
							 <div class="col-lg-6">
								 <div class="form-group">
									 <label>Student ID</label> &nbsp;&nbsp;
									 <input class="form-control" id="student_id" name="student_id" type="text" autofocus>
								 </div>
							 </div>
							 <div class="col-lg-6">
								 <div class="form-group">
									 <label>Student Name</label> &nbsp;&nbsp;
									 <input class="form-control" id="student_name" name="student_name" type="text" autofocus>
								 </div>
							 </div>
						 </div>
						 <div class="row">
							 <div class="col-lg-6">
								 <div class="form-group">
									 <label>Faculty ID</label> &nbsp;&nbsp;
									 <input class="form-control" id="faculty_id" name="faculty_id" type="text" autofocus>
								 </div>
							 </div>
							 <div class="col-lg-6">
								 <div class="form-group">
									 <label>Faculty Name</label> &nbsp;&nbsp;
									 <input class="form-control" id="faculty_name" name="faculty_name" type="text" autofocus>
								 </div>
							 </div>
						 </div>
		 </div>
			 <div class="modal-footer" id="default_footer">
				 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			 </div>

	 </div>
 </div>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('keyup','#myInput',function(){
		var input, filter, table, tr, td, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("dataTables-user-list");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		td2 = tr[i].getElementsByTagName("td")[1];
		td3 = tr[i].getElementsByTagName("td")[2];
		td4 = tr[i].getElementsByTagName("td")[3];
		td5 = tr[i].getElementsByTagName("td")[4];
		td6 = tr[i].getElementsByTagName("td")[5];
			if (td||td2||td3||td4||td5) {
	      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1 || td3.innerHTML.toUpperCase().indexOf(filter) > -1 || td4.innerHTML.toUpperCase().indexOf(filter) > -1 || td5.innerHTML.toUpperCase().indexOf(filter) > -1)  {
	        tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
			}
			}
		});
		$(document).on('click','.view',function(){
			$('#view_visit').modal();
		});
	});
</script>
