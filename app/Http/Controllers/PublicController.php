<?php

namespace App\Http\Controllers;

use App\Models\WorldNews;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function salom(){
        return view('salom');
    }
    public function news(Request $request){
        $keyword = $request->keyword??null;
        $keyword = strip_tags($keyword);
        if ($keyword){
            $news_items = WorldNews::where("title","like","%$keyword%")->get();
        }else{
            $news_items = WorldNews::all()->take(30);
        }

        return view('news',compact('news_items'));
    }
}
