<?php

class Pengembalian extends Controller{
    public function index()
    {
        $data['judul'] = 'Pengembalian';
        $this->view('templates/header',$data);
        $this->view('webadmin/aktifitas/pengembalian');
        $this->view('templates/footer');
    }
}