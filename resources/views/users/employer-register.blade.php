@extends('layouts.app')

@section('content')

<div class="container-fluid">
 <div class="row">
    <div class="col-md-6 mt-4">
     <h1 class="text-success">Looking for an employee?</h1>
     <h3>Please create an Account</h3>
     <img src="{{url('images\login_img.jpg')}}" width="660px" height="350px" />
    </div>

     <div class="col-md-6 mt-4">
<div class="card" id="card">
	<div class="card-header bg-success text-white">Register</div>
	<div class="card-body bg-dark">

    <p class="card-title text-white"><i>Sign Up now to post a job!</i></p>

<form method="post" action="#" enctype="multipart/form-data" id="registrationForm">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Fullname" required>
    @if($errors->has('name'))
    <span class="text-danger">{{$errors->first('name')}}</span>
    @endif
  </div>
  <br>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email" required>
    @if($errors->has('email'))
    <span class="text-danger">{{$errors->first('email')}}</span>
    @endif

  </div>
  <br>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"
     class="form-control" id="exampleInputPassword1" placeholder="password" name="password" required>
   
   @if($errors->has('password'))
    <span class="text-danger">{{$errors->first('password')}}</span>
    @endif

  </div><br>
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-md btn-success" id="btnRegister">Register</button>
</div>
</form>

	</div>
        </div>

        <div id="message"></div>
            </div>
    </div>
  </div>

<script type="text/javascript">
  
              var url = "{{route('store.employer')}}";

            document.getElementById('btnRegister').addEventListener('click',(event)=>{
            var form = document.getElementById("registrationForm");
            var card = document.getElementById("card");
              var formData = new FormData(form);
              var MessageDiv = document.getElementById('message');
              MessageDiv.innerHTML ='';
              var button = event.target
              button.disabled = true;
              //button.style.bgcolor = 'primary'; 
              button.innerHTML = 'sending email......';

              fetch(url,{
                           method : "POST",
                           headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           },
                           body: formData
              }).then((response => {
                          
                          if(response.ok){
                            return response.json()
                          }else {
                            throw new Error('Error');
                          }          
           
              })).then((data =>{
                           
                          button.innerHTML = "Register"
                          button.disabled = false
                          MessageDiv.innerHTML = '<div class="alert alert-success">Registration was successful, please check your email to verify it!</div>'
                          card.style.display = 'none'

              })).catch((error =>{
                                     button.innerHTML = 'Register'
                                     button.disabled = false
                                     MessageDiv.innerHTML = '<div class="alert alert-danger">Something went wrong! please try again</div>'
              }))



  });



</script>
  
@endsection