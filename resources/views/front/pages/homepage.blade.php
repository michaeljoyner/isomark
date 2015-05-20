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
    <header class="main-home-header">
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="homepage-banner">
            <img src="{{ asset('images/mainlogo.png') }}" alt="logo"/>

            <h1 class="tagline">facilitating global standards</h1>
        </div>
        <section class="intro">
            <p>ISOMARK prides itself on providing the best possible services to our clients, and we also realise that each client has special requirements. Therefore at ISOMARK we do our utmost to identify with your individual needs and address them to your absolute satisfaction</p>
        </section>
    </header>

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
            <div class="row client-name-row">
                <div class="col-sm-4 client-names">RCL Foods</div>
                <div class="col-sm-4 client-names">Levi Strauss</div>
                <div class="col-sm-4 client-names">Barloworld</div>
            </div>
            <div class="row client-name-row">
                <div class="col-sm-4 client-names">Ciro</div>
                <div class="col-sm-4 client-names">Vector Logistic Solutions</div>
                <div class="col-sm-4 client-names">Nestle</div>
            </div>
            <div class="row client-name-row final-row">
                <div class="col-sm-4 client-names">Makro</div>
                <div class="col-sm-4 client-names">Abedare Cables</div>
                <div class="col-sm-4 client-names">Boxmore Plastics</div>
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
                autoplaySpeed: 4000,
                arrows: true
            });
            contactForm.init();
            if(window.innerWidth > 400) {
                $(".carousel-img").each(function (index, el) {
                    console.log('new img');
                    var img = new Image();
                    var elem = this;
                    img.onload = function () {
                        elem.src = this.src;
                    };
                    img.src = this.getAttribute('data-lrg');
                });
            }
        });
    </script>
@endsection