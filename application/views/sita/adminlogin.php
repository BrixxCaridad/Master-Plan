<?php  
	
	$fic_uname = $fic_password = "";
	$fic_uname_Err = $fic_password_Err = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$fic_uname = $_POST["fic_uname"];
		$fic_password = $_POST["fic_password"];
	}

	if($fic_uname && $fic_password){

		include("connections.php");

		$check_fic_uname = mysqli_query($connections, "SELECT * FROM facultyincharge WHERE fic_uname='$fic_uname'");
		$check_fic_uname_row = mysqli_num_rows($check_fic_uname);

		if($check_fic_uname_row > 0){
			while ($row = mysqli_fetch_assoc($check_fic_uname)) {
				$user_id = $row["id"];
				$db_fic_uname = $row["fic_uname"];
				$db_fic_password = $row["fic_password"];
				$db_role = $row["role"];

					if($fic_password == $db_fic_password){

						//session_start();
						$_SESSION["id"] = $user_id;
						if($db_role == "2"){
							echo "<script>window.location.href='http://localhost/sita/fic';</script>";
						}else{
							echo "<script>window.location.href='http://localhost/sita/irjp';</script>";
						}
					
					}else{
						$fic_password_Err = "Password is incorrect!";
					}
			}
		}else{
		$fic_uname_Err = "Username not registered.";
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


<title>SITA | Admin Login</title>
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
					<div class="col-md-12">
						<span class="login100-form-title p-b-34 p-t-27">
							SITA: SIT ASSISTANT
						</span>
					</div>
						<center><h4 style="color: #fff">Admin Login</h4></center>
							<br>
						

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="fic_uname"  autocomplete="off" value="<?php echo $fic_uname; ?>">
						
						<span class="error focus-input100" data-placeholder="Username">
							<?php echo $fic_uname_Err; ?>
						</span>
						<!--<span class="focus-input100" data-placeholder="&#xf207;"></span>-->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="fic_password"  value="<?php echo $fic_password; ?>">
						
						<span class="error focus-input100" data-placeholder="Password">
							<?php echo $fic_password_Err; ?>
						</span>
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
						<button class="login100-form-btn" type="submit">
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