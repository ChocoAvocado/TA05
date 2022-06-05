<?php 
	require_once __DIR__.('/../../function.php'); 
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

    <!--include css js datatable-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?= BASEURL; ?>/plugins/DataTables/DataTables-1.11.5/js/jquery.dataTables.min.js"></script>

    <!--tampilan datatable-->
    <link rel="stylesheet" type="text/css"
        href="<?= BASEURL; ?>/plugins/DataTables/DataTables-1.11.5/css/dataTables.bootstrap4.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include __DIR__."/../templates/sidebar.php"?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include __DIR__.('/../templates/topbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row ">
                        <div class="col-lg-6">
                            <h3 class="mb-2 text-gray-800">Data Pengembalian</h3>
                        </div>
                        <div class="col-lg-6">
                            <form method="get" action=""
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Pencarian Barang" name="cari" aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <a href="formpengembalian" class="btn btn-danger offset-lg-1 float-right">Kembali</a>
                            <a href="formpeminjaman" class="btn btn-success offset-lg-1 float-right">Pinjam</a>
                        </div>
                    </div>
                    <!-- end of page heading -->

                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengembalian</h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>


                                            <th>NIM</th>
                                            <th>Nama Peminjam</th>
                                            <th>Nomor Koin</th>
                                            <th>Tag RFID</th>
                                            <th>ID Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Rencana Tgl Kembali</th>
                                            <th>Tgl Kembali Riil</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php
                                            $ambildatapinjam = mysqli_query($conn, "SELECT * FROM pinjam 
                                            INNER JOIN user ON pinjam.Pinjam_user_tag=user.User_tag
                                            INNER JOIN barang ON pinjam.Pinjam_barang_id=barang.Barang_qrcode;");

                                            $NamaPeminjam = "";
                                            $TglPinjam = "";
                                            $TglKembaliPlan = "";

                                            while ($data = mysqli_fetch_array($ambildatapinjam)) {

                                                if ($data['Pinjam_tgl_kembalireal'] == null) {
                                                    continue;
                                                } else {

                                                    $TglPinjam = $data['Pinjam_tgl'];
                                                    $NIM = $data['User_id'];
                                                    $tagRFID = $data['User_tag'];
                                                    $NamaPeminjam = $data['User_nama'];
                                                    $NomorKoin = $data['User_nokoin'];
                                                    $IDpeminjam = $data['Pinjam_user_tag'];
                                                    $IDBarangPinjam = $data['Pinjam_barang_id'];
                                                    $NamaBarang = $data['Barang_nama'];
                                                    $TglKembaliPlan = $data['Pinjam_tgl_kembaliplan3'];
                                                    $TglKembaliRiil = $data['Pinjam_tgl_kembalireal'];

                                                    if ($TglKembaliPlan == null) {
                                                        $TglKembaliPlan = $data['Pinjam_tgl_kembaliplan2'];
                                                        if ($TglKembaliPlan == null) {
                                                            $TglKembaliPlan = $data['Pinjam_tgl_kembaliplan1'];
                                                        } else {
                                                        }
                                                    } else {
                                                    }

                                                    $TglPinjam = date("d-m-Y", strtotime($TglPinjam));
                                                    $TglKembaliPlan = date("d-m-Y", strtotime($TglKembaliPlan));
                                                    $TglKembaliRiil = date("d-m-Y", strtotime($TglKembaliRiil));

                                            ?>



                                            <td><?= $NIM; ?></td>
                                            <td><?= $NamaPeminjam; ?></td>
                                            <td><?= $NomorKoin; ?></td>
                                            <td><?= $tagRFID; ?></td>
                                            <td><?= $IDBarangPinjam; ?></td>
                                            <td><?= $NamaBarang; ?></td>
                                            <td><?= $TglPinjam; ?></td>
                                            <td><?= $TglKembaliPlan; ?></td>
                                            <td><?= $TglKembaliRiil; ?></td>

                                        </tr>
                                        <?php
                                                }
                                            }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>

    <script>
    $('#dataTable').dataTable({
        "lengthMenu": [5, 10, 20]
    });
    </script>


</body>


</html>