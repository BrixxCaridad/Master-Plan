
  

        <!-- <img src="" alt="Meredith Grey" style="height: 50%; width: 50%; border-radius: 50%"> -->
        <div class="col-md-2">
          <center>
            <img class="img-responsive img-circle" src="<?php echo base_url('assets/img/Grey.jpeg')?>" alt="Meredith Grey" width="50%" height="50%" style="border-radius: 50%"> 
        
            <a href="depinfo"> <?php echo isset($_SESSION['account_name']); ?></a>
            <p style="color: white"><?php echo isset($_SESSION['account_id']); ?></p>
            <p style="color: white">BSIT - 4B</p>
            <p style="color: white">College of Science</p>
          </center>
        </div>

 
  
  <a href="<?php echo base_url('dashboard')?>">Dashboard</a>
  <a href="requirements">Requirements</a>
  <a href="<?php echo base_url('companies')?>">Companies</a>
  <a href="messages2">Messages<span class="badge">2</span></a>
  <a href="<?php echo base_url('accountsettings')?>">Account Settings</a>
  <a href="<?php echo base_url('login/logout');?>">Logout</a>



