<?php  
//  $this->load->view('include/navbar2');  

  // session_start();

  if(isset($_SESSION["id"]))
  {
      $user_id = $_SESSION["id"];
      include ("connections.php");

      $get_record = mysqli_query($connections, "SELECT * FROM students WHERE id_num='$user_id'");
          while ($row =  mysqli_fetch_assoc($get_record)) {
              $db_s_fname = $row["s_fname"];
                  
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
