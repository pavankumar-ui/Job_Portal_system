@extends('layouts.app')

@section('content')

<div class="container-fluid">

  <div class="row justify-content-center">
    
    <div class="col-md-6 mt-4">

         <div class="shadow-lg bg-light">
          <h2 class="text-danger">Login now</h2>
        <h4 class="text-primary"><i>Your Talent Determines a Lot!</i></h4><br>
          <img src="images/sign_up.jpg" class="img-responsive" height="230px" width="650px">
        </div>
    </div>


     <div class="col-md-6 mt-4">

@include('message')

<div class="card shadow-lg">
	<div class="card-header bg-dark text-white">Login</div>
	<div class="card-body bg-light">

    <b class="card-title"><i>All the best for your future Login now!</i></b>
<br>
<form method="post" action="{{route('login.post')}}" enctype="multipart/form-data">
	@csrf
  <br>
  <div class="form-group">
    <div class="row">
      <label for="email">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter Your email">
    </div>
    @if($errors->has('email'))
    <span class="text-danger">{{$errors->first('email')}}</span>
    @endif

  </div><br>

  <div class="form-group">

    <div class="row">
      <label for="password">Password</label>
    <input type="password"
     class="form-control" id="exampleInputPassword1" placeholder="enter Your password" name="password">
   </div>
   @if($errors->has('password'))
    <span class="text-danger">{{$errors->first('password')}}</span>
    @endif

  </div><br>
  <div class="d-grid gap-2 col-1 mx-auto">
  <button type="submit" class="btn btn-md btn-info">Login</button>
</form>
</div>

	</div>
        </div>
            </div>
          </div>
  </div>



@endsection