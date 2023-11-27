<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPESAController extends Controller
{
    public function getAccessToken(){
        $url = env('MPESA_ENV')==0
        ?''
        :'';
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
         $response = json_decode(curl_exec($curl));
         curl_close($curl);
         return $response->access_token;
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
