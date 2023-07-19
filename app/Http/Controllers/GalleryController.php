<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
        return view('gallery.index',compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required|numeric',
            'description' => 'required',
            'photopath' => 'required|image'
        ]);

        //store image
        if($request->hasFile('photopath'))
        {
            $file = $request->file('photopath');
            $filename = time().'_'.$file->getClientOriginalName();
            //store file in /gallery
            $file->storeAs('public/gallery',$filename);
            $data['photopath'] = $filename;
        }

        //store data
        Gallery::create($data);

        return redirect()->route('gallery.index');

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}
