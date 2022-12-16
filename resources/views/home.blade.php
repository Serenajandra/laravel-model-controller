@extends('layouts.app')

@section('content')
    <section>
        <h1 class="text-center">Movies</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    </section>
@endsection
