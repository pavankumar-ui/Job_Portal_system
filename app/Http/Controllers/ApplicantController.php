<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Listing;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\ShortlistMail;

class ApplicantController extends Controller
{
    public function index()
    {
        $listings = Listing::withCount('users')->where('user_id',auth()->user()->id)
                    ->latest()->get();
        //$records = DB::table('listing_user')->whereIn('listing_id',$listings->pluck('id'))->get();
        //dd($records);

        //dd($listings);
        return view('applicants.index',['listings' => $listings]);
    }

    public function show(Listing $listing)
    {
       
           $this->authorize('view',$listing);
       $listings = Listing::with('users')->where('slug',$listing->slug)->first();
            return view('applicants.show',['listings' => $listings]);
       //dd($applicants->users());
    }

   public function Updateshortlist($listingId,$userId)
   {
        $listing = Listing::find($listingId);
        $user = User::find($userId);
        $targetemail = $user->email;
                         //if listing id is selected then update the user shortlist//
        if($listing)
        {
             $listing->users()->updateExistingPivot($userId,['shortlisted' => true]);
            
           Mail::to($targetemail)->queue(new ShortlistMail($user->name,$listing->title)); 
             return back()->with('ShortlistSuccess','Candidate is shortlisted  successfully');   
         }
   }



    public function apply($listingId)
   {
       $user = auth()->user();
       $user->listings()->syncWithoutDetaching($listingId);

       return back()->with('ApplySuccess','Your application was successfully submitted');
   }

}
