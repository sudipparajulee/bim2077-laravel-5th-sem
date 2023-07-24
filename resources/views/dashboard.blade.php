@extends('layouts.app')
@section('content')
    <h1 class="font-bold text-3xl">Dashboard</h1>
    <hr class="h-1 bg-red-600">

    <div class="grid grid-cols-3 gap-10 mt-5">
        <div class="px-2 py-4 flex justify-between bg-blue-600 text-white rounded-lg shadow">
            <p>Total News</p>
            <p class="text-5xl font-bold">{{$totalnews}}</p>
        </div>


        <div class="px-2 py-4 flex justify-between bg-red-600 text-white rounded-lg shadow">
            <p>Total Categories</p>
            <p class="text-5xl font-bold">{{$totalcategories}}</p>
        </div>


        <div class="px-2 py-4 flex justify-between bg-green-600 text-white rounded-lg shadow">
            <p>Total Photos</p>
            <p class="text-5xl font-bold">{{$totalphotos}}</p>
        </div>

    </div>
@endsection