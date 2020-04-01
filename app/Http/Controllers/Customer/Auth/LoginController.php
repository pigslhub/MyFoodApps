<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer')->except(['logout']);
    }

    public function showLoginForm(){
        return view('customer.auth.login-image');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::guard('customer')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){

            return redirect()->route('customer.home');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
//
//    protected function validateLogin(Request $request)
//    {
//        $request->validate([
//            'email' => 'required|string',
//            'password' => 'required|string',
//        ]);
//
//
//    }


    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('customer.login');
    }



}
