<?php

class Perpanjangan extends Controller{
    public function index()
    {
        $data['judul'] = 'Perpanjangan';
        $this->view('webadmin/perpanjangan/index', $data);
    }
}