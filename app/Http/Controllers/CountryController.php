<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CountryController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "https://restcountries.com/v3.1/all";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('country.data', compact('responseBody'));
    }

    public function getApi()
    {
        $client = new Client();
        $url = "https://restcountries.com/v3.1/name/Faroe Islands";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        // dd($responseBody);
        foreach ($responseBody as $key) {
            if(empty($key->region)){
                echo "Tidak Ada";
            }else{
                echo "Ada";
            }
        }
        // echo $responseBody['region'];
        // $test = $responseBody['status'] ?? null;
        // if($test){
        //     echo "Ada " .$test;
        // }else{
        //     echo "Tidak Ada " .$test;
        // }
    }
    //LastLine
}
