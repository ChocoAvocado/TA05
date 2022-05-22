<?php

class DashboardUser extends Controller{
    public function index()
    {
        $data['judul'] = 'dashboard';
        $this->view('webuser/dashboard/index',$data);
    }
}   