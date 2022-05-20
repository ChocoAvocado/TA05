<?php 
	require_once __DIR__.('/../function.php'); 
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
	<title>Login Laboratorium</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login.css">
</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h1>Email Login</h1>
				</div>
				<div class="card-body">
					<form method="post" >
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Username/Email" name="User_email">

						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="Pin" id="pin" name="User_pin">
							<span class="eye" onclick="fungsiku()">
								<i id="hide2" class="fa fa-eye"></i>
								<i id="hide1" class="fa fa-eye-slash"></i>
							</span>
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-center login_btn" name="login">
						</div>
					</form>

					<!--Syarat-->
					<?php
					if (isset($_POST['login'])) {
						$Email = $_POST['User_email'];
						$Pin = $_POST['User_pin'];
						$qry = mysqli_query($conn, "SELECT * FROM user WHERE User_email='$Email'AND User_pin='$Pin'");
						$cek = mysqli_num_rows($qry);
						// print_r(md5("willy"));
						// exit;
						if($cek > 0){

							$data = mysqli_fetch_assoc($qry);
						   
							// cek jika user login sebagai dosen
							if($data['User_level_id']=="1"){
						   
							 // buat session login dan username
							 $_SESSION['User_email'] = $Email;
							 $_SESSION['User_pin'] = $Pin;
							 $_SESSION['User_level_id'] = "1";
							 // alihkan ke halaman dashboard dosen
							 header("location:dashboard");
						   
							// cek jika user login sebagai mahasiswa
							}else if($data['User_level_id']=="3"){
							 // buat session login dan username
							 $_SESSION['User_email'] = $Email;
							 $_SESSION['User_pin'] = $Pin;
							 $_SESSION['User_level_id'] = "3";
							 // alihkan ke halaman dashboard mahasiswa
							 header("location:webuser");
						   
							} else {
								echo '<span class="errormessage">Tidak Terdaftar</span>';
							}
							} else {
								echo '<span class="errormessage">Tidak Terdaftar</span>';
							}
	
						}
					?>
					<!--syarat kelar-->

				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Use Another Account<a href="#">Click Here</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="forgot-password.php">Forgot your password?</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="index.php">Tap Ur RFID</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function fungsiku() {
			var x = document.getElementById("pin");
			var y = document.getElementById("hide1");
			var z = document.getElementById("hide2");

			if (x.type === 'password') {
				x.type = "text";
				y.style.display = "block";
				z.style.display = "none";
			} else {
				x.type = "password";
				y.style.display = "none";
				z.style.display = "block";
			}
		}
	</script>
</body>

</html>