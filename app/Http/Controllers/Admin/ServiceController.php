<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }




    public function create()
    {

        $services = DB::table('services')->get();
        return view('admin.service.create', ["services" => $services]);
    }



    public function store(Request $request)
    {


        DB::table('services')->insert([
            'name' => $request->service_name
        ]);


        return redirect()->route('admin.service.create')->with("success", "Product added successfully");
    }


    public function edit($id)
    {
        $service = DB::table('services')->where('id', '=', $id)->first();
        return view('admin.service.edit', ["service" => $service]);
    }


    public function update(Request $request, $id)
    {
        DB::table('services')->where('id', '=', $id)->update([
            'name' => $request->service_name
        ]);

        return redirect()->route('admin.service.create')->with('success', "Product updated successfully");
    }


    public function destroy($id)
    {
        DB::table('services')->where('id', $id)->delete();
        return redirect()->route('admin.service.create')->with("info", "Product deleted");
    }
}
