<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function salom(){
        return view('salom');
    }
    public function news(){
        return view('news');
    }
}
