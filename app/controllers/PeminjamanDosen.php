<?php

class PeminjamanDosen extends Controller{
    public function index()
    {
        
        $data['judul'] = 'Peminjaman';
        $this->view('webdosen/peminjaman/index',$data);
    }
    
}