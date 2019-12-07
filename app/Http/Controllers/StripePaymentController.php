<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketBooking;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * $request->total_price,
                "currency" => "BDT",
                "source" => $request->stripeToken,
                "description" => "Paid", 
        ]);
        TicketBooking::find($request->check)->update([
        	'payment_status' =>1,
        ]);
        return redirect('/');
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
