<?php

class Perpanjangan extends Controller{
    public function index()
    {
        $data['judul'] = 'Perpanjangan';
        $data['status_sidebar'] = 'aktivitas';
        $this->view('webadmin/perpanjangan/index', $data);
    }
}