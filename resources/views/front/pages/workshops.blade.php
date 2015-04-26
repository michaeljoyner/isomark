@extends('front.base')

@section('content')
    @include('front.partials.searchbar')
    @include('front.partials.navbar')
    <div class="container">
        <h1 class="page-title">Isomark Training Workshops</h1>
        <div class="row workshop-list-head workshop-row">
            <div class="col-md-6 workshop-detail">
                Workshop
            </div>
            <div class="col-md-2 workshop-detail">
                Duration
            </div>
            <div class="col-md-2 workshop-detail">
                Fee
            </div>
            <div class="col-md-2 workshop-detail">
            </div>
        </div>
        @foreach($workshops as $workshop)
            <div class="row workshop-row">
                <div class="col-md-6 workshop-detail">
                    {{ $workshop->name }}
                </div>
                <div class="col-md-2 workshop-detail">
                    {{ $workshop->duration }}
                </div>
                <div class="col-md-2 workshop-detail">
                    {{ $workshop->fee }}
                </div>
                <div class="col-md-2 workshop-detail">
                    <a href="/workshops/bookings/{{ $workshop->slug }}" class="btn btn-danger btn-xs">Make Booking</a>
                </div>
            </div>
        @endforeach
    </div>
    @include('front.partials.footer')
@endsection