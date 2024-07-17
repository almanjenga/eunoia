<?php
// namespace App\Http\Controllers;

// use App\Models\ChatRoom;
// use Illuminate\Http\Request;

// class ChatRoomController extends Controller
// {
//     public function index()
//     {
//         $chatRooms = ChatRoom::all();
//         return view('chatrooms.index1', compact('chatRooms'));
//     }

//     public function show(ChatRoom $chatRoom)
//     {
//         $messages = $chatRoom->messages()->with('user')->latest()->get();
//         return view('chatrooms.show', compact('chatRoom', 'messages'));
//     }
// }
