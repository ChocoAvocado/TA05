<?php

class Peminjaman extends Controller{
    public function index()
    {
        
        $data['judul'] = 'Peminjaman';
        $data['status_sidebar'] = 'aktivitas';
        $this->view('webadmin/peminjaman/index',$data);
    }
    
}