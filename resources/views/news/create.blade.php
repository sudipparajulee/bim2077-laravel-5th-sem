@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Add News</h1>
    <hr class="h-1 bg-red-600">

    <form action="{{route('news.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf

        <select name="category_id" class="rounded w-full mt-4" >
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
        <span class="text-red-600">* {{$message}}</span>
        @enderror



        <input type="date" name="news_date" class="rounded w-full mt-4" value="{{old('news_date')}}">
        @error('news_date')
        <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="text" name="news_title" placeholder="Enter Title" class="rounded w-full mt-4" value="{{old('news_title')}}">
        @error('news_title')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="text" name="description" placeholder="Enter Description" class="rounded w-full mt-4" value="{{old('description')}}">
        @error('description')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="file" name="photopath" class="rounded w-full mt-4">
        @error('photopath')
            <span class="text-red-600">* {{$message}}</span>
        @enderror


        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded mx-2">Add News</button>
            <a href="{{route('news.index')}}" class="bg-red-600 text-white px-8 py-1 rounded block">Exit</a>
        </div>

    </form>
@endsection
