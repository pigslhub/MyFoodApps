<?php

use App\Chat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->insert([
            "conversation_id" => "1",
            "message" => "Hello",
            "type" => "text",
            "senderid" => "1",
        ]);
        DB::table('chats')->insert([
            "conversation_id" => "1",
            "message" => "Hi",
            "type" => "text",
            "senderid" => "20000001",
        ]);
        DB::table('chats')->insert([
            "conversation_id" => "1",
            "message" => "fine",
            "type" => "text",
            "senderid" => "1",
        ]);
        DB::table('chats')->insert([
            "conversation_id" => "1",
            "message" => "How are you?",
            "type" => "text",
            "senderid" => "20000001",
        ]);
    }
}
