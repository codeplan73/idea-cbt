<?php

namespace App\Services;

use GuzzleHttp\Client;

class KudismsService
{
    protected $apiKey;

    public function __construct()
    {
        // Retrieve the API key from the .env file
        // $this->apiKey = config('services.KUDI_SMS_API_KEY');
        $this->apiKey = 'wuHQRxb65jcr1SYBE9yLtn2pTohzFkZlJPasXNGqMAUgfvKi4Vm3dOeW0D8C7I';
    }

    public function createClient()
    {
        return new Client([
            'base_uri' => 'https://my.kudisms.net/api/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);
    }
}
