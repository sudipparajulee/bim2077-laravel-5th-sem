<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $firstnews = News::orderBy('news_date','desc')->first();
        $trendingnews = News::orderBy('news_date','desc')->limit(5)->get();
        return view('welcome',compact('firstnews','trendingnews'));
    }

    public function category()
    {
        return view('category');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
