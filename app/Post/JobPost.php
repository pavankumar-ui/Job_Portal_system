<?php

namespace App\Post;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Slug;
use App\Models\Listing;
use Auth;

class JobPost
{

  protected $listing;

  public function __construct(Listing $listing)
  {
  	$this->listing = $listing;
  }


   public function PostaJob($data):void
  {

          $img_Path= $data->file('feature_image')->store('images','public');
          $this->listing->feature_image= $img_Path;
          $this->listing->user_id = Auth::user()->id;
          $this->listing->title = $data['title'];
         $this->listing->description = $data['description'];
         $this->listing->roles = $data['roles'];
         $this->listing->job_type = $data['job_type'];
         $this->listing->application_close_date = Carbon::createFromFormat('m/d/Y',$data['date'])->format('Y-m-d');
         $this->listing->address = $data['address'];
         $this->listing->salary = $data['salary'];
         $this->listing->slug = Str::slug($data['title']).'.'. Str::uuid();
         $this->listing->save();
   }


public function ShowJobs()
{
      $listings = Listing::all();
      return view('Job_posts.showJobs',compact('listings'));
}


}



?>