<?php

class Pengembalian extends Controller{
    public function index()
    {
        $data['judul'] = 'Pengembalian';
        $this->view('webadmin/pengembalian/index',$data);
    }
}