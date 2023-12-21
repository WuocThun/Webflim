<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function category(){
        return view('pages.category');
    }
    public function genre(){
        return view('pages.gerne');
    }
    public function country(){
        return view('pages.country');
    }
    public function movie(){
        return view('pages.movie');
    }
    public function watch(){
        return view('pages.watch');
    }
    public function episode(){
        return view('pages.episode');
    }
}
