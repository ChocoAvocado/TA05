<?php

class switchLogin extends Controller{
    public function index()
    {
        $data['judul'] = 'Switch Login';
        $this->view('switchLogin/index',$data);
    }
}