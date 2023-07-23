@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Edit News</h1>
    <hr class="h-1 bg-red-600">

    <form action="{{route('news.update',$news->id)}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf

        <select name="category_id" class="rounded w-full mt-4" >
            @foreach($categories as $category)
            <option value="{{$category->id}}" @if($category->id == $news->category_id) selected @endif>{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
        <span class="text-red-600">* {{$message}}</span>
        @enderror



        <input type="date" name="news_date" class="rounded w-full mt-4" value="{{$news->news_date}}">
        @error('news_date')
        <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="text" name="news_title" placeholder="Enter Title" class="rounded w-full mt-4" value="{{$news->news_title}}">
        @error('news_title')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="text" name="description" placeholder="Enter Description" class="rounded w-full mt-4" value="{{$news->description}}">
        @error('description')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <p>Current Picture</p>
        <img class="w-52" src="{{asset('storage/news/'.$news->photopath)}}" alt="">
        <input type="file" name="photopath" class="rounded w-full mt-4">
        @error('photopath')
            <span class="text-red-600">* {{$message}}</span>
        @enderror


        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded mx-2">Update News</button>
            <a href="{{route('news.index')}}" class="bg-red-600 text-white px-8 py-1 rounded block">Exit</a>
        </div>

    </form>
@endsection
