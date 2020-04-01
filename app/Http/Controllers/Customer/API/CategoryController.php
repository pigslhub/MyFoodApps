<?php

namespace App\Http\Controllers\Customer\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public $successStatus = 200;

        public function __construct()
        {
            $this->middleware('auth:api_customer');
        }


    public function index()
    {
        $categories = DB::table('categories')->get();
        if (count($categories) > 0)
            return response()->json($categories, $this->successStatus);

        return response()->json(["no categories" => "yes"]);
    }


    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return JsonResponse
     */


    public function fetchShopsOnCategory(Request $request)
    {
        $shops = DB::table('shops')
            ->join('shop_category_services_rate', 'shops.id', '=', 'shop_category_services_rate.shop_id')
            ->where('shop_category_services_rate.category_id', '=', $request->category_id)
            ->where('shops.area_code', '=', $request->area_code)
            ->get();

        return response()->json($shops, $this->successStatus);
    }
    public function fetchServicesOfShop(Request $request)
    {
        $services = DB::table('services')
            ->join('shop_category_services_rate', 'services.id', '=', 'shop_category_services_rate.service_id')
            ->where('shop_category_services_rate.shop_id', '=', $request->shop_id)
            ->where('shop_category_services_rate.category_id', '=', $request->category_id)
            ->get()->unique();

        return response()->json($services, $this->successStatus);
    }



}
