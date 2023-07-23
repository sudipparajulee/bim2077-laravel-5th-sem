<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        // foreach($news as $n)
        // {
        //     $n->mycategory = Category::find($n->category_id);
        // }
        return view('news.index',compact('news'));
    }

    public function create()
    {
        $categories = Category::orderBy('priority')->get();
        return view('news.create',compact('categories'));
    }   

    public function store(Request $request)
    {
        $data = $request->validate([
            'news_title' => 'required',
            'description' => 'required',
            'photopath' => 'required|image',
            'news_date' => 'required',
            'category_id' => 'required'
        ]);

        //store image
        if($request->hasFile('photopath'))
        {
            $file = $request->file('photopath');
            $filename = time().'_'.$file->getClientOriginalName();
            //store file in /gallery
            $file->storeAs('public/news',$filename);
            $data['photopath'] = $filename;
        }

        //store data
        News::create($data);

        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::orderBy('priority')->get();
        return view('news.edit',compact('news','categories'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'news_title' => 'required',
            'description' => 'required',
            'photopath' => 'nullable|image',
            'news_date' => 'required',
            'category_id' => 'required'
        ]);

        $news = News::find($id);

        //store image
        if($request->hasFile('photopath'))
        {
            $file = $request->file('photopath');
            $filename = time().'_'.$file->getClientOriginalName();
            //store file in /gallery
            $file->storeAs('public/news',$filename);
            //delete old image
            Storage::delete('public/news/'.$news->photopath);
            $data['photopath'] = $filename;
        }

        //store data
        $news->update($data);

        return redirect()->route('news.index');
    }

    public function delete($id)
    {
        $news = News::find($id);
        //delete image
        Storage::delete('public/news/'.$news->photopath);
        $news->delete();
        return redirect()->route('news.index');
    }
    
}
