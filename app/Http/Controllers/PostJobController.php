<?php

namespace App\Http\Controllers;


use App\Http\Middleware\isPremiumUser;
use App\Http\Middleware\isEmployer;
use Illuminate\Http\Request;
use App\Http\Requests\JobPostFormRequest;
use App\Post\JobPost;
use Illuminate\Support\Str;
use Carbon;
use Illuminate\Support\Slug;
use Auth;
use App\Models\Listing;


class PostJobController extends Controller
{
    
      protected $job;

      public function __construct(JobPost $job)
      {
        $this->job = $job;
        $this->middleware('auth');
        $this->middleware(isPremiumUser::class)->only(['create','PostaJob']);
        $this->middleware(isEmployer::class);
      }


      public function ShowJobs()
      {
            $jobs = Listing::where('user_id',Auth::user()->id)->get();
            return view('Job_posts.showJobs',compact('jobs'));
      }


    public function create()
    {
        return view('Job_posts.create_job');
    }


    public function PostaJob(JobPostFormRequest $request)
    {
        
              $this->job->PostaJob($request);
           //dd($listing);
        return redirect()->route('job.show')->with('Post_success','Job posted Successfully');
    }

       

        public function EditJob($id)
        {
            $listing = Listing::findorFail($id);
            return view('Job_posts.editJobs',compact('listing'));
        }


 public function UpdateJob(Request $request)
 {
      
      $id = $request->id;

       if($request->hasFile('feature_image'))
       {
            
          $feature_image = $request->file('feature_image')->store('images','public');

             Listing::findorfail($id)->update([
                               'feature_image' => $feature_image
                             ]);
       }

                 $date = $request->date;
                 //$date = str_replace('-', '', $date);
                 $listing= Listing::findorFail($id);
          $listing->title = $request->title;
         $listing->description = $request->description;
         $listing->roles = $request->roles;
         $listing->job_type = $request->job_type;
     $listing->application_close_date = Carbon\Carbon::createFromFormat('m/d/Y',$date)->format('Y-m-d');
         $listing->address = $request->address;
         $listing->salary = $request->salary;
         $listing->slug = Str::slug($request->title).'.'. Str::uuid();
         $listing->save();
            //dd($listing);

        return redirect()->back()->with('Update_success','Job updated Successfully');
     }



     public function DeleteJob($id)
     {
        
           Listing::findorFail($id)->delete();
            return redirect()
                    ->route('job.show')
                   ->with('Delete_success','Job Deleted Successfully');
     }

}
