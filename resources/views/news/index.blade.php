@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">News</h1>
    <hr class="h-1 bg-red-600">

    <div class="my-5 text-right px-2">
        <a href="{{route('news.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Add News</a>
    </div>

    {{-- datatable --}}
    <table id="mytable" class="display">
        <thead>
            <tr>
                <th>Date</th>
                <th>Picture</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $news)
            <tr>
                <td>{{$news->news_date}}</td>
                <td><img class="w-24" src="{{asset('storage/news/'.$news->photopath)}}" alt=""></td>
                <td>{{$news->news_title}}</td>
                <td>{{$news->description}}</td>
                <td>{{$news->category->name}}</td>
                {{-- <td>{{$news->mycategory->name}}</td> --}}
                <td>
                    <a href="{{route('news.edit',$news->id)}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Edit</a>
                    <a href="{{route('news.delete',$news->id)}}" onclick="return confirm('Are you sure to Delete?')" class="bg-red-600 text-white px-4 py-2 rounded-lg">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <script>
            $(document).ready(function() {
                $('#mytable').DataTable();
            } );
        </script>
@endsection