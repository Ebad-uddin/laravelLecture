<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customController extends Controller
{
    public function index(){
        return view('welcome');
    }
    Public function about(){
        return view('about');
    }
    Public function contact(){
        return view('contact');
    }
    
}
