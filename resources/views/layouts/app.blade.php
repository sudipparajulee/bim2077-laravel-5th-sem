<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Datatable Scripts --}}
        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <script src="{{asset('datatable/datatables.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 bg-gray-200 h-screen">
                <img src="https://bitmapitsolution.com/images/logo/logo.png" alt="" class="bg-white w-10/12 mx-auto mt-6 rounded-lg shadow">
                <div class="mt-5">
                    <a href="{{route('dashboard')}}" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1">Dashboard</a>
                    <a href="{{route('category.index')}}" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1">Categories</a>
                    <a href="{{route('notice.index')}}" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1">Notices</a>
                    <a href="" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1">News</a>
                    <a href="" class="px-4 py-2 hover:bg-gray-300 block border-b border-gray-300 border-l-blue-300 border-l-2 ml-2 mt-1">Ads</a>

                </div>
            </div>
            <div class="flex-1 p-4">
                @yield('content')
            </div>
        </div>
    </body>
</html>
