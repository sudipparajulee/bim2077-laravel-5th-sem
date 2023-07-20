@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Edit Gallery</h1>
    <hr class="h-1 bg-red-600">

    <form action="{{route('gallery.update',$gallery->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
        <input type="text" name="priority" placeholder="Enter Priority" class="rounded w-full mt-4" value="{{$gallery->priority}}">
        @error('priority')
        <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="text" name="description" placeholder="Enter description" class="rounded w-full mt-4" value="{{$gallery->description}}">
        @error('description')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <p class="mt-4">Current Image</p>
        <img class="w-52" src="{{asset('storage/gallery/'.$gallery->photopath)}}" alt="">
        <input type="file" name="photopath" class="rounded w-full mt-4">
        @error('photopath')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded mx-2">Update Gallery</button>
            <a href="{{route('gallery.index')}}" class="bg-red-600 text-white px-8 py-1 rounded block">Exit</a>
        </div>

    </form>
@endsection