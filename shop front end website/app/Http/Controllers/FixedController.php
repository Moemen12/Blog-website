<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FixedController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function contact() {
        return view('contact');
    }
}
