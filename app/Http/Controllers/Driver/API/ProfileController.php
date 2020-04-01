<?php

namespace App\Http\Controllers\Driver\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DriverResource;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Contracts\JWTSubject;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api_driver');
    }

    public function index(){
        $driver = Auth('api_driver')->user();
        return new DriverResource($driver);
    }

    public function update(Request $request){
        $driver = Auth('api_driver')->user();
        $driver->update($request->all());

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

        return new DriverResource($driver);
    }

}
