@extends('master')
@section('content')
    <h1 style="color:red;">We are developing a News Portal</h1>

    <img src="https://bitmapitsolution.com/images/logo/logo.png" alt="">

    <img src="{{ asset('images/logo.png') }}" alt="">

    <h1>Today is {{ $today }}</h1>

    <h1>My name is {{$name}}</h1>
@endsection