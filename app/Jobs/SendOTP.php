<?php

namespace App\Jobs;

use App\Models\OTP;
use App\Services\OTPService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendOTP implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $phoneNumber;
    private $memberId;
    private $type;

    public function __construct($phoneNumber, $memberId, $type)
    {
        $this->phoneNumber = $phoneNumber;
        $this->memberId = $memberId;
        $this->type = $type;
    }

    public function handle(OTPService $otpService)
    {
        $otp = mt_rand(100000, 999999);
        $memberId = $this->memberId;
        $type = $this->type;
        $existingOTP = OTP::where('member_id', $memberId)->first();
        if ($existingOTP !== null) {
            // Delete all the existing OTP rows
            $existingOTP->each(function ($otpRow) {
                $otpRow->delete();
            });
        }
        // Save the OTP to the table
        OTP::create([
            'member_id' => $this->memberId,
            'otp' => $otp,
            'phone_number' => $this->phoneNumber
        ]);
        $message = [
            'otp' => $otp,
            'type' => $type
        ];
        $otpService->sendSms($this->phoneNumber, $message);
    }
}

