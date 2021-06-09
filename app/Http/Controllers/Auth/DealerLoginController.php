<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DealerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:dealer', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.dealer-login');
    }

    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attempt to log the user in
        if (Auth::guard('dealer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if successful, then redirect to their intented location
            return redirect()->intended(route('dealer.profile'));
        }
        
        //if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->WithInput($request->only('email','remember'));
    }

    public function logout()
    {
       Auth::guard('dealer')->logout();
        return redirect('/');
    }
}
