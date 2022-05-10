<?php

class User extends Controller{
    public function index()
    {
        $data['judul'] = 'User';
        $this->view('templates/header',$data);
        $this->view('webadmin/user/index');
        $this->view('templates/footer');
    }
}