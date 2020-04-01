<?php

namespace App\Http\Controllers\Customer\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ConversationResource;
use App\Models\general\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class ConversationController extends Controller
{

    public $successStatus = 200;
    public function __construct()
    {
        $this->middleware('auth:api_customer');
    }

    public function index(Request $request)
    {

        $conversations = DB::table('conversations')
            ->join('shops', 'conversations.persontwoid', '=', 'shops.id')
            ->select('conversations.*', 'shops.avatar', 'shops.address', 'shops.email')
            ->where('persononeid', '=', $request->customer_id)->get();
        return response()->json($conversations, $this->successStatus);
    }

    public function uploadVideo(Request $request)
    {
        $customer = DB::table('customers')->where("id", '=', $request->customer_id)->first();
        $shop = DB::table('shops')->where("id", '=', $request->shop_id)->first();

        $video = $request->file('video');
        $fileName = time() . '.' . $video->getClientOriginalName();
        //        $path = public_path('/videos/'. $fileName);
        //        (new ImageManager)->make($video->getRealPath())->save($path);
        $video->move(public_path() . '/videos/', $fileName);

        $videoWithPath = '/videos/' . $fileName;

        $conversation = Conversation::create([
            "personone" => $customer->name,
            "persontwo" => $shop->name,
            "persononeid" => $customer->id,
            "persontwoid" => $shop->id,
            "video_link" => $videoWithPath
        ]);

        $conversation_id = DB::table('conversations')->orderBy('id', 'DESC')->first();

        $serviceAccount = ServiceAccount::fromJsonFile(app_path() . '/Http/Controllers/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            // ->withDatabaseUri('https://laravelfirebase-9d875.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('conversation')
            // ->getChild($existing_conversation->id)
            ->getChild($conversation_id->id)
            ->set([
                'sent' => 'start',
            ]);

        return new ConversationResource($conversation);

        //        return response()->json($chats, $this->successStatus);
    }

    public function showChats(Request $request)
    {
        $chats = DB::table('chats')->where('conversation_id', '=', $request->conversation_id)->get();
        return response()->json($chats, $this->successStatus);
    }

    public function saveChat(Request $request)
    {
        DB::table('chats')->insert([
            "conversation_id" => $request->conversation_id,
            "message" => $request->message,
            "senderid" => $request->sender_id
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
                'sent' => 'start',
            ]);

        $chats = DB::table('chats')->where('conversation_id', '=', $request->conversation_id)->get();
        return response()->json($chats, $this->successStatus);
    }

    public function showOrder(Request $request)
    {
        $order = DB::table('orders')->where('order_id', '=', $request->order_id)->first();
        return response()->json($order, $this->successStatus);
    }

    public function showDrivers(Request $request)
    {
        $drivers = DB::table('drivers')->where('area_code', '=', $request->area_code)->get();
        return response()->json($drivers, $this->successStatus);
    }

    public function getAvailableAppointments(Request $request)
    {
        $appointments = DB::table('appointments')
            ->where('driver_id', '=', $request->driver_id)
            ->where('date', '=', $request->date)
            ->where('status', '=', "available")
            ->get();

        return response()->json($appointments, $this->successStatus);
    }

    public function bookAppointment(Request $request)
    {
        DB::table('appointments')->where('id', $request->id)->update([
            "customer_id" => $request->customer_id,
            "shop_id" => $request->shop_id,
            "order_id" => $request->order_id,
            "driver_id" => $request->driver_id,
            "status" => "book"
        ]);

        // return response()->json("success: yes", $this->successStatus);
        return response()->json(["success" => "yes"], $this->successStatus);
    }

    /*public function index()
    {
        $conversations = DB::table('conversations')->where('persontwoid', '=', Auth::user()->id)->get();
        return view('shop.chatMgt.conversation', ["conversations" => $conversations]);
    }*/

    /*public function viewSingleChatComplete($conversation_id)
    {
        $chats = DB::table('chats')->where('conversation_id', '=', $conversation_id)->get();
        $customer = DB::table('conversations')->where('id', '=', $conversation_id)->first();

        //        return view('shop.chatMgt.chat', ["chats" => $chats, "conversation_id"=>$conversation_id]);

        return view('shop.chatMgt.chat', ["chats" => $chats, "conversation_id" => $conversation_id, "customer_id" => $customer->persononeid]);
    }*/


    /* public function store(Request $request)
    {
        //        return $request->senderid." : ".$request->message. " : ". $request->conversation_id;

        //        $conversation = DB::table('conversations')
        //            ->updateOrInsert(['persontwoid' => $request->shop_id, 'persononeid' => Auth::user()->id], [
        //                'personone' => Auth::user()->name,
        //                'persontwo' => $request->shop_name,
        //                'persononeid' => Auth::user()->id,
        //                'persontwoid' => $request->shop_id,
        //            ]);

        //        return $request->senderid. "  :  " .  $request->conversation_id. "  :  ".  $request->attach. " :  ". $request->message;

        $msg_type = "text";
        if ($request->attach != "") {
            $msg_type = "attach";
        }

        $existing_conversation = DB::table('conversations')
            ->where('id', '=', $request->conversation_id)
            ->first();

        $confirm = DB::table('chats')->insert([
            "conversation_id" => $existing_conversation->id,
            "message" => $request->message,
            "senderid" => $request->senderid,
            "type" => $msg_type

        ]);

        $allChat = DB::table('chats')->orderBy('id', 'desc')->where('conversation_id', '=', $existing_conversation->id)->first();

        $messages = "";


        if ($allChat->senderid == Auth::user()->id) {
            if ($allChat->type == "order") {
                $messages .= "<div class='col-md-6'></div><div class='col-md-5' style='padding:8px;background-color:#587ace;border-radius:5px;color:white;margin-bottom:5px'>$allChat->message</div>";
            } else {

                $messages .= "<div class='col-md-6'></div><div class='col-md-5' style='padding:8px;background-color:#587ace;border-radius:5px;color:white;margin-bottom:5px'>$allChat->message</div>";
            }
        } else {
            if ($allChat->type == "order") {
                //                    $messages .= "<tr><span style='text-align: left'>Order created with id: <a href='#' data-toggle='modal' data-target='#ordermodal'>$allChat->message</a></span></tr>";
                $messages .= "<div class='col-md-5' style='padding:8px;background-color:#587ace;border-radius:5px;color:white;margin-bottom:5px'>$allChat->message</div><div class='col-md-6'></div>";
            } else {
                //                    $messages .= "<tr><span style='text-align: left'>$allChat->message</span></tr>";
                $messages .= "<div class='col-md-5' style='padding:8px;background-color:#587ace;border-radius:5px;color:white;margin-bottom:5px'>$allChat->message</div><div class='col-md-6'></div>";
            }
        }


        return $messages;
    }*/
}
