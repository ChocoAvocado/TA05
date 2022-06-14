<?php

class switchlab extends Controller{
    public function index()
    {
        unset($_SESSION["User_lab_id"]);

        
        $_SESSION["User_lab_id"] = getUrlParam("lab"); // <<<< iki ga iso getURLparam, gen isa ambil parameter liat ( /app/core/controller atau app/core/app )
        // $_SESSION["User_lab_id"] = 2; // << sudah bisa seting lagi parameter dan masuk ke lab lain
        header("location: dashboard"); // << langsung otomatis masuk ke dashboard dengan id lab baru 
    }
}