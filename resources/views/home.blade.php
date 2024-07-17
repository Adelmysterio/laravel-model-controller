@extends('layouts.app')

@section('main-content')
    <main class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <article class="col-4">
                    <p>{{ $movie->id }}</p>
                    <h2>{{ $movie->title }}</h2>
                    <pre>{{ $movie->original_title }}</pre>
                    <p>{{ $movie->nationality }}</p>
                    <p>{{ $movie->date }}</p>
                    <p>{{ $movie->vote }}</p>
                </article>
            @endforeach
        </div>
    </main>
@endsection
