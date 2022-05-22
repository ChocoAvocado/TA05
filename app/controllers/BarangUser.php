<?php

class BarangUser extends Controller{
    public function index()
    {
        $data['judul'] = 'Barang';
        $this->view('webuser/barang/index',$data);
    }
}