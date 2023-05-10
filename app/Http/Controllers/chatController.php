<?php

namespace App\Http\Controllers;

//use http\Message;
use Illuminate\Http\Request;
use App\Events\Message;
class chatController extends Controller
{
    public function message(Request $request){
//        event(new Message($request->input('username'),$request->input('message')));
//        return [];
        event(new Message($request->input('username'),$request->input('message')));
        return [];
    }
}
