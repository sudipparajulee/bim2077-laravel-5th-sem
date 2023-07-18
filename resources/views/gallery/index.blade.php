@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Gallery</h1>
    <hr class="h-1 bg-red-600">

    <div class="my-5 text-right px-2">
        <a href="{{route('gallery.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Gallery</a>
    </div>

    {{-- datatable --}}
    <table id="mytable" class="display">
        <thead>
            <tr>
                <th>Priority</th>
                <th>Picture</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr>
                <td>{{$gallery->priority}}</td>
                <td>{{$gallery->photopath}}</td>
                <td>{{$gallery->description}}</td>
                <td>
                    <a href="{{route('gallery.edit',$gallery->id)}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Edit</a>
                    <a href="{{route('gallery.delete',$gallery->id)}}" onclick="return confirm('Are you sure to Delete?')" class="bg-red-600 text-white px-4 py-2 rounded-lg">Delete</a>
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