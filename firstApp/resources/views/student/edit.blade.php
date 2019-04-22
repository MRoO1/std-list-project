@extends('studentApp.layout')

@section('content')

@include('session.success')
<div class="card" >
  <h5 class="card-header">Update Std Data</h5>
  <div class="row" >

	  	<div class="col-sm-6">
	  		 <div class="card-body">
	  		<form method="POST" action="{{ route('student.update',$student->id ) }}"> 
	  			<input type="hidden" name="_method" value="PUT">
	    	{{csrf_field()}}
	  <div class="form-group">
	    <label>Student Name</label>
	    <input type="text" class="form-control" name="student_name" placeholder="Enter Student Name" value="{{$student->std_name}}">
	   
	  </div>
	  <div class="form-group">
	    <label>Student Email</label>
	    <input type="email" class="form-control" name="student_email" placeholder="Enter Student Email" value="{{$student->email}}">
	   
	  </div>
	  <div class="form-group">
	    <label >Student Roll</label>
	    <input type="text" class="form-control" name="student_roll" placeholder="Enter Student Roll" value="{{$student->std_roll}}">
	  </div>
	 
	 <div class="form-group">
	    <label >Student Address</label><br>
	<textarea class="form-control " name="student_address" placeholder="Enter Student Address">{{$student->std_address}}</textarea></div>
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
	  	</div>
	  	</div>

  	<div class="col-sm-6" style="color: red;">
  		
@if($errors->any())
        @foreach($errors->all() as $error)
      <li> {{ $error }}</li>
        @endforeach

@endif

  	</div>
    

  </div>

</div>

@endsection