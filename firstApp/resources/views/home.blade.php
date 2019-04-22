@extends('studentApp.layout')
@section('content')

<div class="card" style="float: left" >
    <h5 class="card-header">Student</h5>
    <div class="row" >

	  	<div class="col-sm-6" style="width: 570px;">
	  		<div class="card-body">
	  			<form>
	  				<div>
	  					<label>Name</label>
	  					<input class="form-control" type="text" name="student_name" style="width: 500px;">
	  					
	  				</div>
	  				
	  				<div>
	  					<label>Password</label>
	  					<input class="form-control" type="password" name="student_password" style="width: 500px;">
	  				</div>
	  				<br>
	  				<div>
	  					<input type="button" class="btn btn-primary" value="submit">
	  					<input type="reset" class="btn btn-primary" value="reset">
	  				</div>
	  				
	  			</form>
	  		
            </div>
	    </div>
    </div>
</div>
<div class="card"  style="float: right;">
    <h5 class="card-header">Admine</h5>
    <div class="row" >

	  	<div class="col-sm-6" style="width: 570px;">
	  		<div class="card-body">
	  			<form>
	  				<div>
	  					<label>Name</label>
	  					<input class="form-control" type="text" name="admine_name" style="width: 500px;">
	  					
	  				</div>
	  				
	  				<div style=": center;">
	  					<label>Password</label>
	  					<input class="form-control" type="password" name="admine_password" style="width: 500px;">
	  				</div>
	  				<br>	
	  				<div>
	  					<input type="button" class="btn btn-primary" value="submit" >
	  					<input type="reset" class="btn btn-primary" value="reset">
	  				</div>
	  				
	  			</form>
	  		
            </div>
	    </div>
    </div>
</div>


@endsection