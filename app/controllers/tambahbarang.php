<?php

class Tambahbarang extends Controller{
    public function index()
    {
        $data['judul'] = 'Tambahbarang';
        $data['status_sidebar'] = 'barang';
        $this->view('webadmin/barang/Tambahbarang/index',$data);
    }
}