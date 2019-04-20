@extends('studentApp.layout')

@section('content')

@include('session.success')
<div class="card" >
  <h5 class="card-header">Add Std Data</h5>
  <div class="card-body" >
    <form method="POST" action="{{ route('student.store') }}"> 
    	{{csrf_field()}}
  <div class="form-group">
    <label>Student Name</label>
    <input type="text" class="form-control" name="student_name" placeholder="Enter Student Name">
   
  </div>
  <div class="form-group">
    <label>Student Email</label>
    <input type="email" class="form-control" name="student_email" placeholder="Enter Student Email">
   
  </div>
  <div class="form-group">
    <label >Student Roll</label>
    <input type="text" class="form-control" name="student_roll" placeholder="Enter Student Roll">
  </div>
 
 <div class="form-group">
    <label >Student Address</label><br>
<textarea class="form-control " name="student_address" placeholder="Enter Student Address"></textarea></div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
  </div>
</div>

@endsection