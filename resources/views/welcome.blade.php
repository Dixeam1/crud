@extends('layout')
@section('content')
<div class="container ">
  <div class="alert-success" style="
  display: flex;
  align-items: center;
  font-size: larger;">
  <div class="ml-3" >
    {{session('msg')}}
  </div>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Images</th>
      <th scope="col">NAME</th>
      <th scope="col">GMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php 

    $i = 1;

    ?>
    @foreach($employeeArr as $employee)
    <tr>
      <th>{{$i++}}</th>
      <th><img src="storage/app/public/{{$employee->images}}"></th>
      <th>{{$employee->name}}</th>
      <th>{{$employee->email}}</th>
      <th>{{$employee->phone}}</th>
      <th>
        <a href="delete/{{$employee->id}}">Delete</a>
        <a class="ml-4" href="edit/{{$employee->id}}">Edit</a>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection()
