@extends('front.base')

@section('seo')
    @include('front.partials.seotags', [
    'description' => 'Isomark is an industry leading Health, Safety and Environmental Risk Management Company. We work with you to ensure that your organisation meets the necessary requirements and is properly equipped with the knowledge and resources needed to manage your risk',
    'keywords' => 'Isomark, SHEQ Risk Management',
    'title' => 'Isomark - Facilitating Global Standards'])
    @include('front.partials.ogmeta', [
    'og_title' => 'Isomark - Facilitating Global Standards',
    'og_description' => 'Isomark is an industry leading Health, Safety and Environmental Risk Management Company. We work with you to ensure that your organisation meets the necessary requirements and is properly equipped with the knowledge and resources needed to manage your risk',
    'og_url' => Request::url()])
@endsection

@section('head')
    <meta property="CSRF-token" content="{{ Session::token() }}"/>
@endsection

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="homepage-banner">
            <img src="{{ asset('images/isomark_website.png') }}" alt="logo"/>

            <h1 class="tagline">facilitating global standards</h1>
        </div>
    </header>
    <section class="intro">
        <p>Isomark prides itself on providing the best possible services to our clients, and we also realise that each
            client has special requirements. Therefore at Isomark we do our utmost to identify with your individual
            needs and address them to your absolute satisfaction</p>
    </section>
    @include('front.partials.carousel')
    <section class="section-container" id="services">
        @include('front.partials.services')
    </section>
    <section class="section-container" id="courses">
        @include('front.partials.courses')
    </section>
    <section class="section-container" id="clients">
        <h1><span class="section-title">our clients</span></h1>

        <div class="container">
            <div class="row client-logo-row">
                <div class="col-sm-3 client-box">
                    @include('svg.clientlogo.rcl_foods')
                </div>
                <div class="col-sm-3 client-box">
                    @include('svg.clientlogo.vector')
                </div>
                <div class="col-sm-3 client-box">
                    @include('svg.clientlogo.levis')
                </div>
                <div class="col-sm-3 client-box">
                    @include('svg.clientlogo.nestle')
                </div>
            </div>
            <div class="row client-logo-row">
                <div class="col-sm-3 col-sm-offset-1 client-box">
                    @include('svg.clientlogo.eskom')
                </div>
                <div class="col-sm-3 col-sm-offset-1 client-box">
                    @include('svg.clientlogo.barloworld')
                </div>
                <div class="col-sm-3 col-sm-offset-1 client-box">
                    @include('svg.clientlogo.macro')
                </div>
            </div>
        </div>
    </section>
    <section class="section-container" id="contact">
        @include('front.partials.homecontactform', ['formTitle' => 'Contact Us'])
    </section>
    @include('front.partials.footer')
@endsection

@section('bodyscripts')
    <script>
        $(function () {
            $("#slides").slick({
                accessibility: true,
                autoplay: true,
                autoplaySpeed: 7000,
                arrows: false
            });
            contactForm.init();
        });
    </script>
@endsection