<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function catalogue()
    {
        return view('catalogue');
    }

    public function contact()
    {
        return view('contact');
    }
}
