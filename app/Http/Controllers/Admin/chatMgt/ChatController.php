<?php

namespace App\Http\Controllers\Admin\chatMgt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $conversations =  DB::table('conversations')->get();
        return view('admin.conversations.viewAll', ["conversations" => $conversations]);
    }

    public function destroy($id)
    {
        DB::table('conversations')->where('id', $id)->delete();
        return redirect()->route('admin.conversations.create')->with("info", "Conversation deleted");
    }

    public function completeChat($id)
    {
        $completeChat = DB::table('chats')->where('conversation_id', $id)->get();
        return view('admin.chats.viewAll', ["completeChats" => $completeChat]);
    }
}
