<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $name = "Sudip";
        $today = date('Y-m-d');
        return view('welcome',compact('today','name'));
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
