<?php

class Barang extends Controller{
    public function index()
    {
        $data['judul'] = 'Barang';
        $this->view('webadmin/barang/index',$data);
    }
}