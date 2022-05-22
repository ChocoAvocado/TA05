<?php

class BarangDosen extends Controller{
    public function index()
    {
        $data['judul'] = 'Barang';
        $this->view('webdosen/barang/index',$data);
    }
}