<?php

class DashboardDosen extends Controller{
    public function index()
    {
        $data['judul'] = 'dashboard';
        $this->view('webdosen/dashboard/index',$data);
    }
}   