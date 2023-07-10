<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'priority' => 'required|numeric'
        ]);

        // dd('hello');
        // dd($request->all());
        
        Category::create($data);
        return redirect(route('category.index'));
    }
}
