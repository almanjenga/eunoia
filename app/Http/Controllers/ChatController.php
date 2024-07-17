<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function show($room)
    {
        $messages = Message::where('room', $room)->latest()->get();
        return view('chatroom', compact('room', 'messages'));
    }

    public function getMessages($room)
    {
        $messages = Message::where('room', $room)->with('user')->get();
        return response()->json($messages);
    }

    public function postMessage(Request $request, $room)
    {
        $message = Message::create([
            'message' => $request->message,
            'user_id' => auth()->id(),
            'room' => $room,
        ]);

        broadcast(new MessageSent($message->load('user')))->toOthers();

        return response()->json(['status' => 'Message Sent!']);
    }

    
}
