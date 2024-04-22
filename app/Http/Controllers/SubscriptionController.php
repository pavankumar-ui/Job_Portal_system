<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isEmployer;
use App\Http\Middleware\DonotAllowUserToMakePayment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use Auth;
use Mail;
use App\Mail\PurchaseMail;
use Stripe\Checkout\Session;
use Stripe\Stripe;



class SubscriptionController extends Controller
{

    const WEEKLY_AMOUNT = 3000;  // change the inr price according to paisa for Rs.30 Rs.60 and Rs.300
    const MONTHLY_AMOUNT = 6000;
    const YEARLY_AMOUNT = 30000;
    const CURRENCY = 'INR';
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(isEmployer::class);
      $this->middleware(DonotAllowUserToMakePayment::class)->except('subscribe');
        
    }

    public function subscribe()
    {
        return view('subscription.index');
    }

    public function initiatePayment(Request $request)
    {
        $plans =     array(
                     'weekly' => [
                                     'name'=> 'weekly',
                                     'description' => 'weekly payment',
                                     'amount' => self::WEEKLY_AMOUNT,
                                     'currency' => self::CURRENCY,
                                     'quantity' => 1,                   
                                 ],

                     'monthly' => [   
                                      'name' => 'monthly',
                                      'description' => 'monthly payment',
                                      'amount' =>self::MONTHLY_AMOUNT,
                                      'currency' => self::CURRENCY,
                                      'quantity' => 1,
                                    ],            

                    'yearly' => [ 
                                   'name' => 'yearly',
                                   'description' => 'yearly payment',
                                   'amount' => self::YEARLY_AMOUNT,
                                   'currency' => self::CURRENCY,
                                   'quantity' => 1,
                                 ],
                    );    
    

          //initiate Payment
           Stripe::setApiKey(config('services.stripe.secret'));

          try{
                 $selectPlan = null;

                 if($request->is('pay/weekly/subscription'))
                 {
                    $selectPlan = $plans['weekly'];
                    $billingEnds = now()->addWeek()->startOfDay()->toDateString();
                 }
                 else if($request->is('pay/monthly/subscription'))
                 {
                    $selectPlan = $plans['monthly'];
                    $billingEnds = now()->addMonth()->startOfDay()->toDateString();
                 }
                 else if($request->is('pay/yearly/subscription'))     
                 {
                       $selectPlan = $plans['yearly'];
                       $billingEnds = now()->addYear()->startOfDay()->toDateString();  
                 }

                     //if user is selected the plan, then perform the action//
                    if($selectPlan)
                    {
                        $successUrl = URL::signedRoute('payment.success',[

                                'plan' => $selectPlan['name'],
                                'billing_ends' => $billingEnds
                                 ]);

                       $session = Session::create([
                                  

                                     'line_items' =>[
                                                      [

                                                        'price_data' =>[

                                                            'currency' => $selectPlan['currency'],
                                                        'unit_amount' => $selectPlan['amount'] + 50,
                                                         

                                                           'product_data' =>[
                                                                'name' =>  $selectPlan['name'],
                                                                'description' => $selectPlan['description'],
                                                        ],  
                                                    ],    
                                                        'quantity' => $selectPlan['quantity'],
 
                                                      ]

                                                       ],
                                                       
                                                       'mode' => 'payment', 
                                                       'success_url' => $successUrl,
                                                       'cancel_url' => route('payment.cancel'),
                                          ]);

                            // \Log::info('Stripe Session:', ['session' => $session]);
                       //return redirect($session->url);

                       return redirect($session->url);

                    }
                
          }catch(Exception $e)
          {
                return $e;
          }   
    }

    
    public function paymentSuccess(Request $request)
    {
          $plan = $request->plan;
          $BillingEnds= $request->billing_ends;
          //$description = $request-> $product_data['description'];

          User::where('id',auth()->user()->id)->update([
                      'plan' => $plan,
                      'billing_ends' => $BillingEnds,
                      //'description' => $description,
                      'status' => 'paid',
          ]);


          try
          {
               Mail::to(auth()->user()->email)->queue(new PurchaseMail($plan,$BillingEnds));
          }
          catch(\Exception $e)
          {
               return response()->json($e);
          }

      return redirect()
            ->route('dashboard')
            ->with('pay_success','Payment was successfully processed');
     
    }
    
    
    public function cancel()
    {
        return redirect()
        ->route('dashboard')
        ->with('pay_error','sorry! Payment was not processed!');
    }





}
