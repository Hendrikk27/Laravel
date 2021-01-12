<?php

namespace App\Http\Controllers;

use App\Game;
use App\Type;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        $types = Type::all();
        return view('home', ['game' => $games], ['type' => $types]);
    }

    public function detail($id, $title){
        $games = Game::where('id', '=', $id)->get();

        $typename = Type::whereHas('Game', function($query) use($title){
            $query -> where('title', 'like', $title);
        })->value('name');


        return view('detail', [
            'game' => $games,
            'type' => $typename
        ]);
    }

    public function view($id)
    {
        $type = Type::where('id', $id)->get();
        $game = Game::where('type_id', $id)->get();

        return view('view',['game' => $game], ['type' => $type]);
    }
}
