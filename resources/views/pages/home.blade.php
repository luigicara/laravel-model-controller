@extends('layouts.main-layout')

@section('head')
    <title>Movies</title>
@endsection

@section('content')
    <h1>MOVIES</h1>

    <div id="test">
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie -> title }} - {{ $movie -> original_title }}</li>
            @endforeach
        </ul>
    </div>
@endsection