<?php 
	require_once __DIR__.('/../../function.php'); 
    
    include("modalsearchpopup.php");
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menu User</title>

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

        <!-- adding sidebar here -->
        <?php include __DIR__."/../templates/sidebar.php"?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- adding sidebar here -->
                <?php include __DIR__."/../templates/topbar.php"?>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="row ">
                        <div class="col-lg-6">
                            <h3 class="mb-2 text-gray-800">
                                <?php
                                if (isset($_GET['cari'])) {
                                ?>
                                <a href="user"><i class="fas fa-fw mr-2 fa-caret-square-left"></i></a>
                                <?php
                                }
                                ?>
                                Data User Terdaftar
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="row justify-content-end">
                                <div class="col-lg-6">
                                    <!-- Topbar Search ATAS-->
                                    <form method="get" action=""
                                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Find The Owner" name="cari" aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-1">
                                    <?php if($_SESSION['User_level_id']== '1'): ?>
                                    <a class="btn btn-primary plus btn-circle offset-lg-1 float-right"
                                        data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <?php endif;?>
                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- end of page heading -->

                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Instruktur</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID User</th>
                                            <th>Nama User</th>
                                            <th>Jabatan</th>
                                            <th>Prodi User</th>
                                            <th>Email User</th>
                                            <th>Tag User</th>
                                            <th>Koin User</th>
                                            <th>NoKoin User</th>
                                            <!-- <th>Foto User</th> -->
                                            <?php if($_SESSION['User_level_id']== '1'): ?>
                                            <th>edit</th>
                                            <th>delete</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <?php
                                            $ambilsemuadatauser = mysqli_query($conn, "SELECT * from user JOIN level ON user.User_level_id=level.Level_id WHERE user.User_level_id='2'");
                                            if (isset($_GET['cari'])) {
                                                $caridatauser = mysqli_query($conn, "SELECT * FROM user JOIN level ON user.User_level_id=level.Level_id WHERE User_tag = '" . $_GET['cari'] . "'");
                                            }
                                            $i = 1;
                                            while ($data = mysqli_fetch_assoc($ambilsemuadatauser)) {

                                                $IDUser = $data['User_id'];
                                                $NamaUser = $data['User_nama'];
                                                $JabUser = $data['Level_nama'];
                                                $Prodi = $data['User_prodi'];
                                                $Email = $data['User_email'];
                                                $Pin = $data['User_pin'];
                                                $Tag = $data['User_tag'];
                                                $Koin = $data['User_koin'];
                                                $Nokoin = $data['User_nokoin'];
                                                // $Foto = $data['User_foto'];

                                            ?>

                                            <td><?= $i++; ?></td>
                                            <td><?= $IDUser; ?></td>
                                            <td><?= $NamaUser; ?></td>
                                            <td><?= $JabUser; ?></td>
                                            <td><?= $Prodi; ?></td>
                                            <td><?= $Email; ?></td>
                                            <td><?= $Tag; ?></td>
                                            <td><?= $Koin; ?></td>
                                            <td><?= $Nokoin; ?></td>
                                            <!-- <td><img src='http://localhost/websitePeminjaman/user-foto/<?php echo $Foto ?>' width="80"></td>  -->
                                            <!-- untuk memasukan ke hosting ganti http://localhost/websitePeminjaman/ ke domain server hosting-->
                                            <?php if($_SESSION['User_level_id']== '1'): ?>
                                            <td>
                                                <span>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#edit<?= $IDUser; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-pen"></i>
                                                        </span>
                                                    </button>
                                                    <input type="hidden" name="User_id" value="<?= $IDUser; ?>">
                                                </span>

                                                <!-- The Modal EDIT User -->
                                                <div class="modal fade" id="edit<?= $IDUser; ?>">
                                                    <form method="post">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit User</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->

                                                                <div class="modal-body">
                                                                    <input type="hidden" name="User_id"
                                                                        placeholder="ID User" value="<?= $IDUser ?>"
                                                                        required>
                                                                    <br>
                                                                    <input type="text" name="User_nama"
                                                                        placeholder="Nama User" value="<?= $NamaUser ?>"
                                                                        class="form-control">
                                                                    <br>
                                                                    <?php // echo $JabUser ?>
                                                                    <!--Buat ngecheck level pake echo-->
                                                                    <?php // var_dump($JabUser);?>
                                                                    <!--Buat ngecheck tipe data-->
                                                                    <select class="form-control" name="Level_nama"
                                                                        id="Jabatan">
                                                                        <!-- <option value="-">Jabatan</option> -->
                                                                        <option value="1"
                                                                            <?php if($JabUser=='Admin') echo 'selected'?>>
                                                                            Admin</option>
                                                                        <option value="2"
                                                                            <?php if($JabUser=='Dosen') echo 'selected'?>>
                                                                            Dosen</option>
                                                                        <option value="3"
                                                                            <?php if($JabUser=='Mahasiswa') echo 'selected'?>>
                                                                            Mahasiswa</option>
                                                                    </select>
                                                                    <br>
                                                                    <select class="form-control" name="User_prodi"
                                                                        id="prodi">
                                                                        <option value="-">Program Studi</option>
                                                                        <option value="Mekatronika"
                                                                            <?php if($Prodi=='Mekatronika') echo 'selected'?>>
                                                                            Mekatronika</option>
                                                                        <option value="Teknik Perancangan Manufaktur">
                                                                            <?php if($Prodi=='Teknik Perancangan Manufaktur') echo 'selected'?>Teknik
                                                                            Percangan Manufaktur</option>
                                                                        <option value="Teknik Mesin"
                                                                            <?php if($Prodi=='Teknik Mesin') echo 'selected'?>>
                                                                            Teknik Mesin</option>
                                                                    </select>
                                                                    <br>
                                                                    <input type="email" name="User_email"
                                                                        placeholder="Email" value="<?= $Email ?>"
                                                                        class="form-control">
                                                                    <br>
                                                                    <input type="password" name="User_pin"
                                                                        placeholder="Pin Keamanan" value="<?= $Pin ?>"
                                                                        class="form-control">
                                                                    <br>
                                                                    <input type="text" name="User_tag"
                                                                        placeholder="RFID Card" value="<?= $Tag ?>"
                                                                        class="form-control">
                                                                    <br>
                                                                    <input type="number" name="User_koin"
                                                                        placeholder="Koin" value="<?= $Koin ?>"
                                                                        class="form-control">
                                                                    <br>
                                                                    <input type="text" name="User_nokoin"
                                                                        placeholder="No Koin" value="<?= $Nokoin ?>"
                                                                        class="form-control">
                                                                    <br>
                                                                    <!-- <input type="file" name="Foto_User" placeholder="Foto" value="<?= $Foto ?>" class="form-control">
                                                                        <br> -->
                                                    </form>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" name="edituser"
                                                            value="oke">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                            </div>
                            </form>

                            </td>
                            <td>
                                <span>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#delete<?= $IDUser; ?>">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-times"></i>
                                        </span>
                                    </button>

                                    <input type="hidden" name="User_id" value="<?= $IDUser; ?>">
                                </span>

                                <div>
                                    <!-- The Modal HAPUS USER-->
                                    <div class="modal fade" id="delete<?= $IDUser; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus User</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form method="POST">
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus <?= "$NamaUser"; ?> ?
                                                        <br>
                                                        <input type="hidden" name="hapus" value="1" required>
                                                        <input type="hidden" name="User_id" placeholder="ID User"
                                                            value="<?= $IDUser ?>" required>
                                                </form>

                                                <!-- Modal footer -->
                                                <br>
                                                <div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger float-left"
                                                            name="hapus" onclick="return deleteUser(this)">
                                                            Delete It</button>
                                                    </div>
                                                </div>

                                                <div class="modal-top">
                                                    <button type="button" class="btn btn-primary float-right"
                                                        data-dismiss="modal">
                                                        TIDAK
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                            <?php endif; ?>
                            </tr>



                            <?php
                                            }
                                    ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- TABEL KE DUA --------------------------- -->

                            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID User</th>
                                        <th>Nama User</th>
                                        <th>Jabatan</th>
                                        <th>Prodi User</th>
                                        <th>Email User</th>
                                        <th>Tag User</th>
                                        <th>Koin User</th>
                                        <th>NoKoin User</th>
                                        <!-- <th>Foto User</th> -->
                                        <?php if($_SESSION['User_level_id']== '1'): ?>
                                        <th>edit</th>
                                        <th>delete</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <?php
                                            $ambilsemuadatauser = mysqli_query($conn, "SELECT * from user JOIN level ON user.User_level_id=level.Level_id WHERE user.User_level_id='3'");
                                            
                                            $i = 1;
                                            while ($data = mysqli_fetch_assoc($ambilsemuadatauser)) {

                                                $IDUser = $data['User_id'];
                                                $NamaUser = $data['User_nama'];
                                                $JabUser = $data['Level_nama'];
                                                $Prodi = $data['User_prodi'];
                                                $Email = $data['User_email'];
                                                $Pin = $data['User_pin'];
                                                $Tag = $data['User_tag'];
                                                $Koin = $data['User_koin'];
                                                $Nokoin = $data['User_nokoin'];
                                                // $Foto = $data['User_foto'];

                                            ?>

                                        <td><?= $i++; ?></td>
                                        <td><?= $IDUser; ?></td>
                                        <td><?= $NamaUser; ?></td>
                                        <td><?= $JabUser; ?></td>
                                        <td><?= $Prodi; ?></td>
                                        <td><?= $Email; ?></td>
                                        <td><?= $Tag; ?></td>
                                        <td><?= $Koin; ?></td>
                                        <td><?= $Nokoin; ?></td>
                                        <!-- <td><img src='http://localhost/websitePeminjaman/user-foto/<?php echo $Foto ?>' width="80"></td>  -->
                                        <!-- untuk memasukan ke hosting ganti http://localhost/websitePeminjaman/ ke domain server hosting-->
                                        <?php if($_SESSION['User_level_id']== '1'): ?>
                                        <td>
                                            <span>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#edit<?= $IDUser; ?>">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-pen"></i>
                                                    </span>
                                                </button>
                                                <input type="hidden" name="User_id" value="<?= $IDUser; ?>">
                                            </span>

                                            <!-- The Modal EDIT User -->
                                            <div class="modal fade" id="edit<?= $IDUser; ?>">
                                                <form method="post">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit User</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->

                                                            <div class="modal-body">
                                                                <input type="hidden" name="User_id"
                                                                    placeholder="ID User" value="<?= $IDUser ?>"
                                                                    required>
                                                                <br>
                                                                <input type="text" name="User_nama"
                                                                    placeholder="Nama User" value="<?= $NamaUser ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <?php // echo $JabUser ?>
                                                                <!--Buat ngecheck level pake echo-->
                                                                <?php // var_dump($JabUser);?>
                                                                <!--Buat ngecheck tipe data-->
                                                                <select class="form-control" name="Level_nama"
                                                                    id="Jabatan">
                                                                    <!-- <option value="-">Jabatan</option> -->
                                                                    <option value="1"
                                                                        <?php if($JabUser=='Admin') echo 'selected'?>>
                                                                        Admin</option>
                                                                    <option value="2"
                                                                        <?php if($JabUser=='Dosen') echo 'selected'?>>
                                                                        Dosen</option>
                                                                    <option value="3"
                                                                        <?php if($JabUser=='Mahasiswa') echo 'selected'?>>
                                                                        Mahasiswa</option>
                                                                </select>
                                                                <br>
                                                                <select class="form-control" name="User_prodi"
                                                                    id="prodi">
                                                                    <option value="-">Program Studi</option>
                                                                    <option value="Mekatronika"
                                                                        <?php if($Prodi=='Mekatronika') echo 'selected'?>>
                                                                        Mekatronika</option>
                                                                    <option value="Teknik Perancangan Manufaktur">
                                                                        <?php if($Prodi=='Teknik Perancangan Manufaktur') echo 'selected'?>Teknik
                                                                        Percangan Manufaktur</option>
                                                                    <option value="Teknik Mesin"
                                                                        <?php if($Prodi=='Teknik Mesin') echo 'selected'?>>
                                                                        Teknik Mesin</option>
                                                                </select>
                                                                <br>
                                                                <input type="email" name="User_email"
                                                                    placeholder="Email" value="<?= $Email ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="password" name="User_pin"
                                                                    placeholder="Pin Keamanan" value="<?= $Pin ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="text" name="User_tag"
                                                                    placeholder="RFID Card" value="<?= $Tag ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <input type="number" name="User_koin" placeholder="Koin"
                                                                    value="<?= $Koin ?>" class="form-control">
                                                                <br>
                                                                <input type="text" name="User_nokoin"
                                                                    placeholder="No Koin" value="<?= $Nokoin ?>"
                                                                    class="form-control">
                                                                <br>
                                                                <!-- <input type="file" name="Foto_User" placeholder="Foto" value="<?= $Foto ?>" class="form-control">
                                                                        <br> -->
                                                </form>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="edituser"
                                                        value="oke">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                        </div>
                        </form>

                        </td>
                        <td>
                            <span>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete<?= $IDUser; ?>">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-times"></i>
                                    </span>
                                </button>

                                <input type="hidden" name="User_id" value="<?= $IDUser; ?>">
                            </span>

                            <div>
                                <!-- The Modal HAPUS USER-->
                                <div class="modal fade" id="delete<?= $IDUser; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus User</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <form method="POST">
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus <?= "$NamaUser"; ?> ?
                                                    <br>
                                                    <input type="hidden" name="hapus" value="1" required>
                                                    <input type="hidden" name="User_id" placeholder="ID User"
                                                        value="<?= $IDUser ?>" required>
                                            </form>

                                            <!-- Modal footer -->
                                            <br>
                                            <div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger float-left" name="hapus"
                                                        onclick="return deleteUser(this)">
                                                        Delete It</button>
                                                </div>
                                            </div>

                                            <div class="modal-top">
                                                <button type="button" class="btn btn-primary float-right"
                                                    data-dismiss="modal">
                                                    TIDAK
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                        <?php endif; ?>
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


    </div>



    </div>
    </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


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
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" untuk keluar dari akun.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/websitePeminjaman/public/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal TAMBAH User-->
    <div class="modal fade" id="myModal">
        <form method="post" enctype='multipart/form-data'>
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah User</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <input type="text" name="User_id" placeholder="ID User" class="form-control" required>
                        <br>
                        <input type="text" name="User_nama" placeholder="Nama User" class="form-control" required>
                        <br>
                        <select class="form-control" name="Level_nama" id="Jabatan">
                            <!-- <option value="-">Jabatan</option> -->
                            <option value="1">Admin</option>
                            <option value="2">Dosen</option>
                            <option value="3">Mahasiswa</option>
                        </select>
                        <br>
                        <select class="form-control" name="User_prodi" id="prodi">
                            <option value="-">Program Studi</option>
                            <option value="Mekatronika">Mekatronika</option>
                            <option value="Teknik Perancangan Manufaktur">Teknik Percangan Manufaktur</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                        </select>
                        <br>
                        <input type="email" name="User_email" placeholder="Email" class="form-control" required>
                        <br>
                        <input type="password" name="User_pin" placeholder="Pin Keamanan" class="form-control" required>
                        <br>
                        <input type="text" name="User_tag" placeholder="RFID Card" class="form-control" required>
                        <br>
                        <input type="number" name="User_koin" placeholder="Koin" class="form-control" required>
                        <br>
                        <input type="text" name="User_nokoin" placeholder="No Koin" class="form-control" required>
                        <br>
                        <input type="file" accept='image/png,image/jpeg' name="User_foto" placeholder="Foto"
                            class="form-control" required>
                        <br>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="addnamauser">
                            Submit
                        </button>
                    </div>
                </div>
        </form>
    </div>
    </div>

    <?php
    include("modalsearchpopup.php");
    ?>

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


    <script src="<?= BASEURL; ?>/js/app.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#dataTable1').DataTable();
    });
    </script>

<script>
    $('#dataTable').dataTable({
        "lengthMenu": [5, 10, 20]
    });
    </script>

<script>
    $('#dataTable1').dataTable({
        "lengthMenu": [5, 10, 20]
    });
    </script>

    <script>
    <?php if (getUrlParam('cari')) : ?>
    $("#popupsearch").modal("show");
    <?php endif; ?> 
    </script>

</body>

</html>