<?php

class formpengembalian extends Controller{
    public function index()
    {
        $data['judul'] = 'Form Pengembalian';
        $this->view('webadmin/form/formpengembalian/index', $data);
    }
}