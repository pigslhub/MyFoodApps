<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:shop');
    }

    public function index()
    {
        $orders = DB::table('orders')
            ->where('shop_id', '=', Auth::guard('shop')->user()->id)
            ->get();

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


        return view('shop.dashboard', ["onGoing_orders"=>$onGoing_orders, "inProgress_orders"=>$inProgress_orders, "completed_orders"=>$completed_orders, "delivered_orders"=>$delivered_orders, "canceled_orders"=>$canceled_orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function selectCategory()
    {
        $categories =  DB::table('categories')->get();
        $products = DB::table('products')
            ->join('categories', 'products.category_id', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->get();
        return view('shop.shopMgt.category.selectCategory', ["categories" => $categories, "products"=>$products]);
    }



    public function selectService(Request $request, $id)
    {


        $services =  DB::table('services')->get();
        return view('shop.shopMgt.service.selectService', ["services" => $services, "categoryId" => $id]);
    }


    public function store(Request $request)
    {
            $avatar = $request->file('picture');
            $fileName = time(). '.'. $avatar->getClientOriginalName(). '.'. $avatar->getClientOriginalExtension();
            $path = public_path('/assets/images/product/'. $fileName);
            (new ImageManager)->make($avatar->getRealPath())->resize(300,300)->save($path);

            $fileNameWithPath = 'images/shops/'. $fileName;


            DB::table('products')->insert([
                'restaurant_id' => Auth::guard('shop')->user()->id,
                'category_id' => $request->category_id,
                'name' => $request->product,
                'price' => $request->price,
                'picture'=> $fileNameWithPath
            ]);

            return redirect()->route('shop.selectCategory');

    }



    public function showMyCategories()
    {
        //        $categories  = DB::table('shop_category_services_rate')
        ////            ->join('categories', 'shop_category_services_rate.category_id', '=', 'categories.id')
        ////            ->select('shop_category_services_rate.*', 'categories.name as catname')
        ////            ->where('shop_id', '=', Auth::user()->id)
        ////            ->get();
        $categories  = DB::table('categories')
            ->join('shop_category_services_rate', 'categories.id', '=', 'shop_category_services_rate.category_id')
            ->select('categories.*')
            ->where('shop_category_services_rate.shop_id', '=', Auth::user()->id)
            ->distinct()
            ->get();
        return view('shop.shopMgt.category.viewCategory', ["categories" => $categories]);
    }

    public function showMyServices($id)
    {
        $services  = DB::table('shop_category_services_rate')
            ->join('services', 'shop_category_services_rate.service_id', '=', 'services.id')
            ->select('shop_category_services_rate.*', 'services.name as servname')
            ->where('category_id', '=', $id)
            ->where('shop_id', '=', Auth::user()->id)
            ->get();
        return view('shop.shopMgt.service.viewService', ["services" => $services]);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('shop.selectCategory');
    }
}
