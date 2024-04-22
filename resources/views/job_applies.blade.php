@extends('layouts.app')
@section('content')


<div class="container mt-5">
	<div class="justify-content-center">
      <h3>Applied Jobs</h3>
       
       <div class="alert alert-info alert-dismissible fade show" role="alert">
      Please check your email! if you were <b>shortlisted</b> for more updates
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

      @if($job_applied->listings !== '')
      @foreach($job_applied->listings as $listing)

      <div class="card mb-3">
      	  <div class="card-body">
      	  	 <h5 class="card-title">Job Title:  {{$listing->title}} </h5> 
      	  	   <p class="card-text">Applied On:  {{$listing->pivot->created_at}}</p>
      	  	   <p class="card-text">Job Status:
      	  	 
      	  	    @if($listing->pivot->shortlisted == 1)
      	  	   	<span class="badge rounded-pill text-bg-success">Shortlisted</span>
                 @else
                 <span class="badge rounded-pill text-bg-danger">Pending</span>
               @endif
      	  	   </p>
              <a href="{{route('joblist.show',$listing->slug)}}" class="btn btn-dark">View</a>      
         </div>
     </div>
         @endforeach
         @else
         <p class="text-dark">You have not applied to any jobs! please apply now</p>
         @endif
     </div>
 </div>




@endsection