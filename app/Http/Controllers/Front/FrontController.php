<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }

    public function destinations(){
        return view('front.destinations');
    }

    
    public function destination(){
        return view('front.destination');
    }
    public function packages(){
        return view('front.packages');
    }


}

