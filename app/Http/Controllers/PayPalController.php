<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Booking;

class PayPalController extends Controller
{
    public function paypal(Request $request){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
         "application_context" => [
             "return_url" => route('success'),
             "cancel_url" => route('cancel'),
         ],
         "purchase_units" => [
           [
               "amount" => [
               "currency_code" => "USD",
             "value" => $request->roomprice
           ]
         ]
        ]
        ]);
//        dd($response);
        if(isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }
        else{
            return redirect(route('cancel'));
        }
    }

    public function success(Request $request){
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
//        dd($response);
        if(isset($response['status']) && $response['status'] == 'COMPLETED'){

            $data = new Booking;
            $data->customer_id = $request->customer_id;
            $data->room_id = $request->room_id;
            $data->checkin_date = $request->checkin_date;
            $data->checkout_date = $request->checkout_date;
            $data->total_adults = $request->total_adults;
            $data->total_children = $request->total_children;

            return redirect()->back()->with('message','Booking Successful');
        } else {
            return redirect(route('cancel'));
        }
    }

    public function cancel(){

    }
}