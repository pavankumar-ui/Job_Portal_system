@extends('layouts.app')
@section('content')

<div class="container mt-5">

     @include('message')

	<div class="row justify-content-center">
	<div class="col-md-6">
		<h3>Update Seeker Profile</h3>
         <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                <i class="fas fa-suitcase"></i>
                Seeker Profile  
            </div>
            <div class="card-body">


 <form method="post" action="{{route('seeker.update.profile')}}" enctype="multipart/form-data">
            		@csrf
                    <div class="form-group">
                    	<label for="Company-logo">Upload Profile Picture</label>
                        <input type="file" class="form-control" id="profile_pic" name="profile_pic">
                    </div>
                       <br>
                     @if(auth()->user()->profile_pic)
                    <div class="form-group">
     <img src="{{url('storage/'.auth()->user()->profile_pic)}}" class="img-responsive" height="100px" width="180px">
                    </div>
                  @endif
                    
                       <br>
                    <div class="form-group">
                   <label for="Company-logo">Candidate_Name:</label>
                  <input type="text" class="form-control" id="logo" name="name" value="{{auth()->user()->name}}">
                    </div> 
                    <br>



                    <div class="form-group">
    <button type="submit" class="btn btn-info" name="submit">Update Profile</button>
</div>
                 </form>
        
    </div>
</div>


       </div>


     <div class="col-md-6">
         
   <h3>Change Password</h3>

         <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                Change Password  
            </div>
            <div class="card-body">


 <form method="post" action="{{route('change.user.password')}}">
                    @csrf
                    <div class="form-group">
                        <label for="Company-logo">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Old Password">
                    </div>
                    @if($errors->has('current_password'))
    <span class="text-danger">{{$errors->first('current_password')}}</span>
    @endif
                       <br>
                     
                    <div class="form-group">
        <label for="Company-logo">Your New Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                    </div>
                    @if($errors->has('password'))
    <span class="text-danger">{{$errors->first('password')}}</span>
    @endif
                       <br>
   
      <div class="form-group">
        <label for="Company-logo">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
        </div>
        @if($errors->has('confirm_password'))
    <span class="text-danger">{{$errors->first('confirm_password')}}</span>
    @endif
            <br>                  

                    <div class="form-group">
    <button type="submit" class="btn btn-info" name="submit">Submit</button>
</div>
                 </form>

     </div>

	</div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
<h3>Upload  Resume</h3>
        <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                Upload Resume  
            </div>
            <div class="card-body">

                <form method="post" action="{{route('upload.resume')}}" enctype="multipart/form-data"> 
                    @csrf
        <div class="form-group">
            <label for="Company-logo">Upload your CV:</label>
            <input type="file" class="form-control" id="resume" name="resume">
                    </div>
                    @if($errors->has('resume'))
    <span class="text-danger">{{$errors->first('resume')}}</span>
    @endif 
                    <br>

                    <div class="form-group">
            <button type="submit" name="submit" class="btn btn-info">Upload</button>
                    </div> 

                    </form>
            </div>
    </div>

</div>



</div>


@endsection