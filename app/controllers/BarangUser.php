<?php

class BarangUser extends Controller{
    public function index()
    {
        $data['judul'] = 'Barang';
        $data['status_sidebar'] = 'barang';
        $this->view('webuser/barang/index',$data);
    }
}