<?php

namespace App\Http\Controllers\Admin\API;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\admins\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public $successStatus = 200;

    /**
     * login api
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(){
        if(Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            $admin = Auth::user();
            $success['token'] =  $admin->createToken('MyApp')-> accessToken;
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    /**
 * Register api
 *
 * @param Request $request
 * @return \Illuminate\Http\JsonResponse
 */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $admin = Admin::create($input);
        $success['token'] =  $admin->createToken('MyApp')-> accessToken;
        $success['name'] =  $admin->name;
        return response()->json(['success'=>$success], $this-> successStatus);
    }


    /**
     * details api
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        $admin = Auth::user();
        return response()->json(['success' => $admin], $this-> successStatus);
    }

    public function list(){
        return Admin::all();
    }

    public function showCategory(){
        return Category::all();
    }

    public function insertCategory(Request $request){
        return Category::all();
    }



}
