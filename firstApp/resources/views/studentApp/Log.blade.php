<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Student App</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!--
    	by using balde templating engine we can inject a php  vriable ,
    	functions and a lot  morething  in html view files 

    <?php //include()
    ?> -->
  </head>
  <body class="d-flex flex-column h-100">
    <header>


  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
  
  

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/home')}}">Home</a>
        </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('student/create')}}">Add Student</a>
          <a class="dropdown-item" href="{{url('/list')}}">Student list</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Courses</a>
        </li>
      </ul>

      <!--<div>
        <a href="" class="sign">Sign Up</a>
        <a href="" class="sign">Sign In</a>
      </div>-->
      <button class="btn btn-outline-warning my-1 my-sm-0"   type="submit" >LogOut</button>

    </div>
  </nav>
</header>







<main>
<br><br><br>
  <div></div>

<div class="container">  @yield('content')</div>


</main>






<footer class="footer mt-auto py">
  <div class="container">
    <span ><footer><p>MyWebSite &copy; 2019</p></footer></span>
  </div>
</footer>
</body>
</html>