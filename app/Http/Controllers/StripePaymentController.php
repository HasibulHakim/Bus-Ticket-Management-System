<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketBooking;
use App\Mail\SendEmailTest;
use Mail;
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
        $total_price = $request->total_price;
        $name = $request->name;
        $phone = $request->phone;
        $bus_name = $request->bus_name;
        $from = $request->from;
        $to = $request->to;
        $stoppage = $request->stoppage;
        $date = $request->date;
        $time = $request->time;
        $seat_no = $request->seat_no;

        $data = $total_price."|".$name."|".$phone."|".$bus_name."|".$from."|".$to."|".$stoppage."|".$date."|".$time."|".$seat_no;

        Mail::to("niloy3690@gmail.com")->send(new SendEmailTest($data));
        return redirect('/user/bus_list/view');
  
        // Session::flash('success', 'Payment successful!');
          
        // return back();
    }
}
