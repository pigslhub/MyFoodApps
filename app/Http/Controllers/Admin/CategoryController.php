<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }








    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admin.category.create', ["categories" => $categories]);
    }


    public function store(Request $request)
    {

        DB::table('categories')->insert([
            'name' => $request->category_name
        ]);

        return redirect()->route('admin.category.create')->with("success", "Category added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function edit($id)
    {
        $category = DB::table('categories')->where('id', '=', $id)->first();
        return view('admin.category.edit', ["category" => $category]);
    }


    public function update(Request $request, $id)
    {
        DB::table('categories')->where('id', '=', $id)->update([
            'name' => $request->category_name
        ]);

        return redirect()->route('admin.category.create')->with('success', "Category updated successfully");
    }






    public function destroy($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('admin.category.create')->with("info", "Category deleted");
    }
}
