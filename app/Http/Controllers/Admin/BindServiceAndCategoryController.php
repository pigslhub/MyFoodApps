<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BindServiceAndCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function create()
    {
        $services = DB::table('services')->get();
        $categories = DB::table('categories')->get();


        $service_categories  = DB::table('service_categories')
            ->join('categories', 'service_categories.category_id', '=', 'categories.id')
            ->join('services', 'service_categories.service_id', '=', 'services.id')
            ->select('service_categories.*', 'categories.name as catname', 'services.name as servname')
            ->get();


        return view('admin.service.bindService', ["categories" => $categories, "services" => $services, "service_categories" => $service_categories]);
    }


    public function store(Request $request)
    {
        DB::table('service_categories')->insert([
            'service_id' => $request->service_id,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.serviceAndCategory.create')->with("success", "Service Binding successfully");
    }




    public function edit($id)
    {
//        $services = DB::table('services')->get();
//        $category = DB::table('category')->get();
//
//        $service_categories  = DB::table('service_categories')
//            ->where('id', '=', $id)
//            ->join('category', 'service_categories.category_id', '=', 'category.id')
//            ->join('services', 'service_categories.service_id', '=', 'services.id')
//            ->select('service_categories.*', 'category.name as catname', 'services.name as servname')
//            ->first();
//
//
////        $service_categories = DB::table('service_categories')->first();
//        return view('admin.service.bindServiceEdit', ["services"=>$services,"category"=>$category, "service_categories" => $service_categories]);
//
    }


    public function update(Request $request, $id)
    {
//        DB::table('service_categories')->where('id', '=', $id)->update([
//            'service_id' => $request->service_id,
//            'category_id' => $request->category_id,
//        ]);
//
//        return redirect()->route('admin.serviceAndCategory.create');
    }


    public function destroy($id)
    {
        DB::table('service_categories')->where('id', $id)->delete();
        return redirect()->route('admin.serviceAndCategory.create')->with("info", "Unbinding service");
    }
}
