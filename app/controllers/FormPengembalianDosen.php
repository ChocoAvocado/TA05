<?php

class formpengembalianDosen extends Controller{
    public function index()
    {
        $data['judul'] = 'Form Pengembalian';
        $this->view('webdosen/form/formpengembalian/index', $data);
    }
}