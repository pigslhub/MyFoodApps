<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;

class ShopController extends Controller
{

    public function index(){
        return Shop::all();
    }

//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }
//
//    public function create()
//    {
//        $allShopTypes =  DB::table('shop_types')->get();
//        $shops  = DB::table('shops')
//            ->join('shop_types', 'shops.shop_type_id', '=', 'shop_types.id')
//            ->select('shops.*', 'shop_types.type as shop_type_name')
//            ->get();
//        return view('admin.shopMgt.shop.create', ["shops" => $shops, "allShopTypes" => $allShopTypes]);
//    }

//    public function store(Request $request)
//    {
//        if($request->file('shop_image')){
//            $avatar = $request->file('shop_image');
//            $fileName = time(). '.'. $avatar->getClientOriginalName();
//            $path = public_path('/images/shops/'. $fileName);
//            (new \Intervention\Image\ImageManager)->make($avatar->getRealPath())->resize(300,300)->save($path);
//            $avatar->move(public_path().'/images/shops/',$fileName);
//
////            (new \Intervention\Image\Image)->make($avatar)->save(public_path('/images/shops/'.$fileName));
//
//
//        DB::table('shops')->insert([
//            'name' => $request->shop_name,
//            'owner_name' => $request->shop_owner_name,
//            'address' => $request->shop_address,
//            'email' => $request->shop_email,
//            'password' => Hash::make($request->shop_password),
//            'phone' => $request->shop_phone,
//            'area_code' => $request->shop_area_code,
//            'avatar'=> $fileName,
//            'status' => '1',
//            'commision' => $request->shop_commision,
//            'shop_type_id' => $request->shop_type_id
//        ]);
//
//        }
//
//        return redirect()->route('admin.shop.create')->with("success", "Shop created successfully");
//    }


//    public function edit($id)
//    {
//        $allShopTypes =  DB::table('shop_types')->get();
//        $shop = DB::table('shops')
//            ->join('shop_types', 'shops.shop_type_id', '=', 'shop_types.id')
//            ->select('shops.*', 'shop_types.type as shop_type_name')
//            ->where('shops.id', '=', $id)
//            ->first();
//        return view('admin.shopMgt.shop.edit', ["shop" => $shop, "allShopTypes" => $allShopTypes]);
//    }

//    public function update(Request $request, $id)
////    {
////        if ($request->shop_password == '') {
////            DB::table('shops')->where('id', '=', $id)->update([
////                'name' => $request->shop_name,
////                'owner_name' => $request->shop_owner_name,
////                'address' => $request->shop_address,
////                'email' => $request->shop_email,
////                'phone' => $request->shop_phone,
////                'area_code' => $request->shop_area_code,
////                'status' => '1',
////                'commision' => $request->shop_commision,
////                'shop_type_id' => $request->shop_type_id
////            ]);
////        } else {
////
////            DB::table('shops')->where('id', '=', $id)->update([
////                'name' => $request->shop_name,
////                'owner_name' => $request->shop_owner_name,
////                'address' => $request->shop_address,
////                'email' => $request->shop_email,
////                'password' => Hash::make($request->shop_password),
////                'phone' => $request->shop_phone,
////                'area_code' => $request->shop_area_code,
////                'status' => '1',
////                'commision' => $request->shop_commision,
////                'shop_type_id' => $request->shop_type_id
////            ]);
////        }
////
////        return redirect()->route('admin.shop.create')->with('success', "Shop updated successfully");
////    }
////
////
////
////
////
////
////    public function destroy($id)
////    {
////        DB::table('shops')->where('id', $id)->delete();
////        return redirect()->route('admin.shop.create')->with("info", "Shop deleted");
////    }
////
////    public function activateShop($id){
////        DB::table('shops')->where('id', $id)->update(["status"=>"1"]);
////        return redirect()->route('admin.shop.create');
////    }
////    public function deactivateShop($id){
////        DB::table('shops')->where('id', $id)->update(["status"=>"0"]);
////        return redirect()->route('admin.shop.create');
////    }
}
