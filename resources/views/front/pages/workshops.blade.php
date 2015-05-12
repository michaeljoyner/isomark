@extends('front.base')

@section('seo')
    @include('front.partials.seotags', [
    'description' => 'Isomark offers a comprehensive range of training workshops covering a broad range of Safety, Health and Environmental Risk Management topics',
    'keywords' => 'Isomark, workshops, training, risk management',
    'title' => 'Isomark Training Workshops'])
    @include('front.partials.ogmeta', [
    'og_title' => 'Isomark Training Workshops',
    'og_description' => 'Isomark offers a comprehensive range of training workshops covering a broad range of Safety, Health and Environmental Risk Management topics',
    'og_url' => Request::url()])
@endsection

@section('content')
    @include('front.partials.pageheader', ['pageTitle' => 'Isomark Workshops'])
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