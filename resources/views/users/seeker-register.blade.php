@extends('layouts.app')

@section('content')

<div class="container-fluid">
 <div class="row">
    <div class="col-md-6 mt-4">
     <h1 class="text-primary">Looking for a Job?</h1>
     <h3 class="text-bold">Please create an Account</h3>
     <img src="{{url('images\job_seeker.jpg')}}" class="img-responsive" width="690px" height="350px" />
    </div>

     <div class="col-md-6 mt-4">
<div class="card" id="card">
	<div class="card-header bg-primary text-white">Register</div>
	<div class="card-body bg-dark">
		<p class="card-title text-white"><i>Sign up now to search for a Job Openings!</i></p>
<br>
<form method="post" action="#" id="RegistrationForm">
	@csrf
    
    <div class="form-group">
    <label class="text-white" for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" 
              placeholder="Fullname">
    @if($errors->has('name'))
    <span class="text-danger">{{$errors->first('name')}}</span>
    @endif
  </div><br>

  <div class="form-group">
    <label class="text-white" for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    @if($errors->has('email'))
    <span class="text-danger">{{$errors->first('email')}}</span>
    @endif

  </div>


  <div class="form-group">
    <label class="text-white" for="exampleInputPassword1">Password</label>
    <input type="password"
     class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
   
   @if($errors->has('password'))
    <span class="text-danger">{{$errors->first('password')}}</span>
    @endif

  </div><br>
  <div class="d-grid gap-2">
  <button type="submit" id="btnRegister" class="btn btn-info">Register</button>
</div>
</form>

	</div>
        </div>

<div id="message"></div>
            </div>
    </div>
  </div>


<script type="text/javascript">
  

     var url = "{{route('store.seeker')}}";
     document.getElementById('btnRegister').addEventListener('click',(event)=>{
            
            //event.preventDefault();
            var form = document.getElementById("RegistrationForm");
            var card = document.getElementById("card");

           var formData  = new FormData(form);
           var MessageDiv = document.getElementById("message");
           MessageDiv.innerHTML = '';
           var button = event.target
           button.disabled = true;
           button.innerHTML = "sending email.....";

           fetch(url,{
                           method : "POST",
                           headers :{
                                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                           },
                           body : formData
           
           }).then((response=>{

                      if(response.ok)
                      {
                        return response.json()
                      }else
                      {
                        throw new Error('Error');
                      }
           })).then((data =>{
                   
                   button.innerHTML = "Register"
                   button.disabled = false
                   MessageDiv.innerHTML = '<div class="alert alert-success">Registeration successfull, please check your email to verify it!</div>'
                     card.style.display = 'none'
           
           })).catch((error =>{
                                     button.innerHTML = 'Register'
                                     button.disabled = false
                                     MessageDiv.innerHTML = '<div class="alert alert-danger">Something went wrong! please try again</div>'
              }))
     });

</script>


@endsection