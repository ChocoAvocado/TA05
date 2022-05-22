<?php

class RiwayatUser extends Controller{
    public function index()
    {
        $data['judul'] = 'Riwayat';
        $this->view('webuser/riwayat/index',$data);
    }
}