<?php

namespace App\Http\Controllers\Admin\driverMgt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $drivers =  DB::table('drivers')->get();

        return view('admin.driverMgt.create', ["drivers" => $drivers]);
    }

    public function store(Request $request)
    {
        DB::table('drivers')->insert([
            'name' => $request->driver_name,
            'address' => $request->driver_address,
            'email' => $request->driver_email,
            'password' => Hash::make($request->driver_password),
            'phone' => $request->driver_phone,
            'gender' => $request->driver_gender,
            'dob' => $request->driver_dob,
            'area_code' => $request->driver_area_code,
            'status' => '1',
        ]);
        return redirect()->route('admin.driver.create')->with("success", "Driver created successfully");
    }


    public function edit($id)
    {

        $driver = DB::table('drivers')
            ->where('id', '=', $id)
            ->first();
        return view('admin.driverMgt.edit', ["driver" => $driver]);
    }

    public function update(Request $request, $id)
    {
        if ($request->driver_password == '') {
            DB::table('drivers')->where("id", '=', $id)
                ->update([
                'name' => $request->driver_name,
                'address' => $request->driver_address,
                'email' => $request->driver_email,
                'phone' => $request->driver_phone,
                'gender' => $request->driver_gender,
                'dob' => $request->driver_dob,
                'area_code' => $request->driver_area_code,
            ]);
        } else {

            DB::table('drivers')->where("id", '=', $id)
                ->update([
                'name' => $request->driver_name,
                'address' => $request->driver_address,
                'email' => $request->driver_email,
                'password' => Hash::make($request->driver_password),
                'phone' => $request->driver_phone,
                'gender' => $request->driver_gender,
                'dob' => $request->driver_dob,
                'area_code' => $request->driver_area_code,
            ]);
        }

        return redirect()->route('admin.driver.create')->with('success', "Driver updated successfully");
    }






    public function destroy($id)
    {
        DB::table('drivers')->where('id', $id)->delete();
        return redirect()->route('admin.driver.create')->with("info", "Driver deleted");
    }

    public function activateShop($id){
        DB::table('drivers')->where('id', $id)->update(["status"=>"1"]);
        return redirect()->route('admin.driver.create');
    }
    public function deactivateShop($id){
        DB::table('drivers')->where('id', $id)->update(["status"=>"0"]);
        return redirect()->route('admin.driver.create');
    }
}
