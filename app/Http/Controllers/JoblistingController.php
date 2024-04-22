<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;

class JoblistingController extends Controller
{
     public function index(Request $request)
    {
       
        
        $salary = $request->query('sort');
        $date = $request->query('date');
        $job_type = $request->query('job_type');

         
        $listings = Listing::query();


              if($salary == 'salary_high_to_low')
               {
                 $listings->orderByRaw('CAST(salary AS UNSIGNED) DESC');
               } 
               else if($salary == 'salary_low_to_high'){
                  $listings->orderByRaw('CAST(salary AS UNSIGNED) ASC');
              }

               


             if($date === 'latest')
            {
                $listings->orderBy('created_at','desc');
            }
            else if($date === 'oldest')
            {
                $listings->orderBy('created_at','asc');
            }

            if($job_type == 'parttime'){
                $listings->where('job_type','parttime');
            }
            else if($job_type == 'fulltime'){
                $listings->where('job_type','fulltime');
            }
            else if($job_type == 'contract'){
                $listings->where('job_type','contract');
            }


         $jobs= $listings->with('profile')->get();
         return view('home', ['jobs' => $jobs]);
    }

    public function show(Listing $listing)
    {
        return view('job_show',['listing' => $listing]);
    }


  public function company($id)
  {
      $company = User::with('jobs')
       ->where('id',$id)->where('user_type','employer')->first();
    return view('company-profile',['company' =>$company]);
  }





}
