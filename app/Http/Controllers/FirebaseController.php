<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;


class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return void
     */
    public function index($chat_id)
    {


        return $newChat->getvalue();
    }
}
