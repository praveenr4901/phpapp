<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $memberId = $request->query('memberId');
        $memberData = Member::select('mobile', 'id', 'name')
            ->where('id', $memberId)
            ->first();
        return view('auth.reset-password')
            ->with(compact('memberData'))
            ->with('request', $request);
    }

    /**
     * Handle an incoming new password request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $memberId = $request->memberId;
        $validator = Validator::make($request->all(), [
            'otp' => 'required|digits:6|valid_otp:' . $memberId,
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'valid_otp' => 'Invalid OTP',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $user = User::where('member_id', $memberId)->first();

        if ($user) {
            // Update the user's password
            $user->forceFill([
                'password' => Hash::make($request->password),
            ])->save();

            // If the user was successfully updated, you can fire the 'PasswordReset' event if needed
            event(new PasswordReset($user));

            // Password reset successful, redirect to login with success message
            toastr()->success('Password Updated.');
            return redirect()->route('login')->with('status', __('Password reset successful'));
        } else {
            // User with the provided member_id not found, redirect back with error message
            return back()->withErrors(['memberId' => __('User not found')])->withInput();
        }
    }
}
