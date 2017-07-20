<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Card;
use App\Tag;

class CardsController extends Controller
{
    public function index()
    {
    	$cards = DB::table('cards')->get();
    	return view('cards.index',compact('cards'));
    }
    public function show($id)
    {
    	$card=Card::find($id);
        $card->load('notes.user');
        $tags = Tag::all();
        // return $card;
    	return view('cards.show',compact('card','tags'));

        // $card->load('notes.user');
        // return $card;
        
        // return view('cards.show',compact('card'));

    }
}
