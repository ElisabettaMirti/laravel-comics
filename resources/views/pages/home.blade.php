@extends('layouts.app')


@section('main-content')
    <div class="main-content">
        <div class="container">
            <div class="current-titles">
                <h2>current series</h2>
            </div>
            <section class="latest-comics">
                @foreach ($latestComics as $comic)
                    <article>
                        <div class="img-cover">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h4>{{ $comic['title'] }}</h4>
                    </article>
                @endforeach
            </section>
            <div class="button">
                <p>load more</p>
            </div>
        </div>
    </div>
@endsection
