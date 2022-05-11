<?php 

class Login extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('function');
        $this->view('login/index', $data);
    }
}