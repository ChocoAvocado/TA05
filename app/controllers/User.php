<?php

class User extends Controller{
    public function index()
    {
        $data['judul'] = 'User';
        $data['status_sidebar'] = 'user';
        $this->view('webadmin/user/index',$data);
    }
}