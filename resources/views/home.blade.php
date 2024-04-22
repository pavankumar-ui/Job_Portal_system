@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between">
          <h4>Recommended Jobs</h4> 

          <div class="dropdown">
              <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Salary
            </button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('joblisting.index',['sort' => 'salary_high_to_low'])}}">High To Low</a></li>
                   <li><a class="dropdown-item" href="{{route('joblisting.index',['sort' => 'salary_low_to_high'])}}">Low To High</a></li>
                </ul>


          <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Date
            </button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('joblisting.index',['date' => 'latest'])}}">Latest</a></li>
                   <li><a class="dropdown-item" href="{{route('joblisting.index',['date' => 'oldest'])}}">Oldest</a></li>
                </ul>


            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Job Type
            </button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{route('joblisting.index',['job_type' => 'parttime'])}}">Parttime</a></li>
                      <li><a class="dropdown-item" href="{{route('joblisting.index',['job_type' => 'fulltime'])}}">Fulltime</a></li>
                      <li><a class="dropdown-item" href="{{route('joblisting.index',['job_type' => 'contract'])}}">Contract</a></li>
                </ul>    


             </div>
                </div>

  <div class="row mt-2 g-1">

@foreach($jobs as $job)
    <div class="col-md-3">
       <div class="card p-2 {{$job->job_type}}">
          <div class="text-right">
            <small class="badge text-bg-info">{{$job->job_type}}</small></div>
            <div class="text-center mt-2 p-3">
             
               <img src="{{url('storage/'.$job->profile->profile_pic)}}" height="60" width="60px" class="rounded-circle" alt=""/>
               <span class="d-block font-weight-bold">{{$job->title}}</span>
                  <hr>
             <span>{{$job->profile->name}}</span>
               <div class="d-flex flex-row align-items-center justify-content-center">
                  <small class="ml-1">{{$job->address}}</small>
               </div>
               <div class="d-flex justify-content-between mt-3">
                 <span>Rs.{{number_format($job->salary,2)}}</span>
                   <a href="{{route('joblist.show',$job->slug)}}">
                    <button class="btn btn-sm btn-dark">Apply Now</button></a>
               </div>
           </div>
       </div>
   </div>
@endforeach

</div>


<style>
  
.fulltime{
  background-color: seagreen;
  color:#fff;
}

.parttime{
   background-color: indianred;
   color:#fff;
}

.contract{
  background-color: midnightblue;
  color:#fff;
}


</style>
@endsection