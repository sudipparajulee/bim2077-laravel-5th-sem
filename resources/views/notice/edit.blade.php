@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Edit Notice</h1>
    <hr class="h-1 bg-red-600">

    <form action="{{route('notice.update',$notice->id)}}" method="POST" class="mt-5">
        @csrf
        <input type="text" name="priority" placeholder="Enter Priority" class="rounded w-full mt-4" value="{{$notice->priority}}">
        @error('priority')
        <span class="text-red-600">* {{$message}}</span>
        @enderror

        <input type="text" name="notice" placeholder="Enter Notice" class="rounded w-full mt-4" value="{{$notice->notice}}">
        @error('notice')
            <span class="text-red-600">* {{$message}}</span>
        @enderror

        <div class="flex justify-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded mx-2">Update Notice</button>
            <a href="{{route('notice.index')}}" class="bg-red-600 text-white px-8 py-1 rounded block">Exit</a>
        </div>

    </form>
@endsection