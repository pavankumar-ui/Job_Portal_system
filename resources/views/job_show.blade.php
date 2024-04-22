@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <img src="{{url('storage/'.$listing->feature_image)}}" class="card-img-top" alt="Cover Image" style="height: 150px; object-fit: cover;">
        <div class="card-body">
         @include('message')

         <a href="{{route('company',[$listing->profile->id])}}">
           <img src="{{url('storage/'.$listing->profile->profile_pic)}}" width="60px" height="50px" class="rounded-circle">
         </a>
        	<b>{{$listing->profile->name}}
          <h2 class="card-title">{{$listing->title}}</h2>
          <span class="badge bg-primary">{{$listing->job_type}}</span>
          <p>Salary: <strong> Rs. {{number_format($listing->salary,2)}} </strong></p>
          <p>Address: <strong> {{$listing->address}}  </strong></p>
          <h4 class="mt-4">Description</h4>
          <p class="card-text">{!! $listing->description !!}</p>
          
          <h4>Roles and Responsibilities</h4>
          <p> {!! $listing->roles !!} </p>
          
          <p class="card-text mt-4">Application closing date: {{$listing->application_close_date}}</p>

          
          @if(Auth::check())
          @if(auth()->user()->resume)
         <form method="POST" action="{{route('application.submit',[$listing->id])}}">
         	@csrf
          <button href="#" class="btn btn-primary mt-3">Apply Now</button>
          </form>

          @else 
          <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
               data-bs-target="#exampleModal">Apply</button>
          @endif

          @else
            <h4 class="text-danger ">Please login to Apply</h4>
          @endif

         <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<form method="POST" action="{{route('application.submit',[$listing->id])}}" enctype="multipart/form-data">
@csrf
@method('POST')
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Resume To Apply for Job!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="file">
      </div>
      <div class="modal-footer">
        <button type="submit" id="btnApply" disabled class="btn btn-success">Apply</button>
      </div>
    </div>
  </div>

</form>


</div>


        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.30.6/filepond.min.js" integrity="sha512-6ALP4noOAk3f/wpnN0qAWdkNNTpQcu0ArDsPVVFi3GIKbTGHswBnW3o/8rsxDTGF4BGYpI4E6DlrtyGFgBifjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[type="file"]');
 //FilePond.parse(document.body);
    // Create a FilePond instance
    const pond = FilePond.create(inputElement);

    var url = "{{route('file.upload')}}";

 FilePond.setOptions({
    server: {
        url: url,
        process: {
                    method: "POST",
                    withCredentials: false,
                     headers:{
                             'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                          },
                    ondata: (formData)=>{
                                          formData.append('file', pond.getFiles()[0].file, pond.getFiles()[0].file.name)

                                          return formData
                                         },
                    onload:(response)=>{
                                document.getElementById('btnApply').removeAttribute('disabled')
                                },
                    onerror:(response)=>{
                                         alert('error while Uploading.....:',response);
                                     },
                },
         },
});
</script>



@endsection