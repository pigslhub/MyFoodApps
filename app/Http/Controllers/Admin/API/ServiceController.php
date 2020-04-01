<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Validator;

class ServiceController extends Controller
{

    public function index()
    {
        return Service::all();
    }

    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }




    // public function create()
    // {

    //     $services = DB::table('services')->get();
    //     return view('admin.service.create', ["services" => $services]);
    // }



    // public function store(Request $request)
    // {


    //     DB::table('services')->insert([
    //         'name' => $request->service_name
    //     ]);


    //     return redirect()->route('admin.service.create')->with("success", "Service added successfully");
    // }


    // public function edit($id)
    // {
    //     $service = DB::table('services')->where('id', '=', $id)->first();
    //     return view('admin.service.edit', ["service" => $service]);
    // }


    // public function update(Request $request, $id)
    // {
    //     DB::table('services')->where('id', '=', $id)->update([
    //         'name' => $request->service_name
    //     ]);

    //     return redirect()->route('admin.service.create')->with('success', "Service updated successfully");
    // }


    // public function destroy($id)
    // {
    //     DB::table('services')->where('id', $id)->delete();
    //     return redirect()->route('admin.service.create')->with("info", "Service deleted");
    // }
}
