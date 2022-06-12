<?php

class Barang extends Controller{
    public function index()
    {
        $data['judul'] = 'Barang';
        $data['status_sidebar'] = 'barang';
        $this->view('webadmin/barang/index',$data);
    }
}