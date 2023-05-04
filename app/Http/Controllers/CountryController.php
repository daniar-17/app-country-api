<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CountryController extends Controller
{
    public function index()
    {
        $client = new Client();
        $name = "";
        $url = "https://restcountries.com/v3.1/all";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('country.data', compact('responseBody','name'));
    }

    public function search(Request $request)
    {
        $client = new Client();
        $name = $request->search;
        if($name == null || $name == ""){
            $url = "https://restcountries.com/v3.1/all";
        }else{
            $url = "https://restcountries.com/v3.1/name/".$name;
        }
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('country.data', compact('responseBody', 'name'));
    }

    public function getApi()
    {
        $client = new Client();
        $url = "https://restcountries.com/v3.1/name/Faroe Islands";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        dd($responseBody);
    }
    //LastLine
}
