<?php 

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('login/index', $data);
    }
    public function email()
    {
        $data['judul'] = 'Login';
        $this->view('login/email', $data);
    }
}