@extends('front.base')

@section('seo')
    @include('front.partials.seotags', [
    'description' => 'Make a booking for one or more of Isomark\'s fully accredited training courses or competitive workshops to ensure your company meets the required SHE standards',
    'keywords' => 'Isomark, Risk Management Training, SHEQ, Health and Safety Training',
    'title' => 'Make a booking for Isomark\'s industry leading training courses'])
    @include('front.partials.ogmeta', [
    'og_title' => 'Make a booking for Isomark\'s industry leading training courses',
    'og_description' => 'Make a booking for one or more of Isomark\'s fully accredited training courses or competitive workshops to ensure your company meets the required SHE standards',
    'og_url' => url('/bookings')])
    <link rel="canonical" href="http://isomark.co.za/bookings"/>
@endsection

@section('content')
    @include('front.partials.pageheader', ['pageTitle' => 'Make a booking'])
    <div class="container">
        @include('front.partials.bookingform')
    </div>
    @include('front.partials.footer')
@endsection