<?php

namespace App\Http\Controllers\Customer\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\customers\Customer;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Tymon\JWTAuth\Contracts\JWTSubject;

class ProfileController extends Controller
{
    public $successStatus = 200;
    public function __construct()
    {
        $this->middleware('auth:api_customer');
    }

    public function show(Request $request){
        $customer = DB::table('customers')->where('id', '=', $request->id)->first();
        return response()->json($customer);
    }

    public function update(Request $request){
//        $customer = Auth('api_customer')->user();
//        $customer->update($request->all());

//        $customer->update($request->except('image', 'did'));
//
//        $customer->update([
//            'profileupdate' => '1',
//        ]);
//
//        if ($request->hasFile('image')) {
//            $image_path = $request->file('image')->store('images/customer/profile', 'public');
//            $customer->update([
//                'image' => $image_path,
//                'profileupdate' => '1',
//            ]);
//        }
//
//        if ($request->hasFile('did')) {
//            $image_path = $request->file('did')->store('images/customer/profile', 'public');
//            $customer->update([
//                'did' => $image_path,
//                'profileupdate' => '1',
//            ]);
//        }

        if($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalName() . '.' . $avatar->getClientOriginalExtension();
//            $path = public_path('/images/customer/' . $fileName);
//            (new ImageManager)->make($avatar->getRealPath())->resize(300, 300)->save($path);
            $avatar->move(public_path() . '/images/customer/', $fileName);

            $fileNameWithPath = 'images/customer/' . $fileName;

            if ($request->password == '') {
                DB::table('customers')->where('id', '=', $request->id)
                    ->update([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'gender'=>$request->gender,
                        'phone'=>$request->phone,
                        'area_code'=>$request->area_code,
                        'dob'=>$request->date_of_birth,
                        'avatar'=>$fileNameWithPath
                    ]);
            }
            else{
                DB::table('customers')->where('id', '=', $request->id)
                    ->update([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>Hash::make($request->password),
                        'address'=>$request->address,
                        'gender'=>$request->gender,
                        'phone'=>$request->phone,
                        'area_code'=>$request->area_code,
                        'dob'=>$request->date_of_birth,
                        'avatar'=>$fileNameWithPath
                    ]);
            }

        }
        else{
            if ($request->password == '') {
                DB::table('customers')->where('id', '=', $request->id)
                    ->update([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'gender'=>$request->gender,
                        'phone'=>$request->phone,
                        'area_code'=>$request->area_code,
                        'dob'=>$request->date_of_birth
                    ]);
            }
            else{
                DB::table('customers')->where('id', '=', $request->id)
                    ->update([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'password'=>Hash::make($request->password),
                        'address'=>$request->address,
                        'gender'=>$request->gender,
                        'phone'=>$request->phone,
                        'area_code'=>$request->area_code,
                        'dob'=>$request->date_of_birth
                    ]);
            }
        }


        return response()->json(['success'=>'yes'],$this->successStatus);
    }

}
