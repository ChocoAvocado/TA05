<?php

class formpeminjamanDosen extends Controller{
    public function index()
    {
        $data['judul'] = 'Form Peminjaman';
        $this->view('webdosen/form/formpeminjaman/index', $data);
    }
}