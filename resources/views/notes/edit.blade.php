@extends('layout')

@section('content')
	
	<h1>Edit the note</h1>

	<form  method="POST" action="/notes/{{ $note->id }}">
		{{-- <input type="hidden" name="_method" value="PATCH"> --}}
		{{ method_field('PATCH') }}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
				<textarea name="body" title="body" class="form-control">{{$note->body}}</textarea>
		</div>
		
		@can('edit-note',$note)
		<div class="form-group">
				<button type="submit" class="btn btn-primary">Update Note</button>
		</div>
		
		@endcan

	</form>
	<a class="btn btn-sm btn-default" href="/cards/{{$note->card_id}}">Back</a>

@endsection