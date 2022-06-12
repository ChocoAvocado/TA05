<?php

class formpengembalian extends Controller{
    public function index()
    {
        $data['judul'] = 'Form Pengembalian';
        $data['status_sidebar'] = 'aktivitas';
        $this->view('webadmin/form/formpengembalian/index', $data);
    }
}