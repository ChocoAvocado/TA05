<?php

class User extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('user/index');
        $this->view('templates/footer');
    }
}