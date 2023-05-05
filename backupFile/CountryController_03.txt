<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $countryDb = DB::table('country')->get();

        $client = new Client();
        $name = "";
        // $url = "https://restcountries.com/v3.1/all";
        $url = "https://restcountries.com/v3.1/all?fields=ccn3,flags,capital,continents,population,currencies,languages,name";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('country.data', compact('responseBody','name','countryDb'));
    }

    public function search(Request $request)
    {
        $countryDb = DB::table('country')->get();

        $client = new Client();
        $name = $request->search;
        if($name == null || $name == ""){
            // $url = "https://restcountries.com/v3.1/all";
            $url = "https://restcountries.com/v3.1/all?fields=ccn3,flags,capital,continents,population,currencies,languages,name";
        }else{
            $url = "https://restcountries.com/v3.1/name/".$name;
        }
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return view('country.data', compact('responseBody', 'name','countryDb'));
    }

    public function review(Request $request)
    {
        DB::table('country')->where('ccn3', $request->ccn3)->update([
            'star' => $request->rate
        ]);

        return response()->json([
            'status' => true,
            'info' => 'Review Success'
        ], 201);
    }

    public function getApi()
    {
        $client = new Client();
        $url = "https://restcountries.com/v3.1/all";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        dd($responseBody);

        // To Insert In Table
        // foreach($responseBody as $item){
        //     DB::table('country')->insert([
        //         'ccn3' => $item->ccn3,
        //         'star' => rand(1,5)
        //     ]);
        // }
        // echo "Berhasil";
    }
    //LastLine
}
