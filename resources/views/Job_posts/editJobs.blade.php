@extends('layouts.admin.main')
@section('admin_content')

<div class="container-fluid mt-5">
	<div class="row justify-content-center">
         @include('message')
		<div class="col-md-8">
		<h2>Update The  Job</h2>	
         <hr>
         <form method="post" action="{{route('job.update')}}" enctype="multipart/form-data">
         	@csrf
            <input type="hidden" name="id" value="{{$listing->id}}">
        
           <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="featured_image">Featured Image</label>
                  </div>
                  <div class="col-md-4">
             <input type="file" name="feature_image" id="feature_image" class="form-control">
                    </div>
                  
                  <div class="col-md-5">
                    @if($listing->feature_image)
             <img src="{{url('storage/'.$listing->feature_image)}}" id="img_Show" class="img-responsive" height="60px" width="70px">
    @else
           <img src="" class="img-responsive" height="60px" width="70px">
@endif

                  </div>


              </div>
                </div>
                
               <br>

             <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Title</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="title" id="title" class="form-control" value="{{$listing->title}}">
                    </div>
              </div>
                </div>

                <br>


                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Description</label>
                  </div>
                  <div class="col-md-8">
                       <textarea class="form-control summernote" id="description" name="description" placeholder="enter Job description">{!! $listing->description !!}</textarea>
                    </div>
              </div>
                </div>


                <br>


                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Roles & Responsibilities</label>
                  </div>
                  <div class="col-md-8">
                       <textarea class="form-control summernote" name="roles" id="roles" placeholder="enter Roles & Responsibility">{!! $listing->roles !!}</textarea>
                    </div>
              </div>
                </div>

                <br>


                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Job Types">Job Types</label>
                  </div>
                  <div class="col-md-8">

                  	<div class="form-check">
               <input type="radio" class="form-check-input" name="job_type" id="fulltime" value="fulltime" {{$listing->job_type === 'fulltime' ? 'checked': ''}}>
               <label for="Fulltime" class="form-check-label">Fulltime</label>
               </div>

               <div class="form-check">
               <input type="radio" class="form-check-input" name="job_type" id="parttime" value="parttime" {{$listing->job_type === 'parttime' ? 'checked': ''}}>
               
               <label for="Parttime" class="form-check-label">Parttime</label>
               </div>

               <div class="form-check">
               <input type="radio" class="form-check-input" name="job_type" id="contract" value="contract" {{$listing->job_type === 'contract' ? 'checked': ''}}>
               
               <label for="Contract" class="form-check-label">Contract</label>
               </div>


                    </div>
              </div>
                </div>

                    <br>


            <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Address</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="address" class="form-control" value="{{$listing->address}}" id="address">
                    </div>
              </div>
                </div>
                
                <br>

              <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Salary">salary</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="salary" class="form-control" value="{{$listing->salary}}" id="salary">
                    </div>
              </div>
                </div>
            
                <br>

                <div class="form-group">
             	<div class="row">
             	    <div class="col-md-3"> 	 
             	<label for="Title">Application Close Date</label>
                  </div>
                  <div class="col-md-8">
             <input type="text" name="date" class="form-control" id="datepicker" value="{{$listing->application_close_date}}">
                    </div>
              </div>
                </div>

               
                <br>
       
       <div class="form-group">

       	<button type="submit" name="submit" class="btn btn-success btn-md">Update a Job</button>
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

<script>
    $(document).ready(function(){

      $('#feature_image').change(function(e){
        
            

         })

    });

</script>



@endsection