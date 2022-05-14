<?php

class formpeminjaman extends Controller{
    public function index()
    {
        $data['judul'] = 'Form Peminjaman';
        $this->view('webadmin/form/formpeminjaman/index', $data);
    }
}