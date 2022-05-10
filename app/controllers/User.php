<?php

class User extends Controller{
    public function index()
    {
        $data['judul'] = 'User';
        $this->view('webadmin/user/index',$data);
    }
}