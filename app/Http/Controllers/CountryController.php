<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $countryDb = DB::table('country')->get();

        $client = new Client();
        $name = "";
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
        try {
            if($name == null || $name == ""){
                $url = "https://restcountries.com/v3.1/all?fields=ccn3,flags,capital,continents,population,currencies,languages,name";
            }else{
                $url = "https://restcountries.com/v3.1/name/".$name;
            }
            $response = $client->request('GET', $url, [
                'verify'  => false,
            ]);
            $responseBody = json_decode($response->getBody());
            return view('country.data', compact('responseBody', 'name','countryDb'));
        } catch (RequestException $ex) {
            return view('country.data_not_found', compact('name'));
        }

        
    }

    public function review(Request $request)
    {
        DB::table('country')->where('ccn3', $request->codeCcn3)->update([
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
        $url = "https://restcountries.com/v3.1/name/ind";    
        try {
            $response = $client->request('GET', $url, [
                'verify'  => false,
            ]);
            $responseBody = json_decode($response->getBody());
            dd($responseBody);
        } catch (RequestException $ex) {
            $error_json = '{"status":404, "message":"Not Found"}';
            $response_error = json_decode($error_json);
            dd($response_error);
        }


        // To Insert In Table From API RestCountries
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
