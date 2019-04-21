@extends('studentApp.layout')


@section('content')


<!-- from here to layout -->

<div class="container">
	<h1>content </h1>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">roll</th>
      <th scope="col">adress</th>
      <th scope="col" colspan="2">action</th>
    </tr>
  </thead>
  <tbody>
  	<?php  $x=1;?>
  	@foreach($students as $student)
  	<tr>
  		<td>{{$x++}}</td>
  		<td>{{$student->std_name}}</td>
  		<td>{{$student->email}}</td>
  		<td>{{$student->std_roll}}</td>
  		<td>{{$student->std_address}}</td>
  		<td colspan="2">
  			<a href="#" class="btn btn-warning">Edit</a>
  			<a href="#" class="btn btn-danger">Delete</a>

  		</td>
  		

  	</tr>
  	@endforeach
  


  </tbody>
</table>

	
</div>


@endsection