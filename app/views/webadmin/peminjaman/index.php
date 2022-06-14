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

    <title>Pinjam Alat - Peminjaman</title>

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
                        <div class="col-sm-7">
                            <h3 class="mb-2 text-gray-800">Data Peminjaman</h3>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="pilihan_status" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Status
                                            Peminjaman</button>
                                        <div class="dropdown-menu" aria-labelledby="pilihan_status">
                                            <a href="peminjaman?status_peminjaman=0" type="button"
                                                class="dropdown-item">Semua</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="peminjaman?status_peminjaman=1" type="button"
                                                class="dropdown-item">Dipinjam</a>
                                            <a href="peminjaman?status_peminjaman=3" type="button "
                                                class="dropdown-item txt-red">Terlambat</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <a href="formpengembalian"
                                        class="btn btn-danger offset-lg-1 float-right">Kembali</a>
                                    <a href="formpeminjaman" class="btn btn-success offset-lg-1 float-right">Pinjam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of page heading -->
                    <p>*Tanggal Pinjam dan NIM yang sama jadi satu baris</p>

                  
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Peminjaman</h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal Pinjam</th>
                                            <th>NIM</th>
                                            <th>Nama Peminjam</th>
                                            <th>Nomor Koin</th>
                                            <th>Tag RFID</th>
                                            <th>Status</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php
                                             if(getUrlParam("peminjaman")!=null)
                                             {
                                                  $labid=getUrlParam("peminjaman");
                                                  $ambilsemuadatabarang = mysqli_query($conn, "select * from pinjam where Pinjam_barang_id=$labid");
                                             }

                                            $ambildatapinjam = mysqli_query($conn, "SELECT * FROM pinjam 
                                            JOIN user ON pinjam.Pinjam_user_tag=user.User_tag 
                                            JOIN barang ON pinjam.Pinjam_barang_id=barang.Barang_id
                                            WHERE Pinjam_status != 2 AND barang.Barang_lab_id=$_SESSION[User_lab_id] 
                                            ORDER BY Pinjam_tgl DESC, Pinjam_user_tag ASC;");

                                            $NamaPeminjam = "";
                                            $TglPinjam = "";

                                            while ($data = mysqli_fetch_array($ambildatapinjam)) {

                                                $TglPinjam1 = $data['Pinjam_tgl'];
                                                $NIM = $data['User_id'];
                                                $tagRFID = $data['User_tag'];
                                                $NamaPeminjam1 = $data['User_nama'];
                                                $NomorKoin = $data['User_nokoin'];
                                                $IDpeminjam = $data['Pinjam_user_tag'];
                                                $status = $data['Pinjam_status'];
                                               
                                                if ($NamaPeminjam === $NamaPeminjam1 and $TglPinjam === $TglPinjam1)
                                                    continue;

                                                else {
                                                    $NamaPeminjam = $NamaPeminjam1;
                                                    $TglPinjam = $TglPinjam1;
                                                }

                                                $TglPinjam = date("d-m-Y", strtotime($TglPinjam));

                                                if($status == 0){
                                                    $status = "dipinjam";
                                                } else if($status == 1){
                                                    $status = "dipinjam";
                                                } else if($status == 3){
                                                    $status = "<p style='color:red'><b>Terlambat<b></p>";
                                                } else{
                                                    $status = "#";
                                                }

                                            ?>


                                            <td><?= $TglPinjam; ?></td>
                                            <td><?= $NIM; ?></td>
                                            <td><?= $NamaPeminjam; ?></td>
                                            <td><?= $NomorKoin; ?></td>
                                            <td><?= $tagRFID; ?></td>
                                            <td><?= $status ?></td>
                                            <td width="5%">
                                                <span>
                                                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                        data-target="#view<?= $IDpeminjam; ?><?= $TglPinjam; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-eye"></i>
                                                        </span>
                                                    </button>

                                                    </a>
                                                </span>

                                                <!-- The Modal Table-->


                                                <div class="modal fade" id="view<?= $IDpeminjam; ?><?= $TglPinjam; ?>">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Data Barang Pinjaman</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <form method="post">
                                                                <div class="modal-body">

                                                                    <!-- DataTales Example -->
                                                                    <div class="card shadow mb-4">

                                                                        <div class="card-body">

                                                                            <div class="table-responsive">
                                                                                <table id="dataTable_0"
                                                                                    class="table table-bordered dataTables_wrapper"
                                                                                    width="100%" cellspacing="0">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>no</th>
                                                                                            <th>ID Barang</th>
                                                                                            <th>Nama Barang</th>
                                                                                            <th>Merek Barang</th>
                                                                                            <th>Jumlah Barang</th>
                                                                                            <th>Rencana Tgl Kembali</th>
                                                                                        </tr>
                                                                                    </thead>

                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <?php
                                                                                                $TglPinjam = date("Y-m-d", strtotime($TglPinjam));

                                                                                                $ambildatabarang = mysqli_query($conn, "SELECT * FROM pinjam
                                                                                                JOIN barang ON pinjam.Pinjam_barang_id=barang.Barang_id
                                                                                                WHERE pinjam.Pinjam_user_tag = $IDpeminjam AND pinjam.Pinjam_tgl = '$TglPinjam' 
                                                                                                AND pinjam.Pinjam_status != 2 AND pinjam.Pinjam_tgl_kembalireal IS NULL
                                                                                                AND barang.Barang_lab_id=$_SESSION[User_lab_id]");

                                                                                                $i = 1;
                                                                                                while ($data = mysqli_fetch_array($ambildatabarang)) {
                                                                                                    $IDBarang = $data['Pinjam_barang_id'];
                                                                                                    $NamaBarang = $data['Barang_nama'];
                                                                                                    $TglKembaliPlan = $data['Pinjam_tgl_kembaliplan3'];
                                                                                                    $DetailBarang = $data['Barang_merk'];
                                                                                                    $JumlahBarang = $data['Pinjam_jumlah'];
                                                                                                    $status = $data['Pinjam_status'];

                                                                                                    if ($TglKembaliPlan === null) {
                                                                                                        $TglKembaliPlan = $data['Pinjam_tgl_kembaliplan2'];
                                                                                                        if ($TglKembaliPlan === null) {
                                                                                                            $TglKembaliPlan = $data['Pinjam_tgl_kembaliplan1'];
                                                                                                        } else {
                                                                                                        }
                                                                                                    } else {
                                                                                                    }

                                                                                                    $TglKembaliPlan = date("d-m-Y", strtotime($TglKembaliPlan));

                                                                                                    if($status == 0){
                                                                                                        $status = $TglKembaliPlan;
                                                                                                    } else if($status == 1){
                                                                                                        $status = $TglKembaliPlan;
                                                                                                    } else if($status == 3){
                                                                                                        $status = "<p style='color:red'><b>$TglKembaliPlan<b></p>";
                                                                                                    } else{
                                                                                                        $status = "#";
                                                                                                    }

                                                                                                ?>

                                                                                            <td><?= $i++; ?></td>
                                                                                            <td><?= $IDBarang; ?></td>
                                                                                            <td><?= $NamaBarang; ?></td>
                                                                                            <td><?= $DetailBarang; ?>
                                                                                            </td>
                                                                                            <td><?= $JumlahBarang; ?>
                                                                                            </td>
                                                                                            <td><?= $status; ?>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php
                                                                                                }
                                                                                        ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
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
                    <a class="btn btn-primary" href="logout">Logout</a>
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
    var status_search = <?php echo json_encode($status_peminjaman_value);?>;

    $('#dataTable').dataTable({
        "lengthMenu": [5, 10, 20],
        "oLanguage": {
            "sSearch": "Mencari Peminjam: "
        },
        language: {
            "searchPlaceholder": "Scan QR here"
        },
        "search": {
            "search": status_search
        },
    });
    </script>









</body>


</html>