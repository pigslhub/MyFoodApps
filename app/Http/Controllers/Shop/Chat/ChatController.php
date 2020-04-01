<?php

namespace App\Http\Controllers\Shop\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:shop');
    }

    public function index()
    {
        $conversations = DB::table('conversations')
            ->join('customers', 'conversations.persononeid', '=', 'customers.id')
            ->select('conversations.*', 'customers.avatar')
            ->where('persontwoid', '=', Auth::user()->id)->get();

        if (count($conversations) > 0) {
            $chats = DB::table('chats')->where('conversation_id', '=', $conversations[0]->id)->get();
            return view('shop.chatMgt.chat', ["conversations" => $conversations, "chats" => $chats, "conversation_id" => $conversations[0]->id, "customer_id" => $conversations[0]->persononeid]);
        } else {
            $chats = null;
            return view('shop.chatMgt.chat', ["conversations" => $conversations, "chats" => $chats, "conversation_id" => 0, "customer_id" => 0]);
        }
        //        $customer = DB::table('conversations')->where('id', '=', $conversations[0]->id)->first();
    }

    public function viewSingleChatComplete($conversation_id)
    {
        $conversations = DB::table('conversations')
            ->join('customers', 'conversations.persononeid', '=', 'customers.id')
            ->select('conversations.*', 'customers.avatar')
            ->where('persontwoid', '=', Auth::user()->id)->get();
        $chats = DB::table('chats')->where('conversation_id', '=', $conversation_id)->get();
        //        $customer = DB::table('conversations')->where('id', '=', $conversation_id)->first();

        return view('shop.chatMgt.chat', ["conversations" => $conversations, "chats" => $chats, "conversation_id" => $conversation_id, "customer_id" => $conversations[0]->persononeid]);
    }


    public function store(Request $request)
    {

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


        $serviceAccount = ServiceAccount::fromJsonFile(app_path() . '/Http/Controllers/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            // ->withDatabaseUri('https://laravelfirebase-9d875.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('conversation')
            // ->getChild($existing_conversation->id)
            ->getChild($existing_conversation->id)
            ->set([
                'sent' => 'sent' . $allChat->id,
            ]);
    }

    public function viewAllChat(Request $request)
    {

        $allChats = DB::table('chats')->where('conversation_id', '=', $request->conversation_id)->get();
        $messages = "";
        foreach ($allChats as $allChat) {
            if ($allChat->senderid == Auth::user()->id) {
                if ($allChat->type == "order") {

                    $messages .= "
                                    <div class='col-md-12' style='margin-top:-20px;margin-bottom:-20px'>
                                        <div class='row'> 
                                             <div class='col-md-1'></div> 
                                             <div class='col-md-10' style=' background-color:green,margin:0;padding:0'><div class='card bg-primary'><h3 style='color: #FFFFFF;text-align:center;'>Custom Offer </h3><p style='text-align: right;color: #FFFFFF;padding-right:10px;'><span class='fa fa-money'></span>   $allChat->amount</p><p style='text-align: right;color: #FFFFFF;padding-right:10px;'><span class='fa fa-history'></span>    $allChat->due_date</p><p style='text-align: right;color: #FFFFFF;padding-right:10px;'>$allChat->description</p><p style='text-align: right;color: #FFFFFF;padding-right:10px;'>$allChat->created_at</p></div></div> 
                                            <div class='col-md-1' style='padding-top:30px'><span class='fa fa-university'></span></div>  
                                        </div>
                                    </div>
                              ";
                } else {
                    $messages .= "
                                    <div class='col-md-12' style='margin-top:-20px;margin-bottom:-20px'>
                                        <div class='row'>  
                                             <div class='col-md-1'></div>  
                                             <div class='col-md-10' style='margin:0;padding:0'><div class='card bg-primary'><p style='color: #FFFFFF;padding-left:10px;padding-top:10px;'>$allChat->message </p><p style='text-align: right;color: #FFFFFF;padding-right:10px;'>$allChat->created_at</p></div></div> 
                                             <div class='col-md-1' style='padding-top:30px'><span class='fa fa-university'></span></div>
                                               
                                        </div>
                                    </div>
                              ";
                }
            } else {
                $messages .= "
                                    <div class='col-md-12' style='margin-top:-20px;margin-bottom:-20px'>
                                        <div class='row'>  
                                             <div class='col-md-1' style='padding-top:30px'><span class='fa fa-user'></span></div>
                                             <div class='col-md-10' style='margin:0;padding:0'><div class='card card-primary'><p style='color: #0e2b57;padding-left:10px;padding-top:10px;'>$allChat->message </p><p style='text-align: right;color: #0e2b57;padding-right:10px;'>$allChat->created_at</p></div></div> 
                                             <div class='col-md-1'></div>  
                                               
                                        </div>
                                    </div>
                              ";
            }
        }

        return $messages;
    }
}
