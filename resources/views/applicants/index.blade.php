@extends('layouts.admin.main')
@section('admin_content')



<div class="container mt-5"> 
<div class="row justify-content-center">


<div class="card mb-4">
                            <div class="card-header bg-dark text-white">
                                <i class="fas fa-users me-1"></i>
                               Listing Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Created On</th>
                                            <th>Total Applicants</th>
                                            <th>View Job</th>
                                            <th>View Applicants</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	 @foreach($listings as $listing)
                                        <tr>
                                            <td>{{$listing->title}}</td>
                                            <td>{{$listing->created_at->format('y-m-d')}}</td>
                                            <td>{{$listing->users_count}}</td>
                                            <td>View</td>
                                            <td><a href="{{route('applicant.show',$listing->slug)}}" class="btn btn-info"><i class="fas fa-users">Applicants</i></a></td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

     </div>

</div>


 @endsection