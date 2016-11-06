
@extends('layout')

@section('content')
    <ul>
        @unless ($people)
            there is no people.
        @endunless

        @foreach ($people as $people)
            <li>{{ $people }}</li>
        @endforeach
    </ul>
@stop

