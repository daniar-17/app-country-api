<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsappController extends Controller
{
    public function index()
    {
        return view('whatsapp.index');
    }

    public function send(Request $request)
    {
        $this->sendNotif("+6281293098150");
        return "Berhasil";
    }

    public function sendNotif(string $recipient)
    {
        $sid    = getenv("TWILIO_AUTH_SID");
        $token  = getenv("TWILIO_AUTH_TOKEN");
        $wa_from= getenv("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token); 
        
        $body = "Hello, welcome to Daniar Nur Amin.";

        return $twilio->messages->create('whatsapp:+6281293098150',[
            "from" => 'whatsapp:+14155238886', 
            "body" => $body
        ]);
    }
    //Last Line
}
