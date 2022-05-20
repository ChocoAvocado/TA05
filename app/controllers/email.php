<?php 

class Email extends Controller{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('email/index', $data);
    }
}