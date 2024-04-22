@extends('layouts.admin.main')
@section('admin_content')

<div class="container mt-5">
<div class="row justify-content-center">


 @if(Session::has('Subscribe_warning'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{Session::get('Subscribe_warning')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

	<div class="col-md-4">
          <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Weekly - Rs.30</h5>
                   <p class="card-text">You can enjoy the subscription in a week.</p>
                      </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body text-center">
    <a href="{{route('pay.weekly')}}" class="card-link">
    	<button class="btn btn-success">Pay</button>
    </a>
 
  </div>
</div>
	</div>

	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Monthly - Rs.60</h5>
                   <p class="card-text">You can enjoy the subscription in a month.</p>
                      </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body text-center">
    <a href="{{route('pay.monthly')}}" class="card-link">
    	<button class="btn btn-success">Pay</button>
    </a>
 
  </div>
</div>
	</div>


	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Yearly - Rs.300</h5>
                   <p class="card-text">You can enjoy the subscription in a Year with more benefits.</p>
                      </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body text-center">
    <a href="{{route('pay.yearly')}}" class="card-link">
    	<button class="btn btn-success">Pay</button>
    </a>
 
  </div>
</div>
	</div>

</div>



</div>


@endsection