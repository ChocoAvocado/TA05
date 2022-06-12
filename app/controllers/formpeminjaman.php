<?php

class formpeminjaman extends Controller{
    public function index()
    {
        $data['judul'] = 'Form Peminjaman';
        $data['status_sidebar'] = 'aktivitas';
        $this->view('webadmin/form/formpeminjaman/index', $data);
    }
}