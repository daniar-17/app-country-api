<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WAController extends Controller
{
    public function index()
    {
        $token = "f5e@iDgSZEjowPgd51W#";
        $target = "6288971765926";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => 'Ini Pesan Dari System Daniar NA - Laravel.',
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: $token" //change TOKEN to your actual token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
    //Last Line
}
