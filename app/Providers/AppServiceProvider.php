<?php

namespace App\Providers;

use App\Models\OTP;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('valid_otp', function ($attribute, $value, $parameters, $validator) {
            $memberId = $parameters[0];
            $otp = OTP::where('member_id', $memberId)->first();

            if (!$otp || $value !== $otp->otp) {
                return false;
            }

            return true;
        });
    }
}
