<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admins\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shops = DB::table('shops')->get();
        $drivers = DB::table('drivers')->get();
        $customers = DB::table('customers')->get();

        $total_shops = count($shops);
        $total_drivers = count($drivers);
        $total_customers = count($customers);

        $orders = DB::table('orders')->get();

        $onGoing_orders = 0;
        $inProgress_orders = 0;
        $completed_orders = 0;
        $delivered_orders = 0;
        $canceled_orders = 0;

        foreach ($orders as $order){
            if($order->status == "drop")
                $onGoing_orders += 1;
            else if($order->status == "progress")
                $inProgress_orders += 1;
            else if($order->status == "complete")
                $completed_orders += 1;
            else if($order->status == "deliver")
                $delivered_orders += 1;
            else if($order->status == "cancel")
                $canceled_orders += 1;
        }

        return view('admin.dashboard', ["total_shops"=>$total_shops, "total_drivers"=>$total_drivers, "total_customers"=>$total_customers, "onGoing_orders"=>$onGoing_orders, "inProgress_orders"=>$inProgress_orders, "completed_orders"=>$completed_orders, "delivered_orders"=>$delivered_orders, "canceled_orders"=>$canceled_orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
