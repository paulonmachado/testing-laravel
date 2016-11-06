@extends('layout')

@section('content')
	<h1>{{ $card->title }}</h1>

	<ul>
		@foreach ($card->notes as $note)

		<li>
			{{ $note->body }}
			<a href="#">{{ $note->user->name }}</a>
		</li>

		@endforeach
	</ul>

	<br/>
	<hr>

	<form method="POST" action="/cards/{{$card->id}}/notes">
	{{ csrf_field() }}
		<textarea name="body">{{ old('body') }}</textarea>
		<button type="submit">Add Note</button>
	</form>

	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
@stop