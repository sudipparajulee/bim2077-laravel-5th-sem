<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('mycss/style.css')}}">
</head>
<body>
    <a href="{{route('index')}}">Home</a>
    <a href="{{route('about')}}">About</a>
    <a href="{{route('contact')}}">Contact</a>

    @yield('content')

    <div style="background-color: blue; color:white;">
        Coypright &copy; 2023. All rights reserved.
    </div>

</body>
</html>