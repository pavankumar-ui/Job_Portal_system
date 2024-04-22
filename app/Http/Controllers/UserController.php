<?php

namespace App\Http\Controllers;



use App\Http\Requests\RegistrationFormRequest;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
     

  const JOB_SEEKER = 'seeker';

  const JOB_POSTER = 'employer';

    public function createSeeker(){
        return view('users.seeker-register');
    }

    public function createEmployer(){
        return view('users.employer-register');
    }


    public function storeSeeker(RegistrationFormRequest $request)
    {
             
           $suser =  User::create([
                            'name' => $request->name,
                            'email' => $request->email,
                            'password' => bcrypt($request->password),
                            'user_type' => self::JOB_SEEKER,
             ]); 

            Auth::login($suser);

             $suser->sendEmailVerificationNotification();

             return response()->json('success');

             //return to_route('verification.notice')->with('SuccessMessage','Your account was created! You can login now');
    }


   public function storeEmployer(RegistrationFormRequest $request)
   {


                $euser= User::create([
                       'name' => $request->name,
                       'email' => $request->email,
                       'password' => bcrypt($request->password),
                       'user_type' => self::JOB_POSTER,
                       'user_trial' => now()->addWeek()
                    ]);

                         Auth::login($euser);
                         $euser->sendEmailVerificationNotification();

                         return response()->json('success');
                 
                 //return to_route('verification.notice')->with('SuccessMessage','Your account was created! You can login now');
   }



    public function login()
    {
        return view('users.login');
    }


    public function postLogin(Request $request)
    {
         $request->validate([
                                 'email' => 'required',
                                 'password' => 'required'
                           ]);

            $credentials = $request->only('email','password');


            if(Auth::attempt($credentials))
              {
                
                     if(auth()->user()->user_type == 'employer')
                     {
                         return redirect()->route('dashboard')->with('SuccessMessage','Loggedin Successfully');
                     }else
                     {
                      return redirect()->to('/')->with('SuccessMessage','Loggedin Successfully');
                     }
                    
              } 
            
            return back()->with('ErrorMessage','Invalid credentials! please login');   
    }


        public function CreateUserProfile()
        {
            return view('users.user_profile'); 
        }


    public function updateUserProfile(Request $request)
    {
           
           $request->validate([ 'company_name' =>'required', 
                                 ]);


           if($request->hasFile('profile_pic'))
           {
                  $profile_pic = $request->file('profile_pic')->store('profile_pic','public');

                  User::find(Auth::user()->id)->update(['profile_pic' => $profile_pic]);

           }

           $company_name = $request->company_name;
           $about_company = $request->about;

          User::find(Auth::user()->id)->update(['name' => $company_name,
                                                  'about' => $about_company]);
          return redirect()->route('user.profile')->with('profile_update','User profile updated successfully');                         
    } 


// methods for seeker profile//

    public function CreateSeekerProfile()
    {
        return view('users.seeker_profile');
    }


    public function UpdateSeekerProfile(Request $request)
   {
        if($request->hasFile('profile_pic'))
        {
          $profile_pic = $request->file('profile_pic')->store('profile_pic','public');
          User::find(Auth::user()->id)->update(['profile_pic' => $profile_pic]);
        }

    User::find(Auth::user()->id)->update($request->except('profile_pic'));
    return redirect()->back()->with('profile_update','User profile updated successfully');

   }


    public function UploadResume(Request $request)
    {
        $request->validate(['resume'=>'required|mimes:pdf,doc,docx']);         
          
          if($request->hasFile('resume'))
          {
               $resume = $request->file('resume')->store('seeker','public');
               
               $check =User::find(Auth::user()->id)->update(['resume'=> $resume]);
                //dd($check);
              return redirect()->back()->with('resume_success','Your resume has been uploaded successfully');
          }

    }



    public function ChangePassword(Request $request)
    {

       $request->validate([ 'current_password' =>'required',
                           'password' => 'required|min:8',
                         ]);

        $user = auth()->user();

        if(!Hash::check($request->current_password,$user->password))
        {
         return back()->with('password_error','Current password is incorrect');
        }

         $user->password = Hash::make($request->password);
         $user->save();

     return redirect()->back()->with('password_success','Your Password has been updated successfully');

    }


     public function jobApplied()
     {
         $job_applied =User::with('listings')->where('id',auth()->user()->id)->first(); 
         return view('job_applies',['job_applied' => $job_applied]);
     }





       public function logout()
       {
           auth()->logout();
           return redirect()->route('login');
       }


}
