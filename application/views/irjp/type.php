

<div class="main-main-container">
	<div class="page-title">
    <h4 class="text-bold"><b><span class="fa fa-briefcase"></span> LIST OF ACCREDITED COMPANY TYPES<small></small></b></h4>
  </div>
	<div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-10 col-md-offset-1">
				<div class="search">
          <form class="search-form">
            <!-- <input id="myInput" type="text" name="type_query" placeholder="Search for type number or type" onkeyup="type()"> -->
            <input id="myInput" type="text" name="type_query" placeholder="Search for type number or type" >
            <!-- <input id="myInput" type="text" name="type_query" placeholder="Search for type number or type"> -->
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
        			<button id="addnewtype" type="button" class="btn btn-cmaroon btn-md add_type" >Add Type</button>
        			<!-- <button id="addnewtype" type="button" class="btn btn-cmaroon btn-md add_type"  data-toggle="modal" data-target="#add_type">Add Type</button> -->
        			<button type="button" class="btn btn-cmaroon btn-md company_table" id="company_table" onclick="location.href = '<?php echo site_url('irjp_companies/index') ?>'">Companies</button>
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
              <th>TYPE NO</th>
              <th>TYPE</th>
              <th colspan="2">ACTION</th>
            </tr>
          </thead>
          <tbody>
      			<!-- <?php echo form_open("companies2/display_company"); ?> -->
           	<?php
       					if (count($type) > 0){
        					foreach ($type as $row)
        		{?>
          	<tr>
            	<td><?php echo $row["Type_No"]; ?> </td>
            	<td><?php echo $row["Type"]; ?> </td>
            	<td><button type='button' id='<?php echo $row["Type_No"]; ?>' name="<?php echo $row['Type']; ?>" class='btn btn-danger center-block delete'><span class='fa fa-trash'></span></button></td>
            	<td><button type='button' id='<?php echo $row["Type_No"]; ?>' name="<?php echo $row['Type']; ?>" class='btn btn-warning center-block edit' data-toggle="modal" data-target="#add_type"><span class='fa fa-edit'></span></button></td>
          	</tr>
        		<?php }} else {?>
        		<tr>
        			<td colspan="3"> No Data Found</td>
        		</tr>
      			<?php } ?>
       			<!-- <?php echo form_close(); ?> -->
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
			 <div class="modal-header bg-dark" id="default_header">
				 <h4 class="modal-title_add text-white">Add New Type</h4>
				 <!-- <h4 class="modal-title_edit" hidden>Edit Type</h4> -->
				 <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
			 </div>
			 <div class="modal-body" id="default_body">
				 <div class="row">
						 <div class="col-md-12">
							 <div class="form-group">
									 <p>Type No</p>
									 <input class="form-control" id="type_no" name="type_no" type="text" autofocus readonly>
							 </div>
						 </div>
						 <div class="col-md-12">
							 <div class="form-group">
									 <p>Type</p>
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
			if (td||td2) {
				if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1)  {
					tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
			}
			}
		});
		$(document).on('click','.add_type',function(){
			// $('.submit_btn').hide();
			$('#editType').hide();
			// $('#newType').show();
			// $('#type_div').html("");
			$('.modal-title_add').html("Add New Type");
			$("#type_no").attr('value','');
			$("#type").attr('value','');
			// $("#type_no").removeAttr("readonly");
			$.ajax({
				url: "<?php echo site_url('irjp_company_type/get_type_no');?>",
				method: "POST",
				success: function(data){
					console.log(data);
					// alert(data);
					var res = "";
					res = data.replace('[{"AUTO_INCREMENT":"', "");
					res = res.replace('"}]', "");
					$('#type_no').attr("value",res);
					$('#add_type').modal();
				}
			});
		});
		$(document).on('click','#newType',function(){
			let type_no = $("#type_no").val();
			let type = $("#type").val();
			if((type_no != '')&&(type != '')){
				$.ajax({
					url:"<?php echo site_url('irjp_company_type/add_type')?>",
					method: "POST",
					data:{type_no:type_no, type:type},
					success: function(data){
							// console.log(data);
							alert("Type successfully created!");
							location.reload();
					}
				});
			}
		});
		//delete
		$(document).on('click','.delete', function(){
			let choice = confirm("Delete "+$(this).attr('name'));
			if(choice == true){
				$.ajax({
					url:"<?php echo site_url('irjp_company_type/delete_type')?>",
					method: "POST",
					data:{type_no:$(this).attr('id')},
					success: function(data){
							alert("Type successfully deleted!");
							location.reload();
					}
				});
			}
		});
		//edit
		$(document).on('click','.edit', function(){
			$('.submit_btn').hide();
			var btn = '<button id="editType" type="submit" class="btn btn-info submit_btn" value="submit">UPDATE</button>';
			$('#default_footer').append(btn);
			var title = '<div class="modal-header" id="default_title">'
				+'<h4 class="modal-title" >Edit Company</h4>'
				+'<button type="button" class="close" data-dismiss="modal">&times;</button>'
			+'</div>';
			$('.modal-title_add').html("Edit Company");
			$.ajax({
				url: "<?php echo site_url('irjp_company_type/get_type');?>",
				method: "POST",
				data: {type_no:$(this).attr('id')},
				success: function(data){
					var obj = JSON.parse(data);
					$('#type_no').attr("value",obj['type'][0]['Type_No']);
					$('#type').attr("value",obj['type'][0]['Type']);
				}
			});
		});
		$(document).on('click','#editType',function(){
			let type_no = $('#type_no').val();
			let type = $('#type').val();
			if((type_no != '')&&(type != '')){
				$.ajax({
					url:"<?php echo site_url('irjp_company_type/edit_type')?>",
					method: "POST",
					data:{type_no:type_no,type:type},
					success: function(data){
							alert("Type successfully updated!");
							location.reload();
					}
				});
			}
		});
	});
 </script>
