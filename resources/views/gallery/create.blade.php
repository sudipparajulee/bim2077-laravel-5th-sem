@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Add Gallery</h1>
    <hr class="h-1 bg-red-600">

    <form action="{{route('gallery.store')}}" method="POST" class="mt-5">
        @csrf
        <input type="text" name="priority" placeholder="Enter Priority" class="rounded w-full mt-4" value="{{old('priority')}}">
        @error('priority')
        <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="text" name="description" placeholder="Enter Descriptin" class="rounded w-full mt-4" value="{{old('description')}}">
        @error('description')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="file" name="photopath" class="rounded w-full mt-4">
        @error('photopath')
            <span class="text-red-600">* {{$message}}</span>
        @enderror


        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded mx-2">Add Gallery</button>
            <a href="{{route('notice.index')}}" class="bg-red-600 text-white px-8 py-1 rounded block">Exit</a>
        </div>

    </form>
@endsection
