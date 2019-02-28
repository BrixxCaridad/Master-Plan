<?php  
  

  // session_start();

  if(isset($_SESSION["id"]))
  {
      $user_id = $_SESSION["id"];
      include ("connections.php");

      $get_record = mysqli_query($connections, "SELECT * FROM students WHERE id_num='$user_id'");
          while ($row =  mysqli_fetch_assoc($get_record)) {
              $db_s_fname = $row["s_fname"];
              $db_s_lname = $row["s_lname"];
              $db_id_num = $row["id_num"];
               }
  }
  else
  {
      echo "You must login first.";
  }

  // include("connections.php"); 
  // $view_query = mysqli_query($connections, "SELECT * FROM students WHERE");
  //              while ($row =  mysqli_fetch_assoc($view_query)) {
  //                 $db_s_fname = $row["s_fname"];
  //                 echo $db_s_fname . "<br>";
  //              }
             
   
?>
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
        
            <a href="depinfo"> <?php echo "$db_s_fname $db_s_lname"; ?></a>
            <p style="color: white"><?php echo "$db_id_num"; ?></p>
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
  <a href="welcomepage">Logout</a>

 

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
