<?php

namespace App\Http\Controllers;

// require_once app_path('africastalking/vendor/africastalking/africastalking/AfricasTalking');

use Illuminate\Http\Request;
use App\Models\Student;

use Africastalking\SDK\AfricasTalking;

class SMSController extends Controller
{
    public function index()
    {
        return view('sms.create');
    }

    public function sendBulkSMS(Request $request)
    {
        $username = config('services.africastalking.username');
        $apiKey = config('services.africastalking.api_key');
        $senderId = config('services.africastalking.sender_id');

        // $AT = new \Africastalking\SDK\AfricasTalking($username, $apiKey);
        
        $AT = new AfricasTalking($username, $apiKey);
        $sms = $AT->sms();

        $phoneNumber = +2349168189258;
        $message = $request->input('message');

        $result = $sms->send([
            'to'      => $phoneNumber,
            'message' => $message,
            'from'    => $senderId,
        ]);

        if ($result['status'] == 'success') {
            return response()->json(['message' => 'SMS sent successfully']);
        } else {
            return response()->json(['message' => 'Failed to send SMS'], 500);
        }

    }


    private function testing()
    {
        //     $username = "hiracollege";
        //     $numbers = +2349168189258;
        //     $numbers = Student::pluck('Phone_Number')->toArray();
        //     $message = $request->input('message');


        //     // Create Guzzle client using the service
        //     $client = $this->kudismsService->createClient();

        //     // dd($client, $senderId);

        //     $response = $client->post('sms', [
        //         'json' => [
        //             'recipients' => $numbers,
        //             'username' => $username,
        //             'message' => $message,
        //         ],
        //     ]);

        //     $result = json_decode($response->getBody(), true);

        //     return response()->json($result);

    }
}
