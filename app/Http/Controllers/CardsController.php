<?php

namespace App\Http\Controllers;

use App\Card;
use DB;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {

    	//$cards = DB::table('cards')->get();
    	$cards = Card::all();

    	return view('cards.index',compact('cards'));
    } 

    // public function show($id)
    // {
    // 	$card = Card::find($id);

    // 	return view('cards.show',compact('card'));
    // }

    public function show(Card $card)
    {
        //$card = Card::with('notes.user')->find(1);
        $card->load('notes.user');
    	return view('cards.show',compact('card'));
    }


}
