<?php

// namespace App\Http\Controllers;

// use App\Models\ChatRoom;
// use App\Models\Message;
// use Illuminate\Http\Request;

// class MessageController extends Controller
// {
//     public function store(Request $request, ChatRoom $chatRoom)
//     {
//         $request->validate([
//             'message' => 'required|string',
//         ]);

//         $chatRoom->messages()->create([
//             'user_id' => auth()->id(),
//             'message' => $request->input('message'),
//         ]);

//         return redirect()->route('chatrooms.show', $chatRoom);
//     }
// }

