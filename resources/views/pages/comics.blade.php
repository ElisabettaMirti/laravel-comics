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
    <section class="merch-nav">
        <ul>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                <span>digital comics</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                <span>dc merchandise</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <span>subscription</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                <span>comic shop locator</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                <span>dc power visa</span>
            </li>
        </ul>
    </section>
@endsection
