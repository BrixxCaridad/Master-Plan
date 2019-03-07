
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
        			<button type="button" class="btn btn-cmaroon btn-md add_comp"  data-toggle="modal" data-target="#add_company">Add Company</button>
        			<button type="button" class="btn btn-cmaroon btn-md type_table" id="type_table" onclick="location.href = '<?php echo site_url('irjp_company_type/index') ?>'">Company Type</button>
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
							<?php if($_SESSION['account_type']=='IRJP'):?>
              <th colspan="2">ACTION</th>
							<?php endif;?>
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
							<?php if($_SESSION['account_type']=='IRJP'):?>
								<td><button type='button' id='<?php echo $row->Company_Code; ?>' name="<?php echo $row->Company_Name; ?>" class='btn btn-danger center-block delete'><span class='fa fa-trash'></span></button></td>
								<td><button type='button' id='<?php echo $row->Company_Code; ?>' name="<?php echo $row->Company_Name; ?>" class='btn btn-warning center-block edit' data-toggle="modal" data-target="#add_company"><span class='fa fa-edit'></span></button></td>
							<?php endif;?>
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


<!-- Modal -->
 <div class="modal fade" id="add_company" role="dialog">
	 <div class="modal-dialog" style="top:50px">

		 <!-- Modal content-->
		 <div class="modal-content" style="width:700px;">
			 <div class="modal-header bg-dark" id="default_header">
				 <h4 class="modal-title_add text-white">Add New Company</h4>
				 <!-- <h4 class="modal-title_edit" hidden>Edit Company</h4> -->
				 <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
			 </div>
			 <div class="modal-body" id="default_body">
				 <div class="row">
						 <div class="col-lg-12">
							 <div class="form-group">
								 <!-- <?=form_open('fic/add_student' , 'id="StudentAdd"');?> -->
									 <p>Company Code</p>
									 <input class="form-control" id="company_code" name="company_code" type="text" autofocus>
							 </div>
						 </div>
						 <div class="col-lg-12">
							 <div class="form-group">
								 <!-- <?=form_open('fic/add_student' , 'id="StudentAdd"');?> -->
									 <p>Company Name</p>
									 <input class="form-control" id="company_name" name="company_name" type="text" autofocus>
							 </div>
						 </div>
						 <div class="col-lg-12">
							 <div class="form-group">
								 <!-- <?=form_open('fic/add_student' , 'id="StudentAdd"');?> -->
									 <p>Telephone Number</p>
									 <input class="form-control" id="tel_no" name="tel_no" type="text" autofocus>
							 </div>
						 </div>
						 <div class="col-lg-12">
							 <div class="form-group">
								 <!-- <?=form_open('fic/add_student' , 'id="StudentAdd"');?> -->
									 <p>Address</p>
									 <input class="form-control" id="address" name="address" type="address" autofocus>
							 </div>
						 </div>
							 <div class="col-md-12" >
							 <!-- <div class="col-md-12" id="type_div"> -->
								<p>Type<button type="button" class="btn btn-cmaroon btn-md" id="add_type">Add</button></p>

								<div class="col-md-12" id="type_div">
									<!-- <div class='form-group form-row default_select' id="div_select0" ><div class='col-10'>
										<select style="height:40px;" class="form-control type_select" id="type_list0" name="0" >
								 <option value="" selected disabled>Select Type</option>;
								 <?php
								 foreach($type as $t){
									echo '<option value="'.$t['Type_No'].'" class="selected_type">'.$t['Type'].'</option>';
								 }
								 ?>
								 </select>	</div>
								 <button type='button' id='btn0' name="0" class='btn btn-danger center-block remove'><span class='fa fa-minus'></span></button>
								</div> -->
								</div>

								 <!-- </div> -->
				 </div>
			 </div>
		 </div>
			 <div class="modal-footer" id="default_footer">
				 <!-- <button id="newStudentSubmit" type="submit" form="StudentAdd" class="btn btn-info" value="submit">SUBMIT</button> -->
				 <button id="newCompany" type="submit" class="btn btn-info submit_btn" value="submit">SUBMIT</button>
				 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			 </div>

	 </div>
 </div>

 <script type="text/javascript">
 	$(document).ready(function(){
		var selected_type = [];
		var selected_btn = [];
		var type_count = 0;
		var type_select_count = 1;
		var add = [];
		// add[0] = 0;
		$(document).on('click','.add_comp',function(){
			selected_type = [];
			add = [];
			type_select_count = 1;
			selected_type.length =0;
			add.length =0;
			$('.submit_btn').hide();
			$('#editCompany').hide();
			$('#newCompany').show();
			$('#type_div').html("");
			$('.modal-title_add').html("Add New Company");
			$("#company_code").attr('value','');
			$("#company_code").removeAttr("readonly");

			$("#company_name").attr('value','');
			$("#address").attr('value','');
			$("#tel_no").attr('value','');
			$.ajax({
				url: "<?php echo site_url('irjp_companies/get_available_type');?>",
				type: "POST",
				success: function(data){
					var obj = JSON.parse(data);
					var select ="<div class='form-group form-row' id='div_select0'><div class='col-10'><select style='height:40px;' class='col form-control type_select' id='type_list0' name='0'>"
					+"<option value='' selected disabled>Select Type</option>";
					for(var a=0; a<parseInt(obj.length); a++){
						select+="<option value='"+obj[a]['Type_No']+"'>"+obj[a]['Type']+"</option>";
					}
					select+="</select></div>"
					+"<button type='button' id='btn0' name='0' class='btn btn-danger center-block remove'><span class='fa fa-minus'></span></button></div>";
					$('#type_div').append(select);
					add[0] = 0;
				}
			});
		});
		$(document).on('change','.type_select',function(){
			let index = $(this).attr("name");
			if(selected_type[index] != null){
				selected_type[index] = $(this).val()
				selected_btn[index] = "true";
			} else{
				selected_type.push($(this).val());
				selected_btn.push($(this).val());
			}
			var nn = $(this).attr('name');
			var but = $("#btn"+nn).attr('id');
			var da = document.getElementById(but).getElementsByClassName("fa fa-plus")[0];
	    var sa = document.getElementById(but);
	    $(da).attr("class","fa fa-minus");
	    $(sa).attr("class","btn btn-danger center-block remove");
		});
		$(document).on('click','#add_type',function(){
			$.ajax({
				url: "<?php echo site_url('irjp_companies/get_available_type');?>",
				type: "POST",
				success: function(data){
					var obj = JSON.parse(data);
					var select ="<div class='form-group form-row' id='div_select"+type_select_count+"'><div class='col-10'><select style='height:40px;' class='col form-control type_select' id='type_list"+type_select_count+"' name='"+type_select_count+"'>"
					+"<option value='' selected disabled>Select Type</option>";
					for(var a=0; a<parseInt(obj.length); a++){
						select+="<option value='"+obj[a]['Type_No']+"'>"+obj[a]['Type']+"</option>";
					}
					select+="</select></div>"
					+"<button type='button' id='btn"+type_select_count+"' name="+type_select_count+" class='btn btn-danger center-block remove'><span class='fa fa-minus'></span></button></div>";
					$('#type_div').append(select);
					add[type_select_count] = type_select_count;
					type_select_count++;
				}
			});
		});
		$(document).on('click','.remove', function(){
			var but = $(this).attr('id');
			var da = document.getElementById(but).getElementsByClassName("fa fa-minus")[0];
	    var sa = document.getElementById(but);
			add[$(this).attr('name')] = null;
	    $(da).attr("class","fa fa-plus");
	    $(sa).attr("class","btn btn-success center-block add");
		});
		$(document).on('click','.add', function(){
			var but = $(this).attr('id');
	    var da = document.getElementById(but).getElementsByClassName("fa fa-plus")[0];
	    var sa = document.getElementById(but);
			add[$(this).attr('name')] = $(this).attr('name');
	    $(da).attr("class","fa fa-minus");
	    $(sa).attr("class","btn btn-danger center-block remove");
		});
		$(document).on('click','#newCompany',function(){
			let code = $("#company_code").val();
			let name = $("#company_name").val();
			let address = $("#address").val();
			let tel = $("#tel_no").val();
			let new_type = [];
			if((code != '')&&(name != '')&&(address != '')&&(tel != '')&&(selected_type.length != 0)){
				let b =0;
				for(let a = 0; a<parseInt(selected_type.length);a++){
					if(add[a]!= null){
						if(new_type.includes(selected_type[a]) == false){
							new_type[b] = selected_type[a];
							b++;
						}
					}
				}
				$.ajax({
					url:"<?php echo site_url('irjp_companies/add_company')?>",
					method: "POST",
					data:{code:code, name:name, address:address, tel:tel, new_type:new_type},
					success: function(data){
							console.log(data);
							alert("Company successfully created!");
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
					url:"<?php echo site_url('irjp_companies/delete_company')?>",
					method: "POST",
					data:{code:$(this).attr('id')},
					success: function(data){
							alert("Company successfully deleted!");
							location.reload();
					}
				});
			}
		});
		//edit
		$(document).on('click','.edit', function(){
			selected_type.length =0;
			add.length =0;
			$('#newCompany').hide();
			$('.submit_btn').hide();
			var btn = '<button id="editCompany" type="submit" class="btn btn-info submit_btn" value="submit">UPDATE</button>';
			$('#default_footer').append(btn);
			var title = '<div class="modal-header" id="default_title">'
				+'<h4 class="modal-title" >Edit Company</h4>'
				+'<button type="button" class="close" data-dismiss="modal">&times;</button>'
			+'</div>';
			$('.modal-title_add').html("Edit Company");
			$(".default_select").html("");
			$("#type_div").html("");
			type_select_count = 0;
			$.ajax({
				url:"<?php echo site_url('irjp_companies/get_company')?>",
				method: "POST",
				data:{code:$(this).attr('id')},
				success: function(data){
					var obj = JSON.parse(data);
						$("#company_code").attr('value',obj['company'][0]['Company_Code']);
						$("#company_code").attr('readonly','true');
						$("#company_name").attr('value',obj['company'][0]['Company_Name']);
						$("#address").attr('value',obj['company'][0]['Company_Address']);
						$("#tel_no").attr('value',obj['company'][0]['Company_Phone']);
						for(let a=0;a<parseInt(obj['type'].length);a++){
							add[a] = a;
							selected_type[a] = obj['type'][a]['Type_No'];
							let select ="<div class='form-group form-row' id='div_select"+a+"'><div class='col-10'><select style='height:40px;' class='col form-control type_select' id='type_list"+a+"' name='"+a+"'>"
							+"<option value='' selected disabled>Select Type</option>";
							for(let b=0; b<parseInt(obj['type_all'].length); b++){
									select+="<option value='"+obj['type_all'][b]['Type_No']+"'>"+obj['type_all'][b]['Type']+"</option>";
							}
							select+="</select></div>"
							+"<button type='button' id='btn"+a+"' name="+a+" class='btn btn-danger center-block remove'><span class='fa fa-minus'></span></button></div>";
							$("#type_div").append(select);
							type_select_count++;
							document.getElementById('type_list'+a).value=obj['type'][a]['Type_No'];
						}
				}
			});
		});
		$(document).on('click','#editCompany',function(){
			let code = $("#company_code").val();
			let name = $("#company_name").val();
			let address = $("#address").val();
			let tel = $("#tel_no").val();
			let new_type = [];
			if((code != '')&&(name != '')&&(address != '')&&(tel != '')&&(selected_type.length != 0)){
				let b =0;
				for(let a = 0; a<parseInt(selected_type.length);a++){
					if(add[a]!= null){
						if(new_type.includes(selected_type[a]) == false){
							new_type[b] = selected_type[a];
							b++;
						}
					}
				}
				$.ajax({
					url:"<?php echo site_url('irjp_companies/edit_company')?>",
					method: "POST",
					data:{code:code, name:name, address:address, tel:tel, new_type:new_type},
					success: function(data){
							alert("Company successfully updated!");
							location.reload();
					}
				});
			}
		});
	});
 </script>
