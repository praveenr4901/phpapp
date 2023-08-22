<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\OTP;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $memberId = $request->query('memberId');
        $memberData = Member::select('mobile', 'id', 'name')
            ->where('id', $memberId)
            ->first();
        return view('auth.register', compact('memberData'));
    }

    /**
     * Handle an incoming registration request.
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
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' => ['required', 'regex:/^[+0-9]{10,}$/', 'unique:users'],
        ], [
            'valid_otp' => 'Invalid OTP',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'member_id' => $request->memberId,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
        ]);
        // Get the role ID from the userrole table
        $roleId = UserRole::where('member_id', $memberId)->value('role_id');

        // Get the role name based on the role ID
        $roleName = Role::where('id', $roleId)->value('name');

        // Assign the role to the user
        $user->assignRole($roleName);

        event(new Registered($user));

        Auth::guard('web')->login($user);


        return redirect(RouteServiceProvider::HOME);
    }
}
