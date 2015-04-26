@extends('front.base')

@section('content')
    @include('front.partials.searchbar')
    @include('front.partials.navbar')
    <h1 class="page-title">Make a Booking Enquiry</h1>
    <div class="container">
        @include('front.partials.bookingform')
    </div>
    @include('front.partials.footer')
@endsection