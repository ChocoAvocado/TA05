<?php

class switchlab extends controller{
    public function index($urlvalue)
    {
        unset($_SESSION['User_lab_id']);
        

        // // var_dump($urlvalue);
        // // exit;
        
        $_SESSION['User_lab_id'] = $urlvalue; // <<<< iki ga iso getURLparam, gen isa ambil parameter liat ( /app/core/controller atau app/core/app )
        // // $_SESSION["User_lab_id"] = 2; // << sudah bisa seting lagi parameter dan masuk ke lab lain

        // var_dump($_SESSION['User_lab_id']);
        // exit;
        
        $data['judul'] = 'dashboard';
        $data['status_sidebar'] = 'dashboard';

        header('location: ../dashboard'); // << langsung otomatis masuk ke dashboard dengan id lab baru 
        
    }
}