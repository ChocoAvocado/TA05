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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
                    <form method="post" >
                            <a href="" type="submit" class="btn float-center"></a>
                            <h5 class="text-white-50 ">Silahkan Pilih Role</h5>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning"
                                    name="dosen">Dosen/Instruktur</button>
                                <button type="submit" class="btn btn-success" name="dosenp">Dosen/Peminjam</button>
                            </div>
                        
                    </form>
                    <!--Syarat-->
                    <?php
				if(isset($_POST['dosen'])) {
                    $_SESSION['User_level_id'] = "2";
                    header("location:dashboard");
					}
                    if(isset($_POST['dosenp'])) {
                        $_SESSION['User_level_id'] = "3";
                        header("location:baranguser");
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
</body>

</html>