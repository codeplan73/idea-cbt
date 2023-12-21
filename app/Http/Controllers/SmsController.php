<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\System;
use Africastalking\SDK\AfricasTalking;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class SMSController extends Controller
{
    public function index()
    {
        $systems = System::all();
        return view('sms.create', ['systems' => $systems]);
    }

    public function create()
    {
        $students = Student::
            where('Current_Status', 'Active')
            ->select('Student_ID', 'Fullnames', 'Student_Class', 'Phone_Number', 'Current_Balance')
            ->get();
        return view('sms.create-individual', ['students' => $students]);
    }

    public function showOwningForm()
    {
        $systems = System::all();
        return view('sms.create-owning', ['systems' => $systems]);
    }
   
    public function sendBulkSMS(Request $request)
    {
        $username   = "hiracollege";
        $apiKey     = "4b8ef4a5a94788a3c88721c41222ee8abefe2365754cf6e19c6fec0040704c7d";
        $AT         = new AfricasTalking($username, $apiKey);
        $sms        = $AT->sms();
        $from = "hiracollege";

        $data = $request->validate([
            'class' => 'required',
            'branch' => 'required',
            'status' => 'required',
            'message' => 'required'
        ]);

        // $recipients = +2349168189258;
        $recipients = Student::where('Student_Class', $data['class'])
            ->where('Current_Status', $data['status'])
            ->where('Branch', $data['branch'])
            ->pluck('Phone_Number')
            ->toArray();


        // Check DND status before sending messages
        $dndFilteredRecipients = [];

        foreach ($recipients as $recipient) {
            $dndStatus = $this->checkDNDStatus($recipient, $username, $apiKey);


            if (!$dndStatus) {
                $dndFilteredRecipients[] = $recipient;
            } else {
                // Handle DND status (optional)
                // You may want to log or handle recipients on DND separately
            }
        }

        if (count($dndFilteredRecipients) > 0) {
            try {
                $result = $sms->send([
                    'to'      => $dndFilteredRecipients,
                    'message' => $data['message'],
                    // 'from'    => $from
                ]);

                if ($result['status'] === 'success') {

                    $responseMessage = $result['data']->SMSMessageData->Message;
                    return back()->with('message', $responseMessage);

                } else {
                    return back()->with('error', 'Failed to send SMS: ' . $result['message']);
                }

            } catch (Exception $e) {
                return back()->with('error', 'Error: ' . $e->getMessage());
            }

        } else {
            return back()->with('error', 'No valid phone numbers found for ' . $data['class']);
        }
    }

    public function sendSingleSms(Request $request)
    {
        $username   = "hiracollege";
        $apiKey     = "4b8ef4a5a94788a3c88721c41222ee8abefe2365754cf6e19c6fec0040704c7d";
        $AT         = new AfricasTalking($username, $apiKey);
        $sms        = $AT->sms();
        $from = "hiracollege";

        $data = $request->validate([
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        try {
                $result = $sms->send([
                    'to'      => $data['phone_number'],
                    'message' => $data['message'],
                    // 'from'    => $from
                ]);

                if ($result['status'] === 'success') {

                    $responseMessage = $result['data']->SMSMessageData->Message;
                    return back()->with('message', $responseMessage);

                } else {
                    return back()->with('error', 'Failed to send SMS: ' . $result['message']);
                }

            } catch (Exception $e) {
                return back()->with('error', 'Error: ' . $e->getMessage());
            }
    }

    public function sendOwningForm(Request $request)
    {
        $username   = "hiracollege";
        $apiKey     = "4b8ef4a5a94788a3c88721c41222ee8abefe2365754cf6e19c6fec0040704c7d";
        $AT         = new AfricasTalking($username, $apiKey);
        $sms        = $AT->sms();
        $from = "hiracollege";

        $data = $request->validate([
            'class' => 'required',
            'branch' => 'required',
            'status' => 'required',
            'current_balance' => 'required',
            'message' => 'required'
        ]);

        $recipients = Student::where('Student_Class', $data['class'])
            ->where('Current_Status', $data['status'])
            ->where('Branch', $data['branch'])
            ->where('Current_Balance', '>=', $data['current_balance'])
            ->select('Student_ID', 'Fullnames', 'Student_Pin', 'Phone_Number', 'Current_Balance')
            ->get()
            ->toArray();

        if($recipients){
            $dndFilteredRecipients = array_column($recipients, 'Phone_Number');
        
            try {
                foreach ($recipients as $recipient) {

                $formattedBalance = number_format($recipient['Current_Balance'], 2);
                $message = "Student-ID: {$recipient['Student_ID']}, Fullnames: {$recipient['Fullnames']},  Result-PIN: {$recipient['Student_Pin']}, Current-Balance: {$formattedBalance}\n\n{$data['message']}";

                    $result = $sms->send([
                        'to'      => [$recipient['Phone_Number']],
                        'message' => $message,
                        // 'from'    => $from
                    ]);

                    if ($result['status'] !== 'success') {
                        return back()->with('error', 'Failed to send SMS: ' . $result['message']);
                    }
                }

                $responseMessage = $result['data']->SMSMessageData->Message;
                return back()->with('message', $responseMessage);

            } catch (Exception $e) {
                return back()->with('error', 'Error: ' . $e->getMessage());
            }
        }else{
             return back()->with('error', 'No student is owning such amount');
        }

        
    }

    private function checkDNDStatus($phoneNumber, $username, $apiKey)
    {
        $client = new Client();

        $url = "https://api.africastalking.com/version1/subscription?username={$username}&phoneNumber={$phoneNumber}";

        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'apiKey' => $apiKey,
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Check if DND status is active
            return isset($data['response']) && $data['response']['status'] === 'active';
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it)
            return false; // Assume DND status is not active on error
        }
    }
}
