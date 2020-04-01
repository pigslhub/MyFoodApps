<?php

namespace App\Http\Controllers\Customer\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api_customer');
    }

    public function index(Request $request){
        $shops = DB::table('shops')->where("area_code", '=', $request->area_code)->get();
        $advertisements = DB::table('advertisements')
            ->join('shops', 'shops.id', '=', 'advertisements.shop_id')
            ->where('shops.area_code', '=', $request->area_code)
            ->get();

        return response()->json([$shops, $advertisements]);
    }

}
