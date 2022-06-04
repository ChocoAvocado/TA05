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

    <link href="<?= BASEURL; ?>/plugins/datetimepicker/jquery.datetimepicker.min.css" rel="stylesheet" />

    <title>Pinjam Alat - Barang</title>

    <!-- Custom fonts for this template -->
    <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= BASEURL; ?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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


                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="mb-2 text-gray-800">Form Peminjaman</h3>
                        </div>
                    </div>
                    <br>

                    <!-- Data Peminjaman dan search bar nya -->
                    <form method="get" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">

                                <!-- serach bar data peminjam -->
                                <div class="row">
                                    <div class="col-lg-8 input-group mb-3">
                                        <input type="text" class="form-control" name="cariuser"
                                            placeholder="Scan RFID here" aria-label="Search"
                                            aria-describedby="basic-addon2" required>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <!-- serach bar data peminjam -->
                                <div class="row">

                                    <div class="col-xl-8 col-sm-8 col-md-8 input-group mb-3">
                                        <input autocomplete="false" type="text" class="form-control" name="caribarang"
                                            placeholder="Scan QR here" aria-label="Search"
                                            aria-describedby="basic-addon2" required>
                                    </div>
                                    <div class="col-xl-2 col-sm-2 col-md-2">
                                        <button autocomplete="false" type="submit" name="caripinjaman" class="btn btn-primary">
                                            <span class="text">Cari</span>
                                        </button>

                                    </div>
                                    <div class="col-xl-2 col-sm-2 col-md-2">
                                        <button type="reset" value="reset" class="btn btn-secondary">
                                            <span class="text">Clear</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                    <form method="post">
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
                                                    <img src="../img/undraw_profile_1.svg"
                                                        class="w-100 h-100 img-thumbnail" alt="Chania">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">Nama Peminjam</h6>
                                                <input type="text" placeholder="<?php echo $cariusernama ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail" required>
                                                    <?php $kolomnama = $cariusernama ?>

                                            </div>

                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">Alamat Email</h6>
                                                <input type="#" placeholder="<?php echo $cariuseremail ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail">
                                            </div>

                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">Nomor Koin</h6>
                                                <input type="#" placeholder="<?php echo $cariuserkoin ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail">
                                            </div>

                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">Jumlah Koin</h6>
                                                <input type="#" placeholder="<?php echo $cariuserjumlahkoin ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail">
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
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6 mb-0">
                                                    <img src="../img/toolkit.svg" class="w-100 h-100 img-thumbnail"
                                                        alt="Chania">
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row">

                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">Nama barang</h6>
                                                <input type="#" placeholder="<?php echo $caribarangnama ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail">
                                            </div>

                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">Nama merek</h6>
                                                <input type="#" placeholder="<?php echo $caribarangmerk ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail">
                                            </div>

                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">nama loker</h6>
                                                <input type="#" placeholder="<?php echo $caribarangloker ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail">
                                            </div>

                                            <div class="col-11 mb-4 form-group disablingKeyboard">
                                                <h6 class="mb-0 text-gray-800">Jumlah Barang</h6>
                                                <input type="#" placeholder="<?php echo $caribarangjumlah ?>"
                                                    class="form-control form-control-user" id="exampleInputEmail">
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>


                        </div>


                        <!-- TOMBOL POST PEMINJAMAN -->
                        <!-- jumlah barang pinjam -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card shadow mb-4">

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-auto mb-4 form-group">
                                                <h6 class="mb-0 text-gray-800">Jumlah Barang pinjam</h6>
                                                <input type="text" class="form-control form-control-user"
                                                    name="jumlahbarangpinjam" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- datetimepicker -->
                            <div class="col-lg-6">
                                <div class="card shadow mb-4">

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-auto mb-4 form-group">
                                                <h6 class="mb-0 text-gray-800">Input tanggal pengembalian</h6>
                                                <input type="text" name="tanggalkembaliplan" id="picker"
                                                    class="form-control">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bukti Peminjaman dan tombol pinjam-->
                        <div class="row justify-content-center">

                            <div class="col-lg-6">

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
                            </div>


                            


                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <p class="mb-4"> *Konfirmasi setiap data peminjam dan data barang pinjaman
                                        sebelum menyelesaikan transaksi peminjaman</p>
                                    <div class="row-button justify-content-center">
                                        <button class="btn btn-success btn-icon-split" type="submit"
                                            data-toggle="modal" data-target="#konfirmasipinjam">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">Pinjam</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            
                            <?php
                            if($kolomnama != null){
                            ?>
                                <!-- Modal Tombol Pinjam  #masih belum dipakai-->
                                <div class="modal fade" id="konfirmasipinjam" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" ria-hidden="true">
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
                                                <button class="btn btn-secondary" name="pinjamalat" type="submit"
                                                    data-dismiss="modal">Cancel</button>
                                                <a class="btn btn-primary">Pinjam</a>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>

                            <?php
                            } else{}
                            ?>


                           


                        </div>
                    </form>
                </div>

            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Politeknik ATMI Surakarta 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>

    </div>

</body>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <a class="btn btn-primary" href="login">Logout</a>
            </div>
        </div>
    </div>
</div>

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
<script src="<?= BASEURL; ?>/js/demo/datatables-demo.js"></script>F

<!-- datetime picker -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<script src="<?= BASEURL; ?>/plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>
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