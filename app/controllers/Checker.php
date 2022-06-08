<?php

class checker extends Controller{
    public function index()
    {
        $data['judul'] = 'Checker';
        $this->view('webchecker/formchecker/index',$data);
    }
}