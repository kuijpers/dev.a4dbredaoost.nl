<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Password;
use Auth;

class BoardmemberResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/bestuur';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:boardmember');
    }
    //Set the guard
    protected function guard()
    {
        return Auth::guard('boardmember');
    }
    // The broker to use
    protected function broker()
    {
        return Password::broker('boardmember');
    }
    // Show the reset view
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset-boardmember')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }


}
