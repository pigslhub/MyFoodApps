<?php

namespace App\Http\Controllers\Shop;

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
        $this->middleware('auth:shop');
    }

    public function index()
    {
        $shop = DB::table('shops')
            ->join('shop_types', 'shops.shop_type_id', '=', 'shop_types.id')
            ->select('shops.*', 'shop_types.type as shop_type_name')
            ->where('shops.id', '=', Auth::guard('shop')->user()->id)->first();
        $allShopTypes = DB::table('shop_types')->get();
        return view('shop.profile.edit', ["shop"=>$shop, "allShopTypes"=>$allShopTypes]);
    }

    public function updateEmailAndPassword(Request $request){

        if($request->shop_password != ""){
            DB::table('shops')->where('id', '=', $request->id)
                ->update([
                    'email'=>$request->shop_email,
                    'password'=>Hash::make($request->shop_password)
                ]);
        }
        else{
            DB::table('shops')->where('id', '=', $request->id)
                ->update([
                    'email'=>$request->shop_email,
                ]);
        }

        return redirect()->route('shop.profile.index');

    }


    public function update(Request $request)
    {
//        if($request->file('shop_image')){
//            $avatar = $request->file('shop_image');
//            $fileName = time(). '.'. $avatar->getClientOriginalName(). '.'. $avatar->getClientOriginalExtension();
//            $path = public_path('/images/shops/'. $fileName);
//            (new ImageManager)->make($avatar->getRealPath())->resize(300,300)->save($path);
//            $avatar->move(public_path().'/images/shops/',$fileName);
//
//            $fileNameWithPath = 'images/shops/'. $fileName;
//
////            (new \Intervention\Image\Image)->make($avatar)->save(public_path('/images/shops/'.$fileName));
//
//
//            if ($request->shop_password == '') {
//                DB::table('shops')->where('id', '=', $request->id)->update([
//                    'name' => $request->shop_name,
//                    'owner_name' => $request->shop_owner_name,
//                    'address' => $request->shop_address,
//                    'email' => $request->shop_email,
//                    'phone' => $request->shop_phone,
//                    'area_code' => $request->shop_area_code,
//                    'avatar' => $fileNameWithPath,
//                    'status' => '1',
//                ]);
//            } else {
//
//                DB::table('shops')->where('id', '=', $request->id)->update([
//                    'name' => $request->shop_name,
//                    'owner_name' => $request->shop_owner_name,
//                    'address' => $request->shop_address,
//                    'email' => $request->shop_email,
//                    'password' => Hash::make($request->shop_password),
//                    'phone' => $request->shop_phone,
//                    'area_code' => $request->shop_area_code,
//                    'avatar' => $fileNameWithPath,
//                    'status' => '1',
//                ]);
//            }
//
//        }
//        else{
//            if ($request->shop_password == '') {
//                DB::table('shops')->where('id', '=', $request->id)->update([
//                    'name' => $request->shop_name,
//                    'owner_name' => $request->shop_owner_name,
//                    'address' => $request->shop_address,
//                    'email' => $request->shop_email,
//                    'phone' => $request->shop_phone,
//                    'area_code' => $request->shop_area_code,
//                    'status' => '1',
//                ]);
//            } else {
//
//                DB::table('shops')->where('id', '=', $request->id)->update([
//                    'name' => $request->shop_name,
//                    'owner_name' => $request->shop_owner_name,
//                    'address' => $request->shop_address,
//                    'email' => $request->shop_email,
//                    'password' => Hash::make($request->shop_password),
//                    'phone' => $request->shop_phone,
//                    'area_code' => $request->shop_area_code,
//                    'status' => '1',
//                ]);
//            }
//        }

        DB::table('shops')->where('id', '=', $request->id)->update([
                    'name' => $request->shop_name,
                    'owner_name' => $request->shop_owner_name,
                    'area_code' => $request->shop_area_code,
                    'address' => $request->shop_address,
                    'phone' => $request->shop_phone,
                    'about' => $request->about,
                ]);

        return redirect()->route('shop.profile.index')->with("success", "Profile updated successfully");
    }




}
