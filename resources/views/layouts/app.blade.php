<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>Job Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.6/filepond.css" integrity="sha512-+9N9eHaPFoACOB0WABsAByw8rE3wPrCdY9DSUS5vM7qjss4w9g8CcKHDULxhVL/bg3zNVad4TIRUEdSujIjxcw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    

  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">Professional Jobs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        
       <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('joblisting.index')}}">Home</a>
        </li>


        

        @if(!Auth::check())
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('create.seeker')}}">Job Seeker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('create.employer')}}">Employer</a>
        </li>
        @endif

    @if(Auth::check())
    <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ url('storage/'.auth()->user()->profile_pic) }}" 
              class="rounded-circle" width="30">&nbsp; <strong> {{auth()->user()->name}}</strong>
        </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('seeker.profile')}}">Profile</a></li>
              <li><a class="dropdown-item" href="{{route('jobs.applied')}}">Jobs Applied</a></li>
                  <li><a class="dropdown-item" id="logout" href="#">Logout</a></li>
                   </ul>
              </div>
              @endif


      <form id="form-logout" action="{{route('logout')}}" method="post">@csrf</form>

      </ul>
    </div>
  </div>
</nav>


@yield('content')
  
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script type="text/javascript">
let logout = document.getElementById('logout');
let form = document.getElementById('form-logout');

logout.addEventListener('click',function(){
    form.submit();
 });  
</script>

  </body>
</html>
















