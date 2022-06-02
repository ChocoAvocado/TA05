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
	<title>Halaman <?= $data['judul']; ?> </title>
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
				<h1>RFID Login</h1>
			</div>
			<div class="card-body">
				<form method="post" action="login">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Tap Ur RFID" name="User_tag">
						
					</div>
					<!-- <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Pin" id="pin" name="pin" disabled>
                        <span class="eye" onclick="fungsiku()">
                        <i id="hide2" class="fa fa-eye"></i>
                        <i id="hide1" class="fa fa-eye-slash"></i>
                        </span>
					</div> -->
					<div class="form-group">
                        <input type="submit" value= "Login" class="btn float-center login_btn" name="login"></a>
					</div>
				</form>
				<!--Syarat-->
				<?php
				if(isset($_POST['login'])) {
					$Tag = $_POST['User_tag'];
					$qry = mysqli_query($conn, "SELECT * FROM user WHERE User_tag= '$Tag'");
					$cek = mysqli_num_rows($qry);
						// print_r(md5("willy"));
						// exit;
						if($cek > 0){
							$data = mysqli_fetch_assoc($qry);
							if($data['User_level_id']=="1"){ //ADMIN
								$_SESSION['User_tag'] = $Tag;
								$_SESSION['User_nama'] = $data['User_nama'];
								$_SESSION['User_level_id'] = "1";
								$_SESSION['User_lab_id'] = $data['User_lab_id'];
								header("location:dashboard");
								// print_r($data);
								// exit;

							}elseif($data['User_level_id']=="2"){//Dosen
								$_SESSION['User_tag'] = $Tag;
								$_SESSION['User_nama'] = $data['User_nama'];
								$_SESSION['User_level_id'] = "2";
								$_SESSION['User_lab_id'] = $data['User_lab_id'];
								header("location:dashboard");
								// print_r($data);
								// exit;

							}elseif($data['User_level_id']=="3"){//Mahasiswa
								$_SESSION['User_tag'] = $Tag;
								$_SESSION['User_nama'] = $data['User_nama'];
								$_SESSION['User_level_id'] = "3";
								$_SESSION['User_lab_id'] = $data['User_lab_id'];
								header("#");
								// print_r($data);
								// exit;
								
							}
							else {
								echo '<span class="errormessage">Tidak Terdaftar</span>';
							}
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
					<a href="email">Use Email/Username?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <script>
    function fungsiku(){
        var x=document.getElementById("pin");
        var y=document.getElementById("hide1");
        var z=document.getElementById("hide2");

        if(x.type === 'Pin_User'){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
        }
        else{
            x.type = "Pin_User";
            y.style.display = "none";
            z.style.display = "block";
        }
    }
</script> -->
</body>
</html>