@extends('layouts.admin.main')
@section('admin_content')

<div class="container mt-5">

	<div class="row justify-content-center">
	<div class="col-md-8">
		<h3 class="text-dark">Your Jobs</h3>

        @include('message')
         <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                <i class="fas fa-table me-1"></i>
                All Jobs  
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   
                    
                    <tbody>

                    	@foreach($jobs as $job)
                        <tr>
                            <td>{{$job->title}}</td>
                           <td>{{$job->created_at->format('Y-m-d')}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-2">
        <a href="{{route('job.edit',$job->id)}}" class="btn btn-info" role="button"><i class="fas fa-edit"></i></a>
                       </div>
                          <div class="col-md-2">

          <a href="{{route('job.delete',$job->id)}}" class="btn btn-danger" id="delete" role="button"><i class="fas fa-trash-alt"></i></a>

          
                              </div>
                               </div>
                            </td>

                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>




       </div>
	</div>
</div>



@endsection