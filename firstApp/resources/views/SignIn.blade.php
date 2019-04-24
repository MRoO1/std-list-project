@extends('studentApp.layout')
@section('content')


<div class="card"  style="width: 570px; ">
    <h5 class="card-header">Admin</h5>
    <div class="row" >
<form action="{{url('/checklogin')}}" method="post" >
	  	<div class="col-sm-6" style="">
	  		<div class="card-body">
	  			
	  				<div>
	  					<label>Name</label>
	  					<input class="form-control" type="email" name="admin_name" style="width: 500px;">
	  					
	  				</div>
	  				
	  				<div style=": center;">
	  					<label>Password</label>
	  					<input class="form-control" type="password" name="admin_password" style="width: 500px;">
	  				</div>
	  				<br>	
	  				<div>
	  					 {{csrf_field()}}
                           <input type="hidden" name="_method">
	  						<input type="button" class="btn btn-primary" value="submit"  >
	  					
	  					
	  					<input type="reset" class="btn btn-primary" value="reset" >
	  				</div>
	  				
	  		</form>
	  		
            </div>
	    </div>
    </div>


@endsection