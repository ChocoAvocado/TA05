<?php

class Pengembalian extends Controller{
    public function index()
    {
        $data['judul'] = 'Pengembalian';
        $data['status_sidebar'] = 'aktivitas';
        $this->view('webadmin/pengembalian/index',$data);
    }
}