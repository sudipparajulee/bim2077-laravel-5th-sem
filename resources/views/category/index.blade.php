@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Categories</h1>
    <hr class="h-1 bg-red-600">

    <div class="my-5 text-right px-2">
        <a href="{{route('category.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Category</a>
    </div>

    {{-- datatable --}}
    <table id="mytable" class="display">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Category name</td>
                <td>Edit Delete</td>
            </tr>
        </tbody>
    </table>
        <script>
            $(document).ready(function() {
                $('#mytable').DataTable();
            } );
        </script>
@endsection