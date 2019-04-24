@extends('studentApp.Log')
@section('content')
<div class="card" >
  <div class="card-header">
    <h2>I n f o r m a t i o n s</h2>
  </div>
  <div class="card-body">
    <h3 class="card-title">Section I</h3>
    <p class="card-text">Text... </p>
    <a href="#" class="btn btn-primary">Read more</a>
  </div>
</div>
<br>
<div class="card-deck">
  <div class="card">
    <img src="pic.png" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="list"  style=" text-decoration-line: none;"><h5 class="card-title">List Of Std</h5></a>
      <p class="card-text">This is a longer card to check all info of student DB</p> 

    </div>
  </div>
  <div class="card">
    <img src="pic4.png" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="home/about"  style=" text-decoration-line: none;"><h5 class="card-title">About Us</h5></a>
      <p class="card-text">This is a content  is about all u wanna know about us and what this mini project is about .so enjoy and thank you </p>
      
    </div>
  </div>
  <div class="card">
    <img src="pic3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="{{route('student.create')}}" style=" text-decoration-line: none;"><h5 class="card-title">Add an Account</h5></a>
      <p class="card-text">to add a new accout .u may click on the title which make it more easier to use .</p>
      
    </div>
  </div>
</div>
@endsection