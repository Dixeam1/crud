@extends('layout')
@section('content')
<div class="container">

    <form method="post" action="submit" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="phone" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="img" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection()
