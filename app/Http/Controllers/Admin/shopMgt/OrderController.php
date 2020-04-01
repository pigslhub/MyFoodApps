<?php

namespace App\Http\Controllers\Admin\shopMgt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function viewAllOrders()
    {
        $orders = DB::table('orders')
            ->join('customers', 'customers.id', 'orders.customer_id')
            ->join('drivers', 'drivers.id', 'orders.driver_id')
            ->select('orders.*', 'customers.name as customer_name', 'drivers.name as driver_name')
            ->get();

        return view('admin.order.viewAll', ["orders"=>$orders]);
    }

    public function viewSingleOrder($id)
    {
        $order = DB::table('orders')
//            ->where('shop_id', '=', Auth::user()->id)
//            ->where('status', '=', 'completed')
            ->join('customers', 'customers.id', 'orders.customer_id')
            ->join('drivers', 'drivers.id', 'orders.driver_id')
            ->select('orders.*', 'customers.name as customer_name', 'drivers.name as driver_name',
                'drivers.phone as driver_phone', 'drivers.email as driver_email')
            ->where('orders.id', '=', $id)
            ->first();

        return view('admin.order.viewSingle', ["order"=>$order]);
    }
    public function changeOrderStatus($order_id, $newStatus)
    {
        DB::table('orders')
            ->where('orders.id', '=', $order_id)
            ->update([
               'status'=>$newStatus
            ]);

        return redirect()->route('admin.order.viewAll');
    }


}
