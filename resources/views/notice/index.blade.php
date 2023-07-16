@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Notices</h1>
    <hr class="h-1 bg-red-600">

    <div class="my-5 text-right px-2">
        <a href="{{route('notice.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Noitce</a>
    </div>

    {{-- datatable --}}
    <table id="mytable" class="display">
        <thead>
            <tr>
                <th>Priority</th>
                <th>Notice</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notices as $notice)
            <tr>
                <td>{{$notice->priority}}</td>
                <td>{{$notice->notice}}</td>
                <td>
                    <a href="{{route('notice.edit',$notice->id)}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Edit</a>
                    <a href="{{route('notice.delete',$notice->id)}}" onclick="return confirm('Are you sure to Delete?')" class="bg-red-600 text-white px-4 py-2 rounded-lg">Delete</a>
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