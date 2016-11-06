<?php

// DB::listen(function($query){
// 	var_dump($query->sql, $query->bindings);
// });

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('parsingData', 'PagesController@parsingData');
Route::get('parsingData', function () {

	$people = ['Matt', 'Damon', 'Jorge'];

    //return view('welcome', ['people' => $people]); 
    //return view('welcome', compact('people'));
    //return view('welcome')->with('people', $people);
    //return view('welcome')->withPeople($people);
    return view('pages.parsingData')->with([
    	'people' => $people
    ]);
});

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');


Auth::routes();

Route::get('/home', 'HomeController@index');

