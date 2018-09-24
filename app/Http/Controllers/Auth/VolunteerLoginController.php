<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VolunteerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:volunteer', ['except' => ['logout']]);
    }


    public function showLoginForm(){
        return view('auth.volunteer-login');
    }

    public function login(Request $request){

        // Validate the form data
        $this->validate($request, [
            'email'	=> 'required|email',
            'password'	=> 'required',
        ]);

        // Attempt to log the user in

        // Set the credentials

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('volunteer')->attempt($credentials, $request->remember)) {

            // If successful , then redirect to their intended location
            return redirect()->intended(route('volunteer.home'));

        }
        // If unsuccessful , then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('volunteer')->logout();

        return redirect('/');
    }


}
