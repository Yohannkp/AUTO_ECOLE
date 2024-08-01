<?php
namespace App\Service;

use Twilio\Rest\Client;

class TwilioService
{
    private $twilio;

    public function __construct(string $accountSid, string $authToken)
    {
        $this->twilio = new Client($accountSid, $authToken);
    }

    public function sendSms(string $to, string $message): void
    {
        $this->twilio->messages->create($to, [
            'from' => $_ENV['TWILIO_PHONE_NUMBER'],
            'body' => $message
        ]);
    }
}


