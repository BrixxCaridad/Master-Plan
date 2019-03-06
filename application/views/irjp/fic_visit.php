

<div class="main-main-container">
	<div class="page-title">
    <h4 class="text-bold"><b><span class="fa fa-briefcase"></span> FACULTY IN CHARGE VISITATION<small></small></b></h4>
  </div>
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-10 col-md-offset-1">
				<div class="search">
          <form class="search-form">
            <!-- <input id="myInput" type="text" name="type_query" placeholder="Search for type number or type" onkeyup="type()"> -->
            <input id="myInput" type="text" name="search_query" placeholder="Search for type number or type" >
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
              <th>STUDENT ID</th>
              <th>STUDENT NAME</th>
              <th>FACULTY ID</th>
              <th>FACULTY NAME</th>
              <th>COMPANY</th>
              <th>VISIT</th>
            </tr>
          </thead>
          <tbody>

           	<?php
       					if (count($visit) > 0){
        					foreach ($visit as $row)
        		{?>
          	<tr>
            	<td><?php echo $row["Sit_No"]; ?> </td>
            	<td><?php echo $row["Student_ID"]; ?> </td>
            	<td><?php echo $row["Student_Name"]; ?> </td>
            	<td><?php echo $row["Faculty_ID"]; ?> </td>
            	<td><?php echo $row["Faculty_Name"]; ?> </td>
            	<td><?php echo $row["Company_Name"]; ?> </td>
							<?php if($row["Visit"] != ''){?>
								<td><i class="fa fa-check"></i></td>
							<?php } else{?>
								<td><i class="fa fa-times"></i></td>
							<?php }?>
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
 <div class="modal fade" id="add_type" role="dialog">
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
						 <div class="col-lg-12">
							 <div class="form-group">
									 <label>Type No</label> &nbsp;&nbsp;
									 <input class="form-control" id="type_no" name="type_no" type="text" autofocus readonly>
							 </div>
						 </div>
						 <div class="col-lg-12">
							 <div class="form-group">
									 <label>Type</label> &nbsp;&nbsp;
									 <input class="form-control" id="type" name="type" type="text" autofocus>
							 </div>
						 </div>
			 </div>
		 </div>
			 <div class="modal-footer" id="default_footer">

				 <button id="newType" type="submit" class="btn btn-info submit_btn" value="submit">SUBMIT</button>
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
	});
</script>
