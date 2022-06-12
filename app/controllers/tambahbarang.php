<?php

class Tambahbarang extends Controller{
    public function index()
    {
        $data['judul'] = 'Tambahbarang';
        $this->view('webadmin/barang/Tambahbarang/index',$data);
    }
}