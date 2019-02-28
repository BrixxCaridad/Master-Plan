<?php  
  

  // session_start();

  if(isset($_SESSION["id"]))
  {
      $user_id = $_SESSION["id"];
      include ("connections.php");

      $get_record = mysqli_query($connections, "SELECT * FROM facultyincharge WHERE role='$user_id'");
          while ($row =  mysqli_fetch_assoc($get_record)) {
              $db_fic_uname = $row["fic_uname"];
              $db_role = $row["role"];
              $db_fic_department = $row["fic_department"];
              
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
        
            
            <p style="color: white"><?php echo "$db_fic_uname"; ?></p>
            <p style="color: white">Director</p>
            <p style="color: white"><?php echo "$db_fic_department"; ?></p>
          </center>
        </div>

  </div>
 
  
  <!-- <a href="dashboard">Dashboard</a>
  <a href="requirements">Requirements</a>
  <a href="companies">Companies</a>
  <a href="messages2">Messages<span class="badge">2</span></a>
  <a href="accountsettings">Account Settings</a>-->
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
