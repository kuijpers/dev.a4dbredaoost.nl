<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoardmemberLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:boardmember', ['except' => ['logout']]);
    }


    public function showLoginForm(){
        return view('auth.boardmember-login');
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

        if(Auth::guard('boardmember')->attempt($credentials, $request->remember)) {

            // If successful , then redirect to their intended location
            return redirect()->intended(route('board.home'));

        }
        // If unsuccessful , then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('boardmember')->logout();

        return redirect('/');
    }


}
