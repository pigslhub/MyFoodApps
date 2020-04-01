<?php

namespace App\Http\Controllers\Shop\Chat;

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
        $this->middleware('auth:shop');
    }
    public function index($customer_id, $conversation_id)
    {
        return view('shop.chatMgt.order', ["customer_id" => $customer_id, "conversation_id" => $conversation_id]);
    }

    public function store(Request $request)
    {
        $random_key = Str::random(10);
        DB::table('orders')->insert([
            "shop_id" => Auth::user()->id,
            "customer_id" => $request->customer_id,
            "order_id" => $random_key,
            "description" => $request->order_description,
            "amount" => $request->order_amount,
            "due_date" => $request->order_duedate,
            "status" => "sent"
        ]);

        $lastOrder = DB::table('orders')->orderBy("id", "DESC")->first();

        DB::table('chats')->insert([
            "conversation_id" =>  $request->conversation_id,
            "message" => $random_key,
            "description" => $request->order_description,
            "amount" => $request->order_amount,
            "due_date" => $request->order_duedate,
            "senderid" => Auth::user()->id,
            "orderid" => $lastOrder->id,
            "type" => "order"
        ]);

        $serviceAccount = ServiceAccount::fromJsonFile(app_path() . '/Http/Controllers/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            // ->withDatabaseUri('https://laravelfirebase-9d875.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('conversation')
            // ->getChild($existing_conversation->id)
            ->getChild($request->conversation_id)
            ->set([
                'sent' => 'order',
            ]);

        return redirect()->route("shop.conversation.chat", $request->conversation_id);
    }

    public function showOrderToCustomer(Request $request)
    {
        $order = DB::table('orders')->where('order_id', '=', $request->order_id)->first();
        return "<div class='row'>
                    <div class='col-md-12'>
                            <h3>$order->order_id</h3>
                             <h3>$order->description</h3>
                              <h3>$order->amount</h3>
                              <h3>$order->due_date</h3>
                        </div>
            </div>";
    }

    public function viewAllOrders()
    {
        $orders = DB::table('orders')
            ->join('customers', 'customers.id', 'orders.customer_id')
            ->join('drivers', 'drivers.id', 'orders.driver_id')
            ->select('orders.*', 'customers.name as customer_name', 'drivers.name as driver_name')
            ->where('shop_id', '=', Auth::user()->id)
            ->get();

        return view('shop.order.viewAll', ["orders"=>$orders]);
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

        return view('shop.order.viewSingle', ["order"=>$order]);
    }
    public function changeOrderStatus($order_id, $newStatus)
    {
        DB::table('orders')
            ->where('orders.id', '=', $order_id)
            ->update([
               'status'=>$newStatus
            ]);

        return redirect()->route('shop.order.viewAll');
    }




}
