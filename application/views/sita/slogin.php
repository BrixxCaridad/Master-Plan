<?php  
	
	$id_num = $s_password = "";
	$id_num_Err = $s_password_Err = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id_num = $_POST["id_num"];
		$s_password = $_POST["s_password"];
	}

	if($id_num && $s_password){

		include("connections.php");

		$check_id_num = mysqli_query($connections, "SELECT * FROM students WHERE id_num='$id_num'");
		$check_id_num_row = mysqli_num_rows($check_id_num);

		if($check_id_num_row > 0){
			while ($row = mysqli_fetch_assoc($check_id_num)) {
				$user_id = $row["id_num"];
				$db_s_password = $row["s_password"];
				$db_s_status = $row["s_status"];
				$db_s_fname = $row["s_fname"];
					if($s_password == $db_s_password){

						//session_start();
						$_SESSION["id"] = $user_id;

						if($db_s_status == "0"){
							echo "<script>window.location.href='http://localhost/sita/compdetails';</script>";
						}else{
							echo "<script>window.location.href='http://localhost/sita/dashboard';</script>";
						}
					
					}else{
						$s_password_Err = "Password is incorrect!";
					}
			}
		}else{
		$id_num_Err = "Student ID No. not registered.";
	}
	}
		// if($idno && $pw){
		// 	$check_idno = mysqli_query($connections, "SELECT * FROM users WHERE idno='$idno'");
		// 	$check_idno_row = mysqli_num_rows($check_idno);

		// 	if($check_idno_row > 0) {
		// 		$idnoErr = "ID No is already registered.";
		// 	}else{
		// 		echo "Success!"
		// 	}
		// 	$query = mysqli_query($connections, "INSERT INTO users(idno,pw") VALUES('$idno','$pw');
		// }

		// $view_query = mysqli_query($connections, "SELECT * FROM users");
?>


<title>SITA | Student Login</title>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php htmlspecialchars("PHP_SELF"); ?>" method="POST">
					

					<center><span style="font-family: Poppins-Medium; font-size: 15px; color: white">
						Technological University of the Philippines - Manila
					</span></center>
					<br>
					<div class="col-md-12"><center><img src="assets/img/TUPlogo.png" alt="TUP Logo" style="height:80px; width: 80px"></center></div>
					
					<span class="login100-form-title p-b-34 p-t-27">
						SITA: SIT ASSISTANT
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Student ID No. is required">
						<input class="input100" type="text" name="id_num" autocomplete="off" value="<?php echo $id_num; ?>">
						
						<span class="error focus-input100" data-placeholder="Student ID No."><?php echo $id_num_Err; ?></span>
						<!--<span class="focus-input100" data-placeholder="&#xf207;"></span>-->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="s_password" value="<?php echo $s_password; ?>">
						
						<span class="error focus-input100" data-placeholder="Password"><?php echo "$s_password_Err"; ?></span>
						<!--<span class="focus-input100" data-placeholder="&#xf191;"></span>-->
					</div>

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<!-- <center><a class="txt1" href="http://localhost/sita/forgotpw">
							Forgot Password?
						</a></center> -->
						<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" >
							Login
						</button>
					</div>

					

					<div class="text-center p-t-90">
						<a class="txt1" href="welcomepage">
							Back
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>

<?php

?>