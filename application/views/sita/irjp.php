<?php 
  $this->load->view('include/irjpnavbar'); 
  // session_start();

  if(isset($_SESSION["id"]))
  {
      $user_id = $_SESSION["id"];

      include ("connections.php");

      $get_record = mysqli_query($connections, "SELECT * FROM facultyincharge WHERE role='$user_id'");
          while ($row =  mysqli_fetch_assoc($get_record)) {
              $db_fic_uname = $row["fic_uname"];
                  
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

<title>SITA | IRJP Dashboard</title>
<div class="content">
  
      
     <center>
          <!-- <h4 style="color: black"><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:45px; width: 45px">Technological University of the Philippines - Manila</h4> -->
          <!-- <p style="color: black; font-size: 20px"><b>SITA : SIT ASSISTANT</b></p> -->
          <img src="assets/img/sita2.png" alt="TUP Logo" style="height:11%; width: 11%">
      </center>
      <hr style="background-color: #800000">
      
      <br>
      <h2 style="color: #800000">Welcome to your IRJP Dashboard, <?php echo "$db_fic_uname"; ?>!</h2>
      
      <p id="demo"></p>
        <script>
            document.getElementById("demo").innerHTML = Date();
        </script>
      
      <center>
      <br>
  <div class="table-responsive" style="font-size: 14px">          
  <table class="table">
    <thead style="color: #800000">
      <th colspan="10" style="background-color: #ffe8e8; color: #800000; font-size: 20px; text-align: center">DEPLOYMENT INFORMATION</th>
      <tr>
        <th>DEPARTMENT NAME</th>
        <th>COLLEGE</th>
        <th>TOTAL NUMBER OF STUDENTS ENROLLED</th>
        <th>TOTAL NUMBER OF DEPLOYED STUDENTS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mathematics Department</td>
        <td>College of Science</td>
        <td>220</td>
        <td>125</td>
      </tr>
      <tr>
        <td>Chemistry Department</td>
        <td>College of Science</td>
        <td>120</td>
        <td>65</td>
      </tr>
      <tr>
        <td>Civil Engineering Department</td>
        <td>College of Engineering</td>
        <td>400</td>
        <td>200</td>
      </tr>
    </tbody>
  </table>
  </div>
  

  

</div>