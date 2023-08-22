<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Jobs\SendOTP;
use App\Services\OTPService;


class VerifyController extends Controller
{
    public function __construct(OTPService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function index()
    {
        return view('auth.verify');
    }

    /**
     * Function to verify the member id user inputs.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request)
    {
        if ($request->input('type') != 'reset-password') {
            $validator = Validator::make($request->all(), [
                'member_id' => ['required', 'unique:users,member_id'],
            ], [
                'member_id.unique' => 'User already logged in.',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }
        $type = $request->input('type') == 'reset-password' ? 'resetting the password' : 'Registration';
        $memberId = $request->input('member_id');
        $memberData = Member::select('mobile', 'id', 'name')
            ->where('id', $memberId)
            ->first();
        $memberRole = UserRole::where('member_id', $memberId)->first();
        if ($memberData === null || $memberRole === null) {
            toastr()->error('Member Id not found');
            return redirect()->back();
        } else {
            dispatch(new SendOTP($memberData->mobile, $memberData->id, $type));
            if ($type == 'Registration') {
                return redirect()->route('register', ['memberId' => $memberData->id]);
            }
            return redirect()->route('password.reset', ['memberId' => $memberData->id]);

        }
    }
}
