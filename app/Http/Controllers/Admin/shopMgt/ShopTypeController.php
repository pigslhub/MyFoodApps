<?php

namespace App\Http\Controllers\Admin\shopMgt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $shop_types = DB::table('shop_types')->get();
        return view('admin.shopMgt.shopType.create', ["shop_types" => $shop_types]);
    }

    public function store(Request $request)
    {

        DB::table('shop_types')->insert([
            'type' => $request->shop_type_name
        ]);
        return redirect()->route('admin.shopType.create')->with("success", "Shop Type created successfully");
    }


    public function edit($id)
    {
        $shop_type = DB::table('shop_types')->where('id', '=', $id)->first();
        return view('admin.shopMgt.shopType.edit', ["shop_type" => $shop_type]);
    }


    public function update(Request $request, $id)
    {
        DB::table('shop_types')->where('id', '=', $id)->update([
            'type' => $request->shop_type_name
        ]);

        return redirect()->route('admin.shopType.create')->with('success', "Shop Type updated successfully");
    }






    public function destroy($id)
    {
        DB::table('shop_types')->where('id', $id)->delete();
        return redirect()->route('admin.shopType.create')->with("info", "Shop Type deleted");
    }
}
