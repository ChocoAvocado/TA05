<?php

class PerpanjanganDosen extends Controller{
    public function index()
    {
        $data['judul'] = 'Perpanjangan';
        $this->view('webdosen/perpanjangan/index', $data);
    }
}