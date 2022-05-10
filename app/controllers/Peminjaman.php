<?php

class Peminjaman extends Controller{
    public function index()
    {
        $data['judul'] = 'Peminjaman';
        $this->view('templates/header',$data);
        $this->view('webadmin/aktifitas/peminjaman');
        $this->view('templates/footer');
    }
    
}