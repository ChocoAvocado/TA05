<?php

class Perpanjangan extends Controller{
    public function index()
    {
        $data['judul'] = 'Perpanjangan';
        $this->view('templates/header',$data);
        $this->view('webadmin/aktifitas/perpanjangan');
        $this->view('templates/footer');
    }
}