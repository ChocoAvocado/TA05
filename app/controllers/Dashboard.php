<?php

class dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'dashboard';
        $this->view('webadmin/dashboard/index',$data);
    }
}   