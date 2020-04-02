<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('signup-image');
    }


    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'gender'=>'required',
            'area_code'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'date_of_birth'=>'required',
            'user_type'=>'required',
//            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all());
        }
        else{

            if($request->gender == 'male')
                $avatar = "/assets/images/default/male.jpeg";
            else
                $avatar = "/assets/images/default/female.png";


            if ($request->user_type == 'Customer') {
                DB::table('customers')->insert([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'gender'=>$request->gender,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'area_code'=>$request->area_code,
                    'dob'=>$request->date_of_birth,
                    'status'=>0,
                    'avatar'=>$avatar

                ]);
            }
            else if ($request->user_type == 'Driver'){
                DB::table('drivers')->insert([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'gender'=>$request->gender,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'area_code'=>$request->area_code,
                    'dob'=>$request->date_of_birth,
                    'status'=>0,
                    'avatar'=>$avatar

                ]);
            }
            else if ($request->user_type == 'Restaurant'){
                DB::table('shops')->insert([
                    'owner_name'=>$request->owner_name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'gender'=>$request->gender,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'area_code'=>$request->area_code,
                    'dob'=>$request->date_of_birth,
                    'status'=>'0',
                    'avatar'=>$avatar,
                    'shop_type_id'=>'1'

                ]);
            }
            else{
                DB::table('shops')->insert([
                    'owner_name'=>$request->owner_name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'gender'=>$request->gender,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'area_code'=>$request->area_code,
                    'dob'=>$request->date_of_birth,
                    'status'=>'0',
                    'avatar'=>$avatar,
                    'shop_type_id'=>'2'

                ]);
            }
            dd('success');
        }




    }

}
