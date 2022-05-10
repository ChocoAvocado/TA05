<?php

class dashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'dashboard';
        $this->view('templates/header', $data);
        $this->view('webadmin/dashboard/index');
        $this->view('templates/footer');
    }
}   