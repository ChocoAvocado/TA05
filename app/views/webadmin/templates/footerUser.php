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
                <h5 class="modal-title" id="exampleModalLabel">Anda ingin Logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
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
                    <input type="file" accept='image/png,image/jpeg' name="User_foto" placeholder="Foto" class="form-control" required>
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
    <?php if (isset($_GET['cari'])) : ?>
        $("#popupsearch").modal("show");
    <?php endif; ?>
</script>

</body>

</html>