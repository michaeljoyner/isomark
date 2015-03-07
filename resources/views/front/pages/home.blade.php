@extends('front.base')

@section('head')
<style>
    @font-face {
        font-family: 'Agenda Italic';
        src: url('../fonts/agenda-medium-italic.ttf');
    }

    .tagline {
        font-family: 'Agenda Italic';
        font-size: 4.5em;
        margin: .75em auto;
        color: orangered;
    }

    .tagline:after {
        display: none;
    }

    .top-bar {
        width: 100%;
        height: 50px;
        background: #1D2853;
    }

    .menu-burger {
        float: left;
        font-size: 40px;
        margin-left: 0.5em;
    }

    .menu-burger span {
        color: orangered;
        line-height: 50px;
    }

    .search-form {
        width: 10em;
        margin-right: 2em;
    }

    .search-form input {
        margin-top: 8px;
        border-radius: 0;
    }

    .main-nav {
        background-color: transparent;
        border-bottom: none;
    }

    .main-nav ul li {
        height: 4em;
        line-height: 4em;
        background-color: #1D2853;
    }

    .main-nav li:first-child {
        float: left;
    }

    .main-nav li:last-child {
        float: right;
    }

    .main-nav li:nth-child(3) {
        margin: 0 1%;
    }

    .info-section {
        padding: 3em 1.5em;
    }

    .logo-banner {
        margin: 6em auto;
    }

    .content-block {
        min-height: 450px;
        background-color: #eeeeee;
        position: relative;
        padding: 1em;
    }

    .newsletter:after {
        content: '';
        height: 100%;
        position: absolute;
        top: 0;
        right: -16px;
        border-right: 2px solid orangered;
    }

    .section-title {
        text-transform: uppercase;
        text-align: center;
        color: orangered;
    }

    .news-entry, .course-entry {
        margin: 2em 0;
    }

    .news-entry p, .course-entry p {
        color: #1D2853;
        font-size: 120%;
    }

    .news-date {
        font-weight: bolder;
    }

    .read-on {
        font-style: italic;
    }

    .course-name, .course-date {
        font-weight: bold;
    }

    .course-entry .course-prompt {
        padding: 0.25em 2em;
        background-color: #d5d5d5;
        color: #ffffff;
        border-radius: 8px;
        cursor: pointer;
    }

    .more-button {
        display: block;
        width: 10em;
        margin: 2em auto;
        background: orangered;
        color: #ffffff;
        text-transform: uppercase;
        border-radius: 0;
        cursor: pointer;
        font-weight: 700;
        position: absolute;
        top: 83%;
        left: 35%;
    }

    footer {
        width: 100%;
        height: 300px;
        background-color: #1D2853;
    }
</style>
@endsection
@section('content')
<div class="top-bar">
    <div class="menu-burger">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
    </div>
    <div class="search-form pull-right">
        <input class="form-control" type="text" placeholder="search"/>
    </div>
</div>
<header class="logo-banner">
    <img src="{{ asset('images/isomark2.png') }}" alt="logo banner"/>
</header>
<nav class="main-nav">
    <ul>
        <li>home</li>
        <li>about</li>
        <li>services</li>
        <li>courses</li>
        <li>contact us</li>
    </ul>
</nav>
<h1 class="tagline">facilitating global standards</h1>
<p class="intro">Isomark prides itself on not only providing the best possible services to our clients, but also realise that each client has special requirements. Therefore at Isomark we do our utmost to identify with your individual needs and address them to your complete satisfaction</p>

<div id="slides">
    <div class="carousel-slide">
        <img src="{{ asset('images/cranes.jpg') }}" alt=""/>
        <div class="slide-text-holder">
            <p>Crane Manoeuvring 101</p>
        </div>
    </div>
    <div class="carousel-slide">
        <img src="{{ asset('images/hardhat.jpg') }}" alt=""/>
        <div class="slide-text-holder">
            <p>Hard Hat Lessons 203</p>
        </div>
    </div>
</div>
<div class="info-section">
    <div class="row">
        <div class="col-md-6">
            <div class="newsletter content-block">
                <h1 class="section-title">newsletter</h1>
                <div class="news-entry">
                    <p class="news-date">6 March 2015</p>
                    <p class="news-lead">New Product! Introducing the Health and Wellness Course.</p>
                    <p class="read-on pull-right">...read on</p>
                </div>
                <div class="news-entry">
                    <p class="news-date">28 Feb 2015</p>
                    <p class="news-lead">New employee! Marks Makayane is our new sales consultant.</p>
                    <p class="read-on pull-right">...read on</p>
                </div>
                <button class="more-button btn">more</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="courses content-block">
                <h1 class="section-title">next course</h1>
                <div class="course-entry">
                    <p class="course-name">Scissor Lift</p>
                    <p class="course-prompt pull-right">join</p>
                    <p class="course-date">8 March 2015</p>
                </div>
                <div class="course-entry">
                    <p class="course-name">Work Permit Issuer</p>
                    <p class="course-prompt pull-right">sold out</p>
                    <p class="course-date">9 March 2015</p>
                </div>
                <div class="course-entry">
                    <p class="course-name">Overhead Crane</p>
                    <p class="course-prompt pull-right">join</p>
                    <p class="course-date">16 March 2015</p>
                </div>
                <button class="more-button btn">more</button>
            </div>
        </div>
    </div>
</div>
<footer></footer>
@endsection

@section('bodyscripts')
    <script>
        $(function(){
          $("#slides").slick({
            accessibility: true,
            autoplay: true,
            autoplaySpeed: 7000,
            arrows: false
          });
        });
      </script>
@endsection