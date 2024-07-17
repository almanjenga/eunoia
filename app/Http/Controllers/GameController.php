<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('game.breathing');
    }

    public function level2()
    {
        return view('game.meditation');
    }
    public function level3()
    {
        return view('game.memory');
    }


}
