<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function home(){
        return view('index');
    }
    public function about(){
        return view('about', ['name' => 'Dimas Alvarezel']);
    
    }
}
