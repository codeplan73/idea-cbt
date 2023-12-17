<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\System;
use Africastalking\SDK\AfricasTalking;
use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    public function index()
    {
        $systems = System::all();
        return view('sms.create', ['systems' => $systems]);
    }

    public function sendBulkSMS(Request $request)
    {
        // $response = Http::post('https://api.africastalking.com/version1/messaging', [
        //     'username' => 'hiracollege',
        //     'to' => '+2349168189258',
        //     'message' => 'Hello World!',
        //     'from' => 'hira',
        // ], [
        //     'headers' => [
        //         'Accept' => 'application/json',
        //         'Content-Type' => 'application/x-www-form-urlencoded',
        //         'apiKey' => '4b8ef4a5a94788a3c88721c41222ee8abefe2365754cf6e19c6fec0040704c7d',
        //     ],
        // ]);

        // $responseData = $response->json();

        // dd($responseData);



        // Set your app credentials
        $username   = "hiracollege";
        $apiKey     = "4b8ef4a5a94788a3c88721c41222ee8abefe2365754cf6e19c6fec0040704c7d";

        // Initialize the SDK
        $AT         = new AfricasTalking($username, $apiKey);

        // Get the SMS service
        $sms        = $AT->sms();

        // Set the numbers you want to send to in international format
        $recipients = "+2349168189258";

        // Set your message
        $message    = "This is a testing message from IDEA-Colleges";

        // Set your shortCode or senderId
        // $from       = "hiracollege";

        try {
            // Thats it, hit send and we'll take care of the rest
            $result = $sms->send([
                'to'      => $recipients,
                'message' => $message,
                // 'from'    => $from
            ]);

            dd($result);
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }


    private function testing()
    {
            $username = "hiracollege";
            $numbers = +2349168189258;
            $numbers = Student::pluck('Phone_Number')->toArray();
            $message = $request->input('message');


            // Create Guzzle client using the service
            $client = $this->kudismsService->createClient();

            // dd($client, $senderId);

            $response = $client->post('sms', [
                'json' => [
                    'recipients' => $numbers,
                    'username' => $username,
                    'message' => $message,
                ],
            ]);

            $result = json_decode($response->getBody(), true);

            return response()->json($result);

    }
}
