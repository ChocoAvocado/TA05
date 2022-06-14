<?php

class switchLogin extends Controller{
    public function index()
    {
        $data['judul'] = 'Switch Login';
        $data['status_sidebar'] = 'Login';
        $this->view('switchLogin/index',$data);
    }
}