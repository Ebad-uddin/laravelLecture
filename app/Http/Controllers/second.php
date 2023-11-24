<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class second extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function gallery(){
        return view('gallery');
    }
}
