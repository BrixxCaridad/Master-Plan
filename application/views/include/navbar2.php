
<!-- Sidebar -->
<div class="s-layout__sidebar">
  <div class="s-sidebar__trigger" style="cursor:pointer">
		 <i class="fa fa-bars"></i>	
		 <img src="<?php echo base_url('assets/img/sita2reverse.png')?>"" alt="TUP Logo" style="height:50px;">
</div>

  <nav class="s-sidebar__nav">
	<div class="brand">
            <img src="<?php echo base_url('assets/img/sita2reverse.png')?>"/>
        </div>
     <ul>
		 		<li>
					<a href="<?php echo base_url('depinfo')?>" class="s-sidebar__nav-link profile-link">
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
							<p class="no-margin"><small>BSIT-4B , COS</small></p>
						</div>
					</div>
					</a>
        </li>
				<li>
				<a href="<?php echo base_url('dashboard')?>" class="s-sidebar__nav-link">
              <i class="fa fa-dashboard"></i><em>Dashboard</em>
           </a>
        </li>
        <li>
				<a href="requirements" class="s-sidebar__nav-link">
             <i class="fa fa-copy"></i><em>Requirements</em>
           </a>
        </li>
        <li>
					<a href="<?php echo base_url('companies')?>" class="s-sidebar__nav-link">
              <i class="fa fa-briefcase"></i><em>Companies</em>
           </a>
				</li>
				<li>
				<a href="<?php echo base_url('accountsettings')?>" class="s-sidebar__nav-link">
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
