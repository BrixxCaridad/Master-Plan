
<!DOCTYPE html>
<html>



</head>
<body>

<div class="sidebar">

  <br>
  <br>
  
  <div class="container">
        <!-- <img src="" alt="Meredith Grey" style="height: 50%; width: 50%; border-radius: 50%"> -->
        <div class="col-md-2">
          <center>
            <img class="img-responsive img-circle" src="assets/img/Grey.jpeg" alt="Meredith Grey" width="50%" height="50%" style="border-radius: 50%"> 
        
            <a href="depinfo"> <?php echo $_SESSION['account_name']; ?></a>
            <p style="color: white"><?php echo $_SESSION['account_id']; ?></p>
            <p style="color: white">BSIT - 4B</p>
            <p style="color: white">College of Science</p>
          </center>
        </div>

  </div>
 
  
  <a href="dashboard">Dashboard</a>
  <a href="requirements">Requirements</a>
  <a href="companies2">Companies</a>
  <a href="messages2">Messages<span class="badge">2</span></a>
  <a href="accountsettings">Account Settings</a>
  <a href="<?php echo base_url('login/logout');?>">Logout</a>

 

</div>

<!-- <style type="text/css">
    .badge{
      margin-left: 5px;
      background-color: #808080;
      border-style: solid;
      border-width: 2px;
      border-radius: 50px;
    }
</style> -->


</body>
</html>
