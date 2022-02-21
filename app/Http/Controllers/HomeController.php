<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com">Halaman Home</a>';
    }
}

