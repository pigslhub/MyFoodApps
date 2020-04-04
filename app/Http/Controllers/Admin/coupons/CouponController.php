<?php

namespace App\Http\Controllers\Admin\coupons;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */



    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function create()
    {
        $coupons = DB::table('coupons')->get();
        return view('admin.coupon.create', ['coupons' => $coupons]);
    }

    public function store(Request $request)
    {
        DB::table('coupons')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'code' => $request->code,
            'min_order_amount' => $request->min_order_amount,
            'discount' => $request->discount,
            'exp_date' => $request->exp_date,

        ]);
        return redirect()->route('coupon.create')->with("success", "Coupon created successfully");
    }







    public function destroy($id)
    {
        DB::table('coupons')->where('id', $id)->delete();
        return redirect()->route('coupon.create')->with("info", "Coupon deleted");
    }
}
