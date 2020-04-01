<?php

namespace App\Http\Controllers\Driver\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:driver')->except(['logout']);
    }

    public function showLoginForm(){
        return view('driver.auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::guard('driver')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){

            return redirect()->route('driver.home');
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
//        dd("success");
        Auth::guard('driver')->logout();
        return redirect()->route('driver.login');
    }



}
