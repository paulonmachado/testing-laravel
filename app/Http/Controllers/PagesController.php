<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function parsingData(){

    	$people = ['Matt', 'Damon', 'Jorge'];

	    //return view('welcome', ['people' => $people]); 
	    //return view('welcome', compact('people'));
	    //return view('welcome')->with('people', $people);
	    //return view('welcome')->withPeople($people);
	    return view('pages.parsingData')->with([
	    	'people' => $people
	    ]);
    }
}
