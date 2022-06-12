
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

<!-- Modal pencarian gagal-->
<div class="modal fade" id="modalperpanjangangagal_pencarian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
            </div>
            <div class="modal-body">Data peminjaman tidak dapat ditemukan</div>
            <div class="modal-footer">
            <a data-dismiss="modal" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Kembali</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal perpanjangan sudah 3x-->
<div class="modal fade" id="modalperpanjangangagal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
            </div>
            <div class="modal-body">Batas jumlah perpanjangan telah tercapai, silahkan mengembalikan barang atau meminjam kembali alat yang ingin diperpanjang</div>
            <div class="modal-footer">
            <a data-dismiss="modal" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Kembali</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal berhasil perpanjangan-->
<div class="modal fade" id="modalperpanjangansukses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
            </div>
            <div class="modal-body">Perpanjangan Barang Berhasil. Apakah ingin memperpanjang barang kembali?</div>
            <div class="modal-footer">
            <a href="dashboard" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Keluar</a>
            <a data-dismiss="modal" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Kembali</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal berhasil pengembalian-->
<div class="modal fade" id="modalpengembaliansukses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
            </div>
            <div class="modal-body">Pengembalian Barang Berhasil. Apakah ingin melakukan pengembalian barang kembali?</div>
            <div class="modal-footer">
            <a href="dashboard" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Keluar</a>
            <a data-dismiss="modal" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Kembali</a>
            </div>
        </div>
    </div>
</div>