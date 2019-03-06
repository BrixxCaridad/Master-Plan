<div class="s-layout__sidebar">
  <div class="s-sidebar__trigger fic-trigger" style="cursor:pointer">
		 <i class="fa fa-bars"></i>
		 <img src="<?php echo base_url('assets/img/sita2reverse.png')?>" alt="TUP Logo" style="height:50px;">
</div>

  <nav class="s-sidebar__nav fic-snav">
	<div class="brand fic-brand">
            <img src="<?php echo base_url('assets/img/sita2reverse.png')?>"/>
        </div>
     <ul>
		 		<li>
					<a class="s-sidebar__nav-link profile-link">
					<div class="profile-link-div">
						<div class="profile-img">
							<img class="img-responsive img-circle large-avatar" src="<?php echo base_url('assets/img/default.png')?>" alt="Meredith Grey" width="50%" height="50%" style="border-radius: 50%">
						</div>
						<div class="profile-info">
							<p class="no-margin"><?php echo $_SESSION['account_name']; ?></p>
						</div>
						<div class="profile-info">
							<p class="no-margin"><small><?php echo $_SESSION['account_id']; ?></small></p>
						</div>
						<div class="profile-info">
							<p class="no-margin"><small><?php echo $_SESSION['account_type']; ?></small></p>
						</div>
					</div>
					</a>
        </li>
        <?php if($_SESSION['access_level'] != 'IRJP'){?>
          <li>
            <a href="<?php echo base_url();?>fic" class="s-sidebar__nav-link">
              <i class="fa fa-dashboard"></i><em>Dashboard</em>
            </a>
          </li>          
        <?php }?>
        <li>
          <a href="<?php echo base_url();?>irjp_companies" class="s-sidebar__nav-link">
            <i class="fa fa-briefcase"></i><em>Companies</em>
          </a>
        </li>
        <?php if($_SESSION['access_level'] == 'IRJP'){?>
          <li>
            <a href="<?php echo base_url();?>irjp_fic_visit" class="s-sidebar__nav-link">
              <i class="fa fa-user"></i><em>Faculty Visit</em>
            </a>
          </li>
        <?php } else{?>
          <li>
            <a href="<?php echo base_url();?>ficdepinfo" class="s-sidebar__nav-link">
              <i class="fa fa-building"></i><em>Deployments</em>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url();?>ficemailcon" class="s-sidebar__nav-link">
               <i class="fa fa-copy"></i><em>Requirements<?=($menu!=0?'<span class="badge">'.$menu.'</span>':'')?></em>
              <i class="fa fa-copy"></i><em>Requirements</em>
            </a>
          </li>
        
        <?php }?>
				<li>
				<a href="<?php echo base_url();?>ficaccountcon" class="s-sidebar__nav-link">
              <i class="fa fa-gear"></i><em>Account Settings</em>
           </a>
				</li>
				<li>
				<a href="<?php echo base_url('login/logout');?>" class="s-sidebar__nav-link">
              <i class="fa fa-sign-out"></i><em>Logout</em>
           </a>
				</li>

     </ul>
  </nav>
</div>

<style type="text/css">
  a.disabled {
    cursor: not-allowed;
    pointer-events: none;
  }
</style>

<script>
$(document).on("click", ".openModal", function () {
     var myId = $(this).data('id');
     var sname = $(this).data('surname');
     var fname = $(this).data('firstname');
    var middle = $(this).data('middle');
    var cnum = $(this).data('cnum');
    var tnum = $(this).data('tnum');
     $(".modal-body #view-id-num").val( myId );
     $(".modal-body #view-s-name").val( sname );
     $(".modal-body #view-f-name").val( fname );
     $(".modal-body #view-m-name").val( middle );
     $(".modal-body #view-cp-num").val( cnum );
     $(".modal-body #view-telephone").val( tnum );
});


document.getElementById("newStudentSubmit").addEventListener("click", function(event){
  event.preventDefault()
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
</script>
