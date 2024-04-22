<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DonotAllowUserToMakePayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if($request->user()->billing_ends > date('Y-m-d'))
         {
            return redirect()->route('dashboard')->with('premium_member','You are already a premium Paid member');
         }else
         {
            return redirect()->route('subscribe');
         }
        
    }
}
