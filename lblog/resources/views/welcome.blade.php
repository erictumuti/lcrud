@extends('layouts.main')

@section('content')
<div class="container">
<h1>Home page</h1>
<!--call the id successMsg -->
@if (session('successMsg'))
<div class="alert alert-success" role="alert">
 {{ session('successMsg') }}
</div>

@endif
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
      <td><a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit',$student->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
      ||
      <a class="btn btn-raised btn-danger btn-sm" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection