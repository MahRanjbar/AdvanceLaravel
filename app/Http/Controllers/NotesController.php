<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Tag;
use Session;
use Gate;
class NotesController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->input('tags'));
        //Validation form
        $this->validate($request,[

            'body'=>'required'

        ]);
        //Fill DataBase Field & Save
    	$note = new Note;
    	$note->body = $request->body;
    	$note->card_id = $request->route('id');
        $note->user_id="1";
    	$note->save();

        $tag = new Tag;
        $tag->name = 'test';
        $tag->save();


        $note->tags()->attach($request->input('tags'));//-------> for insert
        //$note->tags()->detachach($request->input('tags'));----> for delete

        Session::flash('flash_message','Your Card has been created');


    	return back();

    }

    public function edit(Note $note)
    {
        // if(Gate::allows('edit-note',$note)){
            return view('notes.edit',compact('note'));
            
        // }
        // abort(403,'sorry');
    	
    }
	 
	  public function update(Note $note,Request $request)
    {
    	$note->update($request->all());

    	return back();

    }

}
