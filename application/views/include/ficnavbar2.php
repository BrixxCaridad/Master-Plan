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

<body>

<div class="ficsidebar">

  <br>
  <br>
  
  <div class="container">
      
      <div class="col-md-2">
          <center>
            <img class="img-responsive img-circle" src="assets/img/panpan.jpg" alt="May Garcia" style="border-radius: 50% width= 50% height=50%"> 
          </center>

          <center>
            <p style="color: white">May Garcia</p>
            <p style="color: white">Faculty-in-Charge</p>
            <p style="color: white">College of Science</p>
          </center>
      </div>

  </div>

  
  <a href="<?php echo base_url();?>fic">Dashboard</a>
  <a href="<?php echo base_url();?>ficemailcon">Messages</a>
  <a href="<?php echo base_url();?>ficgpscon">Company Lists</a>
  <a href="<?php echo base_url();?>ficaccountcon">Account Settings</a>
  <a href="<?php echo base_url();?>welcomepage">Logout</a>

 

</div>



</body>
</html>
