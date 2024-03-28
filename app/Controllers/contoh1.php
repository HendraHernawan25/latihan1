<?php

namespace App\Controllers;

class contoh1 extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function coba()
    {
        echo "<h1>Perkenalkan</h1>";
        echo "Nama saya Muhammad Hendra Hernawan
             saya berasal dari batam";
    }
}