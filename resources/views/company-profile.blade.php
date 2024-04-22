@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center mt-2">
    <div class="col">
      <div class="hero-section pt-2" style="background-color:#f5f5f5;width:100%;height:200px;">
        <img src="{{url('images\company_image.jpg')}}" style="width: 100%; height:350px;">
      </div>
    </div>
  </div>
  <br><br><br><br><hr>
  <div class="row mt-5">
    <div class="col">
      <img src="{{url('storage/'.$company->profile_pic)}}" alt="Company Logo" width="60px" class="img-fluid">
      <h2>{{$company->name}}</h2>
    </div>
  </div>
  
  <div class="row mt-5">
    <div class="col">
      <h3>About</h3>
      <p>{!! $company->about !!}</p>
    </div>
  </div>
  
  <div class="row mt-5">
    <div class="col-md-8">
      <h3>List of Jobs</h3>
      @foreach($company->jobs as $job)
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">{{$job->title}}</h5>
          <p class="card-text">{{$job->address}} </p>
          <p class="card-text">Salary: Rs. {{number_format($job->salary,2)}} per month</p>
          <a href="{{route('joblist.show',$job->slug)}}" class="btn btn-dark">View</a>
        </div>
      </div>
   @endforeach


    </div>
  </div>
</div>

@endsection