<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PostJobController;
use App\Http\Controllers\JoblistingController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\FileUploadController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\middleware\isPremiumUser;
use App\Http\middleware\CheckAuth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home page Job Listing Routes//
Route::get('/',[JoblistingController::class,'index'])->name('joblisting.index');
Route::get('/jobs/{listing:slug}',[JoblistingController::class,'show'])->name('joblist.show');
Route::get('/jobs/company/{id}',[JoblistingController::class,'company'])->name('company');





Route::post('joblisting/resume/upload',[FileUploadController::class,"storeResume"])->name('file.upload');





Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/login');
})->middleware(['auth','signed'])->name('verification.verify');



Route::get('/register/seeker',[UserController::class,"createSeeker"])->name('create.seeker')->middleware(CheckAuth::class);
Route::post('/register/seeker/store',[UserController::class,"storeSeeker"])
      ->name('store.seeker');


Route::get('/register/employer',[UserController::class,"createEmployer"])->name('create.employer')->middleware(CheckAuth::class);
Route::post('/register/employer/store',[UserController::class,"storeEmployer"])->name('store.employer');

//user profile update for employer//
Route::get('user/profile',[UserController::class,"CreateUserProfile"])->name('user.profile')->middleware('auth');
Route::post('update/user/profile',[UserController::class,"updateUserProfile"])->name('user.update.profile')->middleware('auth');



Route::get('/login',[UserController::class,"login"])->name('login');
Route::post('/login',[UserController::class,"postLogin"])->name("login.post");
Route::post('/logout',[UserController::class,"logout"])->name('logout');


// profile Update for job seekers//
Route::get('user/profile/seeker',[UserController::class,"CreateSeekerProfile"])->name('seeker.profile')->middleware('auth');
Route::post('update/profile/seeker',[UserController::class,"UpdateSeekerProfile"])->name('seeker.update.profile')->middleware('auth');

Route::post('/upload/resume',[UserController::class,"UploadResume"])->name('upload.resume')->middleware('auth');

Route::get('user/jobs/applied',[UserController::class,"jobApplied"])->name('jobs.applied')->middleware('auth','verified');


//for both seekers and employers//
Route::post('change/user/password',[UserController::class,"ChangePassword"])->name('change.user.password');



Route::get('/dashboard',[DashboardController::class,"index"])
->middleware(['verified',isPremiumUser::class])
->name('dashboard');


Route::get('/verify',[DashboardController::class,"verify"])->name('verification.notice');


//Subscription Routes for employer//
Route::get('subscribe',[SubscriptionController::class,"subscribe"])->name('subscribe');
Route::get('pay/weekly/subscription',[SubscriptionController::class,"initiatePayment"])->name('pay.weekly');
Route::get('pay/monthly/subscription',[SubscriptionController::class,"initiatePayment"])->name('pay.monthly');
Route::get('pay/yearly/subscription',[SubscriptionController::class,"initiatePayment"])->name('pay.yearly');

Route::get('payment/success',[SubscriptionController::class,'paymentSuccess'])->name('payment.success');
Route::get('payment/cancel',[SubscriptionController::class,'cancel'])->name('payment.cancel');

//Job Routes//



Route::get('job/create',[PostJobController::class,'create'])->name('job.create');
Route::post('job/post',[PostJobController::class,'PostaJob'])->name('job.post');
Route::get('job/show',[PostJobController::class,'ShowJobs'])->name('job.show');
Route::get('job/edit/{id}',[PostJobController::class,'EditJob'])->name('job.edit');
Route::post('job/update',[PostJobController::class,'UpdateJob'])->name('job.update');
Route::get('job/delete/{id}',[PostJobController::class,'DeleteJob'])->name('job.delete');


Route::get('applicants',[ApplicantController::class,'index'])->name('applicant.index');
Route::get('applicants/{listing:slug}',[ApplicantController::class,'show'])
  ->name('applicant.show');
  Route::post('applicant/shortlist/{listingId}/{userId}',[ApplicantController::class,'Updateshortlist'])->name('applicant.shortlist');

  Route::post('application/{listingId}/submit',[ApplicantController::class,'apply'])->name('application.submit');






