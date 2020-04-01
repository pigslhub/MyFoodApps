<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin = DB::table('admins')
            ->where('id', '=', Auth::guard('admin')->user()->id)->first();
        return view('admin.profile.edit', ["admin"=>$admin]);
    }
    public function update(Request $request)
    {
        if($request->file('admin_image')){
            $avatar = $request->file('admin_image');
            $fileName = time(). '.'. $avatar->getClientOriginalName(). '.'. $avatar->getClientOriginalExtension();
            $path = public_path('/images/admins/'. $fileName);
            (new ImageManager)->make($avatar->getRealPath())->resize(300,300)->save($path);
            $avatar->move(public_path().'/images/admins/',$fileName);

            $fileNameWithPath = 'images/admins/'. $fileName;

//            (new \Intervention\Image\Image)->make($avatar)->save(public_path('/images/shops/'.$fileName));


            if ($request->admin_password == '') {
                DB::table('admins')->where('id', '=', $request->id)->update([
                    'name' => $request->admin_name,
                    'email' => $request->admin_email,
                    'avatar' => $fileNameWithPath,
                ]);
            } else {
                DB::table('admins')->where('id', '=', $request->id)->update([
                    'name' => $request->admin_name,
                    'email' => $request->admin_email,
                    'password'=>$request->admin_password,
                    'avatar' => $fileNameWithPath,
                ]);
            }

        }
        else{
            if ($request->admin_password == '') {
                DB::table('admins')->where('id', '=', $request->id)->update([
                    'name' => $request->admin_name,
                    'email' => $request->admin_email,
                ]);
            } else {
                DB::table('admins')->where('id', '=', $request->id)->update([
                    'name' => $request->admin_name,
                    'email' => $request->admin_email,
                    'password'=>$request->admin_password,
                ]);
            }
        }

        return redirect()->route('admin.profile.index')->with("success", "Profile updated successfully");
    }




}
