<?php

namespace App\Http\Controllers\payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    private $gateway;

    public function __construct (){
        $this->gateway = Omnipay :: create('PayPal_Rest');
        $this->gateway->setClientId('PAYPAL_CLIENT_ID'); 
        $this->gateway->setSecret('PAYPAL_CLIENT_SECRET');
        $this->gateway->setTestMode(true);
    }

    public function pay (Request $request)
    {
       try{
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ));

            if ($response-> isRedirect()) {
                $response->redirect();
            } 
            else {
                return $response->getMessage();
            }  

       } catch(\Throwable $th) {
             return $th->getMessage();
       }
    }
    //
}
