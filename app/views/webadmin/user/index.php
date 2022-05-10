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
                Data User Terdaftar
            </h3>
        </div>
        <div class="col-lg-6">

            <a class="btn btn-primary plus btn-circle offset-lg-1 float-right" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i>
            </a>


        </div>
    </div>
    <!-- end of page heading -->

    <br>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
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
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php
                            $ambilsemuadatauser = mysqli_query($conn, "SELECT * from user JOIN level ON user.User_level_id=level.Level_id");
                            if (isset($_GET['cari'])) {
                                $ambilsemuadatauser = mysqli_query($conn, "SELECT * FROM user JOIN level ON user.User_level_id=level.Level_id WHERE User_tag = '" . $_GET['cari'] . "'");
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
                                <td>
                                    <span>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $IDUser; ?>">
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
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->

                                                    <div class="modal-body">
                                                        <input type="hidden" name="User_id" placeholder="ID User" value="<?= $IDUser ?>" required>
                                                        <br>
                                                        <input type="text" name="User_nama" placeholder="Nama User" value="<?= $NamaUser ?>" class="form-control">
                                                        <br>
                                                        <?php // echo $JabUser 
                                                        ?>
                                                        <!--Buat ngecheck level pake echo-->
                                                        <?php // var_dump($JabUser);
                                                        ?>
                                                        <!--Buat ngecheck tipe data-->
                                                        <select class="form-control" name="Level_nama" id="Jabatan">
                                                            <!-- <option value="-">Jabatan</option> -->
                                                            <option value="1" <?php if ($JabUser == 'Admin') echo 'selected' ?>>Admin</option>
                                                            <option value="2" <?php if ($JabUser == 'Dosen') echo 'selected' ?>>Dosen</option>
                                                            <option value="3" <?php if ($JabUser == 'Mahasiswa') echo 'selected' ?>>Mahasiswa</option>
                                                        </select>
                                                        <br>
                                                        <select class="form-control" name="User_prodi" id="prodi">
                                                            <option value="-">Program Studi</option>
                                                            <option value="Mekatronika" <?php if ($Prodi == 'Mekatronika') echo 'selected' ?>>Mekatronika</option>
                                                            <option value="Teknik Perancangan Manufaktur"><?php if ($Prodi == 'Teknik Perancangan Manufaktur') echo 'selected' ?>Teknik Percangan Manufaktur</option>
                                                            <option value="Teknik Mesin" <?php if ($Prodi == 'Teknik Mesin') echo 'selected' ?>>Teknik Mesin</option>
                                                        </select>
                                                        <br>
                                                        <input type="email" name="User_email" placeholder="Email" value="<?= $Email ?>" class="form-control">
                                                        <br>
                                                        <input type="password" name="User_pin" placeholder="Pin Keamanan" value="<?= $Pin ?>" class="form-control">
                                                        <br>
                                                        <input type="text" name="User_tag" placeholder="RFID Card" value="<?= $Tag ?>" class="form-control">
                                                        <br>
                                                        <input type="number" name="User_koin" placeholder="Koin" value="<?= $Koin ?>" class="form-control">
                                                        <br>
                                                        <input type="text" name="User_nokoin" placeholder="No Koin" value="<?= $Nokoin ?>" class="form-control">
                                                        <br>
                                                        <!-- <input type="file" name="Foto_User" placeholder="Foto" value="<?= $Foto ?>" class="form-control">
                                                    <br> -->
                                        </form>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="edituser" value="oke">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
            </div>
            </form>
        </div>
        </td>
        <td>



            <span>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $IDUser; ?>">
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
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form method="POST">
                                <div class="modal-body">
                                    Apakah anda yakin ingin menghapus <?= "$NamaUser"; ?> ?
                                    <br>
                                    <input type="hidden" name="hapus" value="1" required>
                                    <input type="hidden" name="User_id" placeholder="ID User" value="<?= $IDUser ?>" required>
                            </form>

                            <!-- Modal footer -->
                            <br>
                            <div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger float-left" name="hapus" onclick="return deleteUser(this)">
                                        Delete It</button>
                                </div>
                            </div>

                            <div class="modal-top">
                                <button type="button" class="btn btn-primary float-right" data-dismiss="modal">
                                    TIDAK
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

        </td>
        </tr>

    <?php
                            }
    ?>
    </tbody>

    </div>
    </table>
</div>