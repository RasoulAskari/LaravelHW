@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-6">
        <form action="add" method='post'>
        @csrf
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name='name' class="form-control" aira-describedby='nameHelp' >
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name='email' class="form-control" aira-describedby='emailHelp' >
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name='address' class="form-control" aira-describedby='addressHelp' >
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
