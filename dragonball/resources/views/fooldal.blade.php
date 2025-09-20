@extends('layout')

@section('content')
    <h1>Főoldal</h1>
    @foreach ($items as $character)
        {{ $character['name'] }}
        <x-card name={{ $character['name'] }} description={{ $character['description'] }} />
    @endforeach

    @if ($previous[0])
        <a href={{ '/page=' . $previous[1] }}>Previous</a>
    @endif

    @if ($next[0])
        <a href={{ '/page=' . $next[1] }}>Next</a>
    @endisset
@endsection
