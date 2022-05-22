<?php

class UserDosen extends Controller{
    public function index()
    {
        $data['judul'] = 'User';
        $this->view('webdosen/user/index',$data);
    }
}