<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
}
