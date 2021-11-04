<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(empty(session('lang'))) {
            return view('home');
        } else if(session('lang') == 'en') {
            return view('home_en');
        } else if(session('lang') == 'jp') {
            return view('home_jp');
        } else {
            return view('home');
        }
    }

    public function changeLanguage($lang)
    {
        session(['lang' => $lang]);
        return redirect()->route('index');
    }
}
