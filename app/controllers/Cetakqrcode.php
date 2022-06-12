<?php

class Cetakqrcode extends Controller{
    public function index()
    {
        $data['judul'] = 'Cetakqrcode';
        $this->view('webadmin/barang/Cetakqrcode/index',$data);
    }
}