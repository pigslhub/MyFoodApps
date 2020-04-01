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

class AppointmentController extends Controller
{
    public $successStatus = 200;
    public function __construct()
    {
        $this->middleware('auth:api_driver');
    }

    public function store(Request $request){
        $appointment = DB::table('appointments')->insert([
           "driver_id"=>$request->driver_id,
           "date"=>$request->date,
            "time"=>$request->time
        ]);

        return response()->json($this->successStatus);
    }
}
