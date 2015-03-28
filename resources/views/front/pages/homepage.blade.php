@extends('front.base')

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="homepage-banner">
            <img src="{{ asset('images/isomark_logo.svg') }}" alt="logo"/>
            <h1 class="tagline">facilitating global standards</h1>
        </div>
    </header>
    <section class="intro">
        <p>Isomark prides itself on not only providing the best possible services to our clients, but also realise that each client has special requirements. Therefore at Isomark we do our utmost to identify with your individual needs and address them to your complete satisfaction</p>
    </section>
@endsection