<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalnews = News::count();
        $totalcategories = Category::count();
        $totalphotos = Gallery::count();
        return view('dashboard',compact('totalnews','totalcategories','totalphotos'));
    }
}
