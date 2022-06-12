<?php

class dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'dashboard';
        $data['status_sidebar'] = 'dashboard';
        $this->view('webadmin/dashboard/index',$data);
    }
}   