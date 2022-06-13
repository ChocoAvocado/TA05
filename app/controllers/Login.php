<?php 

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $data['status_sidebar'] = 'login';
        $this->view('login/index', $data);
    }
    public function email()
    {
        $data['judul'] = 'Login';
        $data['status_sidebar'] = 'login';
        $this->view('login/email', $data);
    }
}