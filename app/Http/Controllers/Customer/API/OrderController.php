<?php

namespace App\Http\Controllers\Customer\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public $successStatus = 200;

    public function __construct()
    {
        $this->middleware('auth:api_customer');
    }


    public function onGoingOrders(Request $request)
    {
        $orders = DB::table('orders')
            ->join('shops', 'orders.shop_id', '=', 'shops.id')
            ->join('drivers', 'orders.driver_id', '=', 'drivers.id')
            ->select('orders.*', 'shops.name as shopname', 'shops.phone as shopphone', 'drivers.phone as driverphone', 'drivers.name as drivername')
            ->where('orders.customer_id', '=', $request->customer_id)
            ->Where('orders.status', '!=', 'sent')
            ->Where('orders.status', '!=', 'cancel')
            ->Where('orders.status', '!=', 'receive')
//            ->Where('orders.status', '=', 'progress')
//            ->Where('orders.status', '=', 'pick')
            ->get();
        return response()->json($orders, $this->successStatus);
    }
    public function completedOrders(Request $request)
    {
        $orders = DB::table('orders')
            ->join('shops', 'orders.shop_id', '=', 'shops.id')
            ->join('drivers', 'orders.driver_id', '=', 'drivers.id')
            ->select('orders.*', 'shops.name as shopname', 'shops.phone as shopphone', 'drivers.phone as driverphone', 'drivers.name as drivername')
            ->where('customer_id', '=', $request->customer_id)
            ->Where('orders.status', '=', 'receive')

            ->get();
        return response()->json($orders, $this->successStatus);
    }
    public function canceledOrders(Request $request)
    {
        $orders = DB::table('orders')
            ->join('shops', 'orders.shop_id', '=', 'shops.id')
            ->join('drivers', 'orders.driver_id', '=', 'drivers.id')
            ->select('orders.*', 'shops.name as shopname', 'shops.phone as shopphone', 'drivers.phone as driverphone', 'drivers.name as drivername')
            ->where('customer_id', '=', $request->customer_id)
            ->Where('orders.status', '=', 'cancel')

            ->get();
        return response()->json($orders, $this->successStatus);
    }
    public function changeStatus(Request $request)
    {
        DB::table('orders')
            ->where('id', '=', $request->id)
            ->update([
                "shop_rating" => $request->shop_rating,
                "driver_rating" => $request->driver_rating,
                "status" => "receive"
            ]);


        return response()->json(["success" => "yes"], $this->successStatus);
    }
    public function addDriver(Request $request)
    {
        DB::table('orders')
            ->where('id', '=', $request->order_id)
            ->update([
                "driver_id" => $request->driver_id,
                "status" => "place"
            ]);


        return response()->json(["success" => "yes"], $this->successStatus);
    }
}
