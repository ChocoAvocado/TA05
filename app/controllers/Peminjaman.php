<?php

class Peminjaman extends Controller{
    public function index()
    {
        $data['judul'] = 'Peminjaman';
        $this->view('webadmin/peminjaman/index',$data);
    }
    
}