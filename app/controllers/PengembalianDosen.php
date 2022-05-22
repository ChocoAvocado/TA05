<?php

class PengembalianDosen extends Controller{
    public function index()
    {
        $data['judul'] = 'Pengembalian';
        $this->view('webdosen/pengembalian/index',$data);
    }
}