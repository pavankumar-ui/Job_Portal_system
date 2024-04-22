

 @if(Session::has('SuccessMessage'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('SuccessMessage')}}
     	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 @endif

 @if(Session::has('ErrorMessage'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
 {{Session::get('ErrorMessage')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
 @endif

 @if(Session::has('pay_success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('pay_success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(Session::has('pay_error'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{Session::get('pay_error')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  @if(Session::has('Subscribe_warning'))
 <div class="alert alert-info alert-dismissible fade show" role="alert">
    {{Session::get('Subscribe_warning')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  @if(Session::has('premium_member'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{Session::get('premium_member')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


@if(Session::has('Post_success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('Post_success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  @if(Session::has('Update_success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('Update_success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(Session::has('Delete_success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('Delete_success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


@if(Session::has('profile_update'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('profile_update')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(Session::has('password_error'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{Session::get('password_error')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(Session::has('password_success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('password_success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  @if(Session::has('resume_success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('resume_success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  @if(Session::has('ShortlistSuccess'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('ShortlistSuccess')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


@if(Session::has('ApplySuccess'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('ApplySuccess')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif





