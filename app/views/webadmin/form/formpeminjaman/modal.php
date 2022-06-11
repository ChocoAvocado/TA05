<!-- Logout Modal------------------->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

<!-- Peringatan GAGAL PENCARIAN (USER tidak ada)-->
<div class="modal fade" id="modalpeminjamangagal_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">Gagal Mencari, User tidak terdaftar</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Peringatan GAGAL PENCARIAN (BARANG tidak ada) -->
<div class="modal fade" id="modalpeminjamangagal_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">Gagal Mencari, Barang tidak terdaftar</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Peringatan GAGAL PENCARIAN (BARANG habis)-->
<div class="modal fade" id="modalpeminjamangagal_baranghabis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">Barang habis</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Peringatan GAGAL PENCARIAN (karena masih ada yang belum dikembalikan)-->
<div class="modal fade" id="modalpeminjamangagal_belumkembali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
            </div>
            <div class="modal-body">Peminjam masih meminjam alat yang sama. Kembalikan barang yang sedang dipinjam atau melakukan perpanjangan</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Peringatan BERHASIL MEMINJAM -->
<div class="modal fade" id="modalpeminjamansukses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">Sukses Meminjam</div>
            <div class="modal-footer">
            <a href="dashboard" class="btn btn-secondary active" role="button" aria-pressed="true">Keluar</a>
            <button class="btn btn-success" type="button" data-dismiss="modal">Pinjam</button>
            </div>
        </div>
    </div>
</div>