@extends('layouts.admin.main')
@section('admin_content')

<div class="container-fluid mt-5">
	<div class="row justify-content-center">

		<div class="col-md-8">
		<h2>Create a Job Now!</h2>	
         <hr>
         <form method="post" action="{{route('job.post')}}" enctype="multipart/form-data">
         	@csrf
           <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="featured_image">Featured Image</label>
                  </div>
                  <div class="col-md-8">
             <input type="file" name="feature_image" id="feature_image" class="form-control">
                    </div>
              </div>
                </div>
                @if($errors->has('feature_image'))
    <span class="text-danger">{{$errors->first('feature_image')}}</span>
    @endif
               <br>

             <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Title</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="title" id="title" class="form-control" placeholder="Enter the Title">
                    </div>
              </div>
                </div>

                @if($errors->has('title'))
    <span class="text-danger">{{$errors->first('title')}}</span>
    @endif
                <br>


                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Description</label>
                  </div>
                  <div class="col-md-8">
                       <textarea class="form-control summernote" id="description" name="description" placeholder="enter Job description"></textarea>
                    </div>
              </div>
                </div>

                @if($errors->has('description'))
    <span class="text-danger">{{$errors->first('description')}}</span>
    @endif

                <br>


                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Roles & Responsibilities</label>
                  </div>
                  <div class="col-md-8">
                       <textarea class="form-control summernote" name="roles" id="roles" placeholder="enter Roles & Responsibility"></textarea>
                    </div>
              </div>
                </div>

                 @if($errors->has('roles'))
    <span class="text-danger">{{$errors->first('roles')}}</span>
    @endif

                <br>


                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Job Types">Job Types</label>
                  </div>
                  <div class="col-md-8">

                  	<div class="form-check">
               <input type="radio" class="form-check-input" name="job_type" id="fulltime" value="fulltime">
               <label for="Fulltime" class="form-check-label">Fulltime</label>
               </div>

               <div class="form-check">
               <input type="radio" class="form-check-input" name="job_type" id="parttime" value="parttime">
               <label for="Parttime" class="form-check-label">Parttime</label>
               </div>

               <div class="form-check">
               <input type="radio" class="form-check-input" name="job_type" id="contract" value="contract">
               <label for="Contract" class="form-check-label">Contract</label>
               </div>


                    </div>
              </div>
                </div>

                @if($errors->has('job_type'))
    <span class="text-danger">{{$errors->first('job_type')}}</span>
    @endif
                    <br>


            <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Address</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="address" class="form-control" placeholder="Enter the address" id="address">
                    </div>
              </div>
                </div>
                @if($errors->has('address'))
    <span class="text-danger">{{$errors->first('address')}}</span>
    @endif
                <br>

              <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Salary">salary</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="salary" class="form-control" placeholder="Enter the Salary (in Rs.)" id="salary">
                    </div>
              </div>
                </div>
                @if($errors->has('salary'))
    <span class="text-danger">{{$errors->first('salary')}}</span>
    @endif
                <br>

                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Application Close Date</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="date" class="form-control" id="datepicker">
                    </div>
              </div>
                </div>

                @if($errors->has('date'))
    <span class="text-danger">{{$errors->first('date')}}</span>
    @endif
                <br>
       
       <div class="form-group">

       	<button type="submit" name="submit" class="btn btn-success btn-md">Post a Job</button>
       </div>
         </form>
		</div>
		

	</div>
	

</div>

<style>
	.note-insert{
		display: none !important;
	}
</style>




@endsection