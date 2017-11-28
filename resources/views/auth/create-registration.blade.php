@extends('layout-main')

@section('main-content')
<form action="/register" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="text" id="exampleInputEmail">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword">Password</label>
        <input type="text" id="exampleInputPassword">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm password</label>
        <input type="text" id="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection