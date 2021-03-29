@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::get('status'))
    <div class="alert alert-dismissible alert-success fade show" role='alert' >
        {{Session::get('status')}}
        <button class="close" data-dismiss='alert' aria-label='Close' >            
            <span aira-hidden='true' >&times;</span>
        </button>
    </div>
    @endif()
    @if(Session::get('delete'))
    <div class="alert alert-dismissible alert-success fade show" role='alert' >
        {{Session::get('delete')}}
        <button class="close" data-dismiss='alert' aria-label='Close' >            
            <span aira-hidden='true' >&times;</span>
        </button>
    </div>
    @endif()
    <table class='table table-bordered table-strip'>
        <thead>
            <th>ID</th>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Opreation</td>
        </thead>
        @foreach($data as $item)
        <tbody>
            <th> {{ $item->id }} </th>
            <td> {{ $item->name }} </td>
            <td> {{ $item->email }} </td>
            <td> {{ $item->address }} </td>
            <td>
                <a class='pr-2' href="/delete/{{$item->id}}">Delete</i></a>
                <a href="" class='pl-2'>Edit</a>
            </td>            
        </tbody>
        @endforeach()
    </table>

</div>
@endsection
