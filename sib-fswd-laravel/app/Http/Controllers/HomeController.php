<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('template.base');
    }
     public function showTemplate(){
     return view('landing.base');
     }
}
