<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Student;
use App\Services\KudismsService;

class SMSController extends Controller
{
    protected $kudismsService;

    public function __construct(KudismsService $kudismsService)
    {
        $this->kudismsService = $kudismsService;
    }


    public function index()
    {
        return view('sms.create');
    }


    public function sendBulkSMS(Request $request)
    {
        // dd($request->all());

        // $senderId = config('services.KUDI_SMS_SENDER_ID');
        $senderId = "IDEA";
        $numbers = Student::pluck('Phone_Number')->toArray();
        $message = $request->input('message');


        // Create Guzzle client using the service
        $client = $this->kudismsService->createClient();

        // dd($client, $senderId);

        $response = $client->post('sms', [
            'json' => [
                'recipients' => $numbers,
                'sender_id' => $senderId,
                'message' => $message,
            ],
        ]);

        $result = json_decode($response->getBody(), true);

        return response()->json($result);
    }
}
