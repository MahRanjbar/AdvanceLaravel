<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
class NotesController extends Controller
{
    public function store(Request $request)
    {
    	$note = new Note;
    	$note->body = $request->body;
    	$note->card_id = $request->route('id');
    	$note->save();
    	return back();

    }

    public function edit(Note $note)
    {
    	return view('notes.edit',compact('note'));
    }
	 
	  public function update(Note $note,Request $request)
    {
    	$note->update($request->all());

    	return back();

    }

}
