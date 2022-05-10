<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row ">
        <div class="col-lg-6">
            <h3 class="mb-2 text-gray-800">
                <?php
                if (isset($_GET['cari'])) {
                ?>
                    <a href="user.php"><i class="fas fa-fw mr-2 fa-caret-square-left"></i></a>
                <?php
                }
                ?>
                Data Barang Lab
            </h3>
        </div>
        <div class="col-lg-6">
            <div class="text-right">
                <a class="btn btn-primary plus btn-circle offset-lg-1" href=https://www.qr-code-generator.com />
                <!--//data-toggle="modal" data-target="#myModal"-->
                <i class="fa fa-plus"></i>
                </a>
                <a href="tambah_barang.php" class="btn btn-primary plus btn-circle offset-lg-1">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- end of page heading -->
    <br>

    <!-- DataTales Example -->


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Merek Barang</th>
                            <th>Jumlah</th>
                            <th>Foto Barang</th>
                            <th>view</th>
                            <th style="width: 100px;">edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <?php
                            $ambilsemuadatabarang = mysqli_query($conn, "select * from barang");
                            $i = 1;
                            while ($data = mysqli_fetch_array($ambilsemuadatabarang)) {

                                $IDBarang = $data['Barang_id'];
                                $NamaBarang = $data['Barang_nama'];
                                $Jumlah = $data['Barang_jumlah'];
                                $MerekBarang = $data['Barang_merk'];
                                $Loker = $data['Barang_Loker'];
                                $Foto = $data['Barang_foto'];
                                if ($data['Barang_foto'] != "" && $data['Barang_foto'] != NULL) {
                                    $img_barang = '<img src="../img/' . $data['Barang_foto'] . '" style="width: 100px;">';
                                } else {
                                    $img_barang = "-";
                                }
                                $qr = $data['Barang_qrcode'];
                                if ($data['Barang_qrcode'] != "" && $data['Barang_qrcode'] != NULL) {
                                    $img_qr = '<img src="../img/' . $data['Barang_qrcode'] . '" style="width: 100px;">';
                                } else {
                                    $img_qr = "-";
                                }
                            ?>

                                <td><?= $i++; ?></td>
                                <td><?= $IDBarang; ?></td>
                                <td><?= $NamaBarang; ?></td>
                                <td><?= $MerekBarang; ?></td>
                                <td><?= $Jumlah; ?></td>
                                <td><?= $img_barang; ?></td>

                                <td>
                                    <span>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#lihat<?= $IDBarang; ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-eye"></i>
                                            </span>
                                        </button>
                                        <input type="hidden" name="ID_Barang" value="<?= $IDBarang; ?>">
                                    </span>


                                    <!-- The Modal EDIT BARANG -->


                                    <div class="modal fade" id="edit<?= $IDBarang; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Barang</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <form method="post">
                                                    <div class="modal-body">
                                                        Nama Barang
                                                        <input type="text" name="NamaBarang" value="<?= $NamaBarang ?>" class="form-control" autocomplete="off">
                                                        <br>
                                                        Merek Barang
                                                        <input type="text" name="MerekBarang" value="<?= $MerekBarang ?>" class="form-control" autocomplete="off">
                                                        <br>
                                                        Jumlah Barang
                                                        <input type="number" name="Jumlah" value="<?= $Jumlah ?>" class="form-control" autocomplete="off">
                                                        <br>
                                                        Loker
                                                        <input type="text" name="Loker" value="<?= $Loker ?>" class="form-control" autocomplete="off">
                                                        <br>
                                                        Foto Barang
                                                        <input type="file" name="Foto" value="<?= $img_barang ?>" class="form-control" autocomplete="off">
                                                        <br>
                                                        <input type="hidden" name="ID_Barang" value="<?= $IDBarang; ?>">
                                                </form>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" name="editbarang">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>

                                <td>




                                    <span>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $IDBarang; ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-pen"></i>
                                            </span>
                                        </button>
                                        <input type="hidden" name="ID_Barang" value="<?= $IDBarang; ?>">
                                    </span>

                                    <div>
                                        <!-- The Modal HAPUS BARANG-->
                                        <div class="modal fade" id="delete<?= $IDBarang; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Barang</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!-- Modal body -->

                                                    <div class="modal-body">
                                                        <form method="post">
                                                            <p> Apakah anda yakin ingin menghapus <?= "$NamaBarang"; ?> ? </p>
                                                            <input type="hidden" name="ID_Barang" value="<?= $IDBarang; ?>">
                                                            <div class="modal-top mt-1 mb-2" align="right">
                                                                <button type="submit" name="hapusdatabarang" class="btn btn-danger mr-1">
                                                                    YA
                                                                </button>
                                                                <button type="button" class="btn btn-primary " data-dismiss="modal">
                                                                    TIDAK
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




                                </td>

                                <td>
                                    <span>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $IDBarang; ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-times"></i>
                                            </span>
                                        </button>
                                        <input type="hidden" name="ID_Barang" value="<?= $IDBarang; ?>">
                                    </span>

                                    <div>
                                        <!-- The Modal LIHAT BARANG-->
                                        <div class="modal fade" id="lihat<?= $IDBarang; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Detail Barang</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                        <div class="modal-body">

                                                            <strong>
                                                                <font size="4"> ID Barang </font>
                                                            </strong>
                                                            <br>

                                                            <font color="blue"> <?= "$IDBarang"; ?> </font>
                                                            <br>
                                                            <br>
                                                            <strong>
                                                                <font size="4"> Nama Barang </font>
                                                            </strong>
                                                            <br>
                                                            <font color="blue"> <?= "$NamaBarang"; ?> </font>
                                                            <br>
                                                            <br>
                                                            <Strong>
                                                                <font size="4"> Jumlah Barang </font>
                                                            </Strong>
                                                            <br>

                                                            <font color="blue"> <?= "$Jumlah"; ?> </font>
                                                            <br>
                                                            <br>
                                                            <Strong>
                                                                <font size="4"> Merek Barang </font>
                                                            </Strong>
                                                            <br>
                                                            <font color="blue"> <?= "$MerekBarang"; ?> </font>
                                                            <br>
                                                            <br>
                                                            <Strong>
                                                                <font size="4"> Foto Barang </font>
                                                            </Strong>
                                                            <br>
                                                            <font color="blue"> <?= "$img_barang"; ?> </font>
                                                            <br>
                                                            <Strong>
                                                                <font size="4"> QR Code </font>
                                                            </Strong>
                                                            <br>
                                                            <font color="blue"> <?= "$img_qrcode"; ?> </font>
                                                            <br>

                                                            <input type="hidden" name="ID_Barang" value="<?= $IDBarang; ?>">
                                                    </form>

                                                    <!-- Modal footer -->
                                                    <br>
                                                    <div>
                                                        <div class="modal-top">
                                                            <button type="submit" class="btn btn-primary float-right" data-dismiss="modal">
                                                                OK
                                                            </button>
                                                        </div>
                                                    </div>


                                </td>

                        </tr>
                        <div>
                            <!-- The Modal LIHAT BARANG-->
                            <div class="modal fade" id="melihat<?= $IDBarang; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Detail Barang</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <form method="post">
                                            <div class="modal-body">

                                                <strong>
                                                    <font size="4"> ID Barang </font>
                                                </strong>
                                                <br>

                                                <font color="blue"> <?= "$IDBarang"; ?> </font>
                                                <br>
                                                <br>
                                                <strong>
                                                    <font size="4"> Nama Barang </font>
                                                </strong>
                                                <br>
                                                <font color="blue"> <?= "$NamaBarang"; ?> </font>
                                                <br>
                                                <br>
                                                <Strong>
                                                    <font size="4"> Jumlah Barang </font>
                                                </Strong>
                                                <br>

                                                <font color="blue"> <?= "$Jumlah"; ?> </font>
                                                <br>
                                                <br>
                                                <Strong>
                                                    <font size="4"> Merek Barang </font>
                                                </Strong>
                                                <br>
                                                <font color="blue"> <?= "$MerekBarang"; ?> </font>
                                                <br>


                                                <input type="hidden" name="ID_Barang" value="<?= $IDBarang; ?>">
                                        </form>

                                        <!-- Modal footer -->
                                        <br>
                                        <div>
                                            <div class="modal-top">
                                                <button type="submit" class="btn btn-primary float-right" data-dismiss="modal">
                                                    OK
                                                </button>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                            }
                        ?>


                    </tbody>

            </div>
            </table>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="../index.php">Logout</a>
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

<!-- Page level plugins -->
<script src="../vendor/datatables/jquery.dataTables.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Page level custom scripts -->
<script src="../js/demo/datatables-demo.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

</body>
<!-- The Modal TAMBAH BARANG-->
<!--<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
<!--<div class="modal-header">
          <h4 class="modal-title">Tambah Barang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>-->

<!-- Modal body -->
<!--<form method="post">
        <div class="modal-body">
            <input type ="text" name="NamaBarang" placeholder= "Nama Barang" class="form-control" required autocomplete="off">
            <br>
            <input type ="text" name="MerekBarang" placeholder= "Merek Barang" class="form-control" required autocomplete="off">
        <br>
        <input type ="number" name="Jumlah" placeholder= "Jumlah" class="form-control" required autocomplete="off">
        <br>
        <input type ="text" name="Loker" placeholder= "Loker" class="form-control" autocomplete="off">
        <br>
<body>
    <form action="https://www.the-qrcode-generator.com/"> 
        <button name="dudu">Buat QR Code </button> 
    </form>
</body>-->

<body>
    <br>
    <div class="container">
        <?php
        //Validasi untuk menampilkan pesan pemberitahuan
        if (isset($_GET['add'])) {

            if ($_GET['add'] == 'berhasil') {
                echo "<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah diupload!</div>";
            } else if ($_GET['add'] == 'gagal') {
                echo "<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal diupload!</div>";
            }
        }
        ?>
        <!--<form action="simpan.php" method="post" enctype="multipart/form-data">
            <!-- rows -->
        <--<div class="row">
            <!--<div class="col-sm-6">
                    <div class="form-group">
                        <div id="msg"></div>
                        <input type="file" name="gambar" class="file" >
                            <div class="input-group my-10">
                                <div class="input-group-append">     
                                </div>
                            </div>
                        <img src="gambar/80x80.png" id="preview" class="img-thumbnail">
                    </div>
                </div>
            </div>

                <button type="submit" name="addnamabarang" class="btn btn-success">Simpan</button>
        </form> -->



            <script>
                $(document).on("click", "#pilih_gambar", function() {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                });

                $('input[type="file"]').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                });
            </script>
            <?php

            if (isset($_POST['addnamabarang'])) {
                //Include file koneksi, untuk koneksikan ke database
                // include '../function.php';
                //Cek apakah ada kiriman form dari method post
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $ekstensi_diperbolehkan = array('png', 'jpg');
                    $gambar = $_FILES['foto_barang/']['name'];
                    $x = explode('.', $gambar);
                    $ekstensi = strtolower(end($x));
                    $file_tmp = $_FILES['gambar']['tmp_name'];

                    if (!empty($gambar)) {
                        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

                            //Mengupload gambar
                            move_uploaded_file($file_tmp, 'foto_barang/' . $gambar);

                            $sql = "insert into barang values ('$gambar')";

                            $simpan_bank = mysqli_query($kon, $sql);

                            if ($simpan_bank) {
                                header("Location:barang.php?add=berhasil");
                            } else {
                                header("Location:barang.php?add=gagal");
                            }
                        }
                    } else {
                        $gambar = "bank_default.png";
                    }
                }
            }
            ?>


            <!-- </body>
        <!-- Modal footer -->
            <!--<div class="modal-footer">
         <button type= "submit" class= "btn btn-primary" name="addnamabarang">
        Submit
        </button>
        </div>-->


            <div>
                <!-- The Modal LIHAT BARANG-->
                <div class="modal fade" id="melihat<?= $IDBarang; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Detail Barang</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form method="post">
                                <div class="modal-body">

                                    <strong>
                                        <font size="4"> ID Barang </font>
                                    </strong>
                                    <br>
                                    <font color="blue"> <?= "$IDBarang"; ?> </font>
                                    <br>


                                    <!-- Modal footer -->
                                    <br>
                                    <div>
                                        <div class="modal-top">
                                            <button type="submit" class="btn btn-primary float-right" data-dismiss="modal">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal fade" id="detail_barang">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Detail Barang</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <table>
                                        <tr>
                                            <td width='35%'><strong>ID Barang</strong></td>
                                            <td> : </td>
                                            <td>
                                                <div id="detail_id_barang"> </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width='35%'><strong>Nama Barang</strong></td>
                                            <td> : </td>
                                            <td>
                                                <div id="detail_nama_barang"> </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width='35%'><strong>Jumlah Barang</strong></td>
                                            <td> :
                                            <td>
                                            <td>
                                                <div id="detail_jumlah_barang"> </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width='35%'><strong>Merek Barang</strong></td>
                                            <td> :
                                            <td>
                                            <td>
                                                <div id="detail_merk_barang"> </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        $('#cari_barang').focus();
                        $(".cari_barang").on("keyup", function(e) {
                            var kode_barang = $('#cari_barang').val();
                            if (kode_barang != "") {
                                var link = 'http://pinjamalat-ta05.com/Peminjaman Alat/websitePeminjaman/webadmin/ubah_barang.php?id_barang=' + kode_barang + '';
                                //window.location.href = 'http://localhost/PEMINJAMAN/detail_barang.php?id_barang='+kode_barang+'';
                                window.open(link, '_blank');
                            }
                        })

                        // function lihat_detal(kode_barang){
                        //     $.ajax({
                        //         type: "POST",
                        //         url: "http://pinjamalat-ta05.com/Peminjaman Alat/websitePeminjaman/webadmin/detail_barang.php",
                        //         data: {
                        //             id_barang: kode_barang
                        //         },
                        //         success: function(res)
                        //         {
                        //              //$("#detail_barang").modal('show');
                        //         }
                        //     });
                        // }
                    </script>

                    </html>