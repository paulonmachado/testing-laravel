@extends('layout')

@section('content')
	<h1>Edit note</h1>

	<form method="POST" action="/notes/{{ $note->id }}">
		{{ method_field('PATCH') }}
		<textarea name="body">{{$note->body}}</textarea>
		<button type="submit">Update Note</button>
	</form>
@stop