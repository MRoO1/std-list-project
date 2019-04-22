@extends('studentApp.layout')


@section('content')

      <form class="form-inline mt-2 mt-md-0" style="float:right;">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>


<!-- from here to layout -->

<div class="container">
  @include('session.success')
	<h1>Student List </h1>
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
  			 <a href="{{route('student.edit',$student->id)}}" class="btn btn-success">Edit</a>
        <form style="display: inline-block;" method="POST"  action="{{route('student.destroy',$student->id)}}">
          {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
  			

  		</td>
  		

  	</tr>
  	@endforeach
  


  </tbody>
</table>

	
</div>


@endsection