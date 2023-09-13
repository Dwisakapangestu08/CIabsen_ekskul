<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): String
    {
        return view('/login/login');
    }

    public function signup()
    {
        echo 'Halaman Pendaftaran';
    }
}
