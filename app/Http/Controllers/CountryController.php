<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CountryController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "https://restcountries.com/v3.1/name/indonesia";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('country.data', compact('responseBody'));
    }

    public function getApi()
    {
        $client = new Client();
        $url = "https://restcountries.com/v3.1/name/indonesia";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        dd($responseBody);
    }
    //LastLine
}
