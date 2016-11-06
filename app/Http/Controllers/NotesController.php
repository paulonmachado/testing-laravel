<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    
    /*
    public function store()
    {
    	return \Request::all();
    }
    */

	/*
    public function store()
    {
    	return request()->all();
    }
	*/

    public function store(Request $request, Card $card)
    {
    	//return $request->all();
		
		/*    	
		$note = new Note;
    	$note->body = $request->body;
    	$card->notes()->save($note);
    	*/

		/*
    	$card->notes()->save(
    		New Note(['body' => $request->body])
    	);
		*/

		//$card->notes()->create(['body' => $request->body]);

    	//$card->notes()->create($request->all()); //because of fillable fields in Note Model

        $this->validate($request, [
            'body' => 'required|min:10'
        ]);

        $note = New Note($request->all());
    	//$note = New Note(['body' => $request->body]);

        $card->addNote($note,1);

    	//return \Redirect::to('/some/new/uri/');
    	//return redirect()->to('/some/new/uri/');
    	//return redirect('/some/new/uri/');
    	return back();

    }

    public function edit(Note $note)
    {
    	return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
    	$note->update($request->all());
    	return back();
    }	
    
}
