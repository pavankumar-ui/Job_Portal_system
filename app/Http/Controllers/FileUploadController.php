<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class FileUploadController extends Controller
{
    public function storeResume(Request $request)
    {
        
         if($request->hasFile('file'))
         {
           
          $resume = $request->file('file')->store('resume','public');
          $check = User::find(auth()->user()->id)->update(
                   ['resume' => $resume
                   ]);
          //dd($check);

           return response()->json(['success' =>true]);
          }

             return response()->json(['error' => 'error']);
     }

    } 
    
    


?>
