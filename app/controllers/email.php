<?php 

class Email extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $data['status_sidebar'] = 'login';
        $this->view('email/index', $data);
    }
}