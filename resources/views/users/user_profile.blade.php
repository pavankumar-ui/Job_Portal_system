@extends('layouts.admin.main')
@section('admin_content')


<div class="container mt-5">
 @include('message')
	<div class="row justify-content-center">
	<div class="col-md-6">
		<h3 class="text-dark">Update User Profile</h3>
         <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                <i class="fas fa-user me-1"></i>
                Update Profile  
            </div>
            <div class="card-body">


   <form method="post" action="{{route('user.update.profile')}}" enctype="multipart/form-data">
            		@csrf
                    <div class="form-group">
                    	<label for="Company-logo">Company_logo</label>
                        <input type="file" class="form-control" id="logo" name="profile_pic">
                    </div>
                     @if($errors->has('profile_pic'))
    <span class="text-danger">{{$errors->first('profile_pic')}}</span>
    @endif
                       <br>
                      @if(auth()->user()->profile_pic)
                    <div class="form-group">
     <img src="{{url('storage/'.auth()->user()->profile_pic) }}" class="img-responsive" height="60px" width="80px">
                    </div>
                    @endif
                       <br>
                    <div class="form-group">
                   <label for="Company-logo">Company_Name</label>
                  <input type="text" class="form-control" id="company_name" name="company_name" value="{{auth()->user()->name}}">
                    </div> 

                    @if($errors->has('company_name'))
    <span class="text-danger">{{$errors->first('company_name')}}</span>
    @endif
                    <br>

                    <div class="form-group">
                   <label for="Company-logo">About Company</label>
                  <textarea id="about" class="form-control summernote" name="about">{{auth()->user()->about}}</textarea>
                    </div> 

                    @if($errors->has('about'))
    <span class="text-danger">{{$errors->first('about')}}</span>
    @endif
                    <br>

                    <div class="form-group">
    <button type="submit" class="btn btn-success" name="submit">Update Profile</button>
</div>
                 </form>
        
    </div>
</div>




       </div>

  <div class="col-md-6">
    <h3 class="text-dark">Change Password</h3>
         <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                <i class="fas fa-user me-1"></i>
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



@endsection