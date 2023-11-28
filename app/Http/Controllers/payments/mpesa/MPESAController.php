<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPESAController extends Controller
{
    public function getAccessToken(){
        $url = env('MPESA_ENV') == 0 
        ?'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
       :''; //perhaps add live
       $curl = curl_init($url);
        curl_setopt_array(
            $curl,
         array(
CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset =utf8'],
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HEADER => false,
CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
         )
         );
         $response = curl_exec($curl);
         curl_close($curl);
        // return $response -> access_token;
        return $response;

    }

    public function registerURLS(){
$body = array(
    'ShortCode' => env('MPESA_SHORTCODE'),
    'ResponseType' => 'Completed',
    'ConfirmationURL' =>env('MPESA_TEST_URL') . '/api/confirm/dsxcv',
    'ValidationURL' => env('MPESA_TEST_URL') . '/api/validation'
);
$url = env('MPESA_ENV') == 0 
        ?'https://sandbox.safaricom.co.ke/mpesa/c2b/v3/registerurl'
       :''; //perhaps add live

$response = $this->makeHttp($url, $body);
return $response;
    }

public function makeHttp($url, $body)
{
   // $url = 'https://sandbox.safaricom.co.ke/mpesa/b2c/v3/paymentrequest';

    $curl = curl_init();
    curl_setopt_array(
        $curl,
        array(
           CURLOPT_URL => $url,
           CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Authorization:Bearer '. $this ->getAccessToken()), //Setting custom header
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_POST => true,
           CURLOPT_POSTFIELDS => json_encode($body)
     )
    );
$curl_response = curl_exec($curl);
curl_close($curl);
return $curl_response;



}

  
}
