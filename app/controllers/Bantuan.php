<?php

class Bantuan extends Controller{
    public function index()
    {
        $data['judul'] = 'Bantuan';
        $data['status_sidebar'] = 'bantuan';
        $this->view('webadmin/bantuan/index',$data);
    }
}