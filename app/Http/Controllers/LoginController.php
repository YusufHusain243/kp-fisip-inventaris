<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function lihatFormLogin(){
        return view('Login.login');
    }
}
