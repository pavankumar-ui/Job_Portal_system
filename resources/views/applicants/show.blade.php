@extends('layouts.admin.main')
@section('admin_content')

<div class="contaniner mt-5">
<div class="row">

	<div class="col-md-8 mt-5">
<h1>{{$listings->title}}</h1>
@include('message')
  </div>

@foreach($listings->users as $user)

     <div class="card mt-5 {{$user->pivot->shortlisted?'card-bg' : ''}}">
       <div class="row g-0">

      	  <div class="col-auto">
      		@if($user->profile_pic)
          <img src="{{url('storage/'.$user->profile_pic)}}" alt="profile_picture" class="rounded-circle" style="width:150px; height:120px;">
        @else
        <img src="images\no_image.jpg" class="rounded-circle" width="150px">
        @endif
        </div>


      <div class="col">
          <div class="card-body">
          	<p class="fw-bold">{{$user->name}}</p>
          	<p class="card-text">{{$user->email}}</p>
          	<p class="card-text">Applied On:<b> {{$user->pivot->created_at->format('Y-m-d')}}</b></p>  
           </div>
        </div>


<div class="col-auto align-self-center">

 <form method="post" action="{{route('applicant.shortlist',[$listings->id,$user->id])}}">
@csrf

<a href="{{url('storage/'.$user->resume) }}" target="_blank" class="btn btn-primary" 
	                       role="button"><i class="fa fa-download"></i>&nbsp;Resume</a>

<button type="submit" class="{{$user->pivot->shortlisted ? 'btn btn-success': 'btn btn-danger'}}">
	<i class="{{$user->pivot->shortlisted ? 'fa fa-thumbs-up' : 'fa fa-thumbs-down'}}"></i>
	 {{$user->pivot->shortlisted ? 'shortlisted': 'shortlist'}} 
</button> 

  </form>

   </div>
    </div>
</div>
@endforeach


 </div>
</div>


<style>
	.card-bg{
    background-color:green;
}


</style>

@endsection
