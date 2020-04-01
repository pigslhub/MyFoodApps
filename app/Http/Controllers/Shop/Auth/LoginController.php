<?php

namespace App\Http\Controllers\Shop\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:shop')->except(['logout']);
    }

    public function showLoginForm(){
        return view('shop.auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::guard('shop')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){

            return redirect()->route('shop.home');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
//    public function logout(Request $request)
//    {
//        $this->guard()->logout();
//
//        $request->session()->invalidate();
//
//        $request->session()->regenerateToken();
//
//        return $this->loggedOut($request) ?: redirect()->route('shopMgt.login');
//    }
//
//    /**
//     * The user has logged out of the application.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return mixed
//     */
//    protected function loggedOut(Request $request)
//    {
//        //
//    }

    public function logout()
    {
//        dd("success");
        Auth::guard('shop')->logout();
        return redirect()->route('shop.login');
    }
}
