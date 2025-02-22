@extends('layouts.app')


@section('main-content')
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
