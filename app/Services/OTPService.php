<?php

namespace App\Services;

use Aws\Credentials\Credentials;
use Aws\Sns\SnsClient;

class OTPService
{
    protected $snsClient;

    public function __construct()
    {
        $credentials = new Credentials(env('AWS_ACCESS_KEY_ID'), env('AWS_SECRET_ACCESS_KEY'));
        $this->snsClient = new SnsClient([
            'version' => 'latest',
            'region' => 'us-east-1',
            'credentials' => $credentials,
        ]);
    }

    public function sendSms($phoneNumber, $message)
    {
        $params = [
            'Message' => 'Dear Lions, Your OTP for ' . $message['type'] . ' on the District Website is ' . $message['otp'] . '. Please do not share this OTP. Regards, DG Team-Lions District318A',
            'PhoneNumber' => '+91' . $phoneNumber,
            'MessageAttributes' => [
                'AWS.SNS.SMS.SMSType' => [
                    'DataType' => 'String',
                    'StringValue' => 'Transactional',
                ]
            ],
        ];
        try {
            $this->snsClient->publish($params);
            echo "Message published successfully!";
        } catch (\Aws\Sns\Exception\SnsException $e) {
            echo "Error publishing message: " . $e->getMessage();
        }
    }

    public function sendSmsForApproval($phoneNumber, $message)
    {
        $params = [
            'Message' => $message,
            'PhoneNumber' => '+91' . $phoneNumber,
            'MessageAttributes' => [
                'AWS.SNS.SMS.SMSType' => [
                    'DataType' => 'String',
                    'StringValue' => 'Transactional',
                ]
            ],
        ];
        try {
            $this->snsClient->publish($params);
            // echo "Message published successfully!";
        } catch (\Aws\Sns\Exception\SnsException $e) {
            echo "Error publishing message: " . $e->getMessage();
        }
    }
}
