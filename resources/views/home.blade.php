@extends('layouts.app')

@section('content')
    <section>
        <h1 class="text-center text-light m-4 text-uppercase">Movies</h1>
        <div class="container">
            <div class="row justify-content-between align-items-start">
                @foreach ($movies as $movie)
                    <div class="card bg-dark " style="width: 16rem;">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                        </div>
                        <ul class="list-group-flush list-group ">
                            <li class="list-group-item">
                                <h6>Titolo originale</h6> {{ $movie->original_title }}
                            </li>
                            <li class="list-group-item">
                                <h6>Nazionalità</h6> {{ $movie->nationality }}
                            </li>
                            <li class="list-group-item">
                                <h6>Data di uscita</h6> {{ $movie->date }}
                            </li>
                            <li class="list-group-item">
                                <h6>Voto</h6>{{ $movie->vote }}
                            </li>
                        </ul>
                        {{-- <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div> --}}
                    </div>
                @endforeach
            </div>

        </div>

    </section>
@endsection
