@extends('front.base')

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="page-title-banner">
            <span>Make a Booking</span>
        </div>
    </header>
    <div class="container">
        @include('front.partials.bookingform')
    </div>
    @include('front.partials.footer')
@endsection