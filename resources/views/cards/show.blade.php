@extends('layout')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>
			{{ $card->title }}
		</h1>
		<ul class="list-group">
			@foreach($card->notes as $note)
				<li class="list-group-item">
					<a href="/note/{{ $note->id }}/edit">
					{{$note->body}}
					</a>
					<a href="" class="pull-right">{{ $note->user->name }}</a>

				</li>
			@endforeach
		</ul>
		<h3>Add New Note</h3>
		<form  method="POST" action="/cards/{{ $card->id }}/notes">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<textarea name="body" title="body" class="form-control">{{ old('body') }}</textarea>
			</div>
			
			<div class="form-group">
				<select class="form-control" name="tags[]" title="tags" multiple="multiple">
					@foreach($tags as $tag)
						<option value="{{ $tag->id }}">{{ $tag->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
		</form>

		@if(count($errors))
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

	</div>
</div>
@endsection