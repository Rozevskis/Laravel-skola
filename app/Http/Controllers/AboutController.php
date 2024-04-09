<?php

namespace App\Http\Controllers  ;

use Illuminate\Http\Request;

class AboutController extends About
{
    public function about(){
        return view('about');
        
    }
}
