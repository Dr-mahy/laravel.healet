<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $title="HOME";
        return view('home',compact('title'));
    }
}
