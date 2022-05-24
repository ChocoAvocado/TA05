<?php 
	require_once __DIR__.('/../../../function.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peminjaman Alat</title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.css" rel="stylesheet">

    <link href="<?= BASEURL; ?>/plugins/datetimepicker/jquery.datetimepicker.min.css" rel="stylesheet" />

    <style>
        #container {
            margin: 0px auto;
            width: 100%;
            height: 100%;
        }

        #videoElement {
            width: 100%;
            height: 100%;
            background-color: #666;
        }
    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- adding sidebar here -->
        <?php include __DIR__."/../../templates/sidebar.php"?>


            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <?php include __DIR__.('/../../templates/topbar.php'); ?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <form method="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="mb-2 text-gray-800">Form Pengembalian</h3>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <!-- Data Peminjaman dan search bar nya -->
                                <form method="get" action="" enctype="multipart/form-data">
                                    <div class="col-lg-6">


                                        <!-- serach bar data peminjam -->
                                        <div class="row">
                                            <div class="col-lg-8 input-group mb-3">
                                                <input type="text" class="form-control" name="cariuser" id="cariuser" placeholder="Scan RFID here" aria-label="Search" aria-describedby="basic-addon2" required>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <!-- serach bar data peminjam -->
                                        <div class="row">

                                            <div class="col-xl-8 col-sm-8 col-md-8 input-group mb-3">
                                                <input type="text" class="form-control" name="caribarang" id="caribarang" placeholder="Scan QR here" aria-label="Search" aria-describedby="basic-addon2" required>
                                                <!-- <div class="input-group-append">
                                                    <button class="btn btn-primary">
                                                        <i class="fas text-white-50 fa-search fa-sm"></i>
                                                    </button>
                                                </div> -->
                                            </div>
                                            <div class="col-xl-2 col-sm-2 col-md-2">
                                                <button type="submit" name="caripinjaman" class="btn btn-primary">
                                                    <span class="text">Cari</span>
                                                </button>

                                            </div>
                                            <div class="col-xl-2 col-sm-2 col-md-2">
                                                <a href="formpeminjaman.php" class="btn btn-secondary">
                                                    <span class="text">Clear</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="row">

                                <!-- row data peminjam dan barang pinjaman -->
                                <div class="col-lg-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3 ">
                                            <h6 class="m-0 font-weight-bold text-primary">Data Peminjam</h6>
                                        </div>

                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row justify-content-center">

                                                    <div class="col-lg-6 mb-0">
                                                        <img src="../img/undraw_profile_1.svg" class="w-100 h-100 img-thumbnail" alt="Chania">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">Nama Peminjam</h6>
                                                    <input type="#" placeholder="<?php echo $cariusernama ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>

                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">Alamat Email</h6>
                                                    <input type="#" placeholder="<?php echo $cariuseremail ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>

                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">Nomor Koin</h6>
                                                    <input type="#" placeholder="<?php echo $cariuserkoin ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>

                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">Jumlah Koin</h6>
                                                    <input type="#" placeholder="<?php echo $cariuserjumlahkoin ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3 ">
                                            <h6 class="m-0 font-weight-bold text-primary">Data Barang Pinjaman</h6>
                                        </div>

                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6 mb-0">
                                                    <img src="../img/toolkit.svg" class="w-100 h-100 img-thumbnail" alt="Chania">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">

                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">Nama barang</h6>
                                                    <input type="#" placeholder="<?php echo $caribarangnama ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>

                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">Nama merek</h6>
                                                    <input type="#" placeholder="<?php echo $caribarangmerk ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>

                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">nama loker</h6>
                                                    <input type="#" placeholder="<?php echo $caribarangloker ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>

                                                <div class="col-11 mb-4 form-group disablingKeyboard">
                                                    <h6 class="mb-0 text-gray-800">Jumlah Barang</h6>
                                                    <input type="#" placeholder="<?php echo $caribarangjumlah ?>" class="form-control form-control-user" id="exampleInputEmail">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form method="post">

                                <input type="hidden" name="cariuser" value="<?= $valuecariuser ?>" required>
                                <input type="hidden" name="caribarang" value="<?= $valuecaribarang ?>" required>

                                <!-- Bukti Peminjaman dan tombol pinjam-->
                                <div class="row justify-content-center">

                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="card shadow">
                                                <div class="card-header">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" onchange="document.getElementById('formPerpanjangan').disabled = !this.checked;" name='Perpanjangan' id='switchPerpanjangan' >
                                                        <label for="switchPerpanjangan" class="custom-control-label"> Perpanjangan</label>
                                                    </div>                    
                                                    
                                                </div>
                                                <div class="card-body" id='formPerpanjangan'>
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto mb-0 form-group">
                                                            <h6 class="mb-0 text-gray-800">Input tanggal pengembalian baru</h6>
                                                            <input type="text" id="picker" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row justify-content-center" style="padding: 0.75em;">
                                                        <div class="">
                                                            <a href="#" class="btn btn-info btn-icon-split">
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-clock"></i>
                                                                </span>
                                                                <span class="text">Perpanjang</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">

                                            <!-- Input Bukti Peminjaman -->
                                            <div class="card shadow mb-4">

                                                <div class="card-header py-3 ">
                                                    <h6 class="m-0 font-weight-bold text-primary">Bukti Peminjaman</h6>
                                                </div>

                                                <div class="card-body">
                                                    <div class="row justify-content-center">

                                                        <div id="container">
                                                            <video autoplay="true" id="videoElement">

                                                            </video>
                                                        </div>


                                                        <div class="row-button ">
                                                            <a class="btn btn-secondary">
                                                                <span class="text">Ambil Foto</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>



                                            <p class="mb-4"> *Konfirmasi setiap data peminjam dan data barang pinjaman sebelum
                                                menyelesaikan transaksi pengembalian</p>
                                            <div class="row-button justify-content-center">
                                                <button class="btn btn-warning btn-icon-split" type="submit" name="kembalialat">
                                                    <!--data-toggle="modal" data-target="#konfirmasipinjam"-->
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                    <span class="text">Kembali</span>
                                                </button>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- Modal Tombol Pinjam-->
                                    <div class="modal fade" id="konfirmasipinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" ria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Peringatan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">Anda yakin ingin meminjam alat ini?</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" name="pinjamalat" type="submit" data-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-primary">Pinjam</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        
    </div>
</body>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda ingin Logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" untuk keluar dari akun.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../index.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= BASEURL; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= BASEURL; ?>/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= BASEURL; ?>/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?= BASEURL; ?>/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Page level custom scripts -->
<script src="<?= BASEURL; ?>/js/demo/datatables-demo.js"></script>

<!-- datetime picker -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<script src="<?= BASEURL; ?>/plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>
<script>
    var video = document.querySelector("#videoElement");

    if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(function(stream) {
                video.srcObject = stream;
            })
            .catch(function(err0r) {
                console.log("Something went wrong!");
            });
    }
</script>
<script>
    $('#picker').datetimepicker({

        timepicker: false,
        datepicker: true,
        format: 'd-m-Y',
        value: 'today'

    })
</script>

<script>
$(function() {
    $('#picker').datetimepicker({
        minDate: new Date()
    });
});
</script>

</html>