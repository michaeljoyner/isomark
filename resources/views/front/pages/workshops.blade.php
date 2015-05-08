@extends('front.base')

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="page-title-banner">
            <span>Isomark Workshops</span>
        </div>
    </header>
    <div class="container workshop-container">
        <div class="row workshop-list-head workshop-row">
            <div class="col-sm-6 workshop-detail">
                Workshop
            </div>
            <div class="col-sm-2 workshop-detail">
                Duration
            </div>
            <div class="col-sm-2 workshop-detail">
                Fee
            </div>
            <div class="col-sm-2 workshop-detail">
            </div>
        </div>
        @foreach($workshops as $workshop)
            <div class="row workshop-row">
                <div class="col-sm-6 workshop-detail">
                    {{ $workshop->name }}
                </div>
                <div class="col-sm-2 workshop-detail">
                    {{ $workshop->duration }}
                </div>
                <div class="col-sm-2 workshop-detail">
                    {{ $workshop->fee }}
                </div>
                <div class="col-sm-2 workshop-detail clearfix">
                    <a href="/workshops/bookings/{{ $workshop->slug }}" class="btn prompt-button btn-xs pull-right">Make Booking</a>
                </div>
            </div>
        @endforeach
    </div>
    @include('front.partials.footer')
@endsection