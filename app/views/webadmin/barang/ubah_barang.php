<?php 
    require "../function.php"; 
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Detail Barang</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        

            
            </li>

            <!-- Divider -->
           

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Divider -->
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
          
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    
                       
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
<?php 
    $id_barang= $_GET['id_barang']; 
    $sql = 'select * from barang WHERE Barang_id ="'.$id_barang.'"';
    $query = mysqli_query($conn, $sql);   
    while($data = mysqli_fetch_array($query)){
        if($data['Barang_foto']!="" && $data['Barang_foto']!=NULL){
            $img_barang = '<img src="../img'.$data['Barang_foto'].'" style="width: 100px;">';
        }else{
            $img_barang = "-";
        }
    ?> 
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Detail Barang </h1>
                    </div> 
                    <div class="row">
                        <div class="col-md-8">
                            <div class="text-right mt-2 mb-2 mr-2"> 
                                <a href="barang.php" class="btn btn-info">  Kembali  </a>
                            </div>
                            <!-- Default Card Example -->
                            <div class="card mb-4"> 
                                <div class="card-header">
                                    Form Detail Barang
                                </div>
                                <div class="card-body">
                                    
                                    <form method="post" action="function.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_barang" value="<?php echo $data['Barang_id']?>">
                                        <input type="hidden" name="gambar_lama" value="<?php echo $data['Barang_foto']?>">
                                        <div class="form-group row">
                                            <label  class="col-md-4 col-form-label"> Nama Barang</label>
                                            <div class="col-md-8">
                                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" 
                                            value="<?php echo $data['Barang_nama']?>" placeholder="Nama Barang"disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label  class="col-md-4 col-form-label"> Nama Loker</label>
                                            <div class="col-md-8">
                                            <input type="text" class="form-control" name="nama_loker" id="nama_loker" placeholder="Nama Loker"disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label  class="col-md-4 col-form-label"> Merk Barang</label>
                                            <div class="col-md-8">
                                            <input type="text" class="form-control" name="merek_barang" id="merek_barang" 
                                            value="<?php echo $data['Barang_merk']?>" placeholder="Merk Barang"disabled>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label  class="col-md-4 col-form-label"> Jumlah Barang</label>
                                            <div class="col-md-8">
                                            <input type="text" class="form-control" name="jumlah_barang" id="jumlah_barang" 
                                            value="<?php echo $data['Barang_jumlah']?>" placeholder="Jumlah Barang" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label  class="col-md-4 col-form-label"> Foto Barang</label>
                                            <div class="col-md-8">
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="customFile" disabled>
                                                    <label class="custom-file-label" for="customFile"> upload gambar</label>
                                                </div>
                                                <div class="mt-1 mb-2">
                                                    <?php echo $img_barang; ?>
                                                </div>

                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
<?php
    }
?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>