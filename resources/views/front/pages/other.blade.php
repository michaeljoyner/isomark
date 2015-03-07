@extends('front.base')

@section('head')
<style>
    .banner-header {
        width: 100%;
        min-height: 600px;
        background-image: url('{{ asset('images/hardhat.jpg') }}');
        background-size: cover;
    }

    .top-nav {
        width: 100%;
        text-align: right;
        padding: 1em;
    }

    .top-nav li {
        display: inline-block;
        text-transform: uppercase;
        padding: .15em 1em;
        font-size: 1.25em;
        border: 2px solid grey;
        border-radius: 10px;
        margin: 0 1em;
    }

    .top-nav .nav-logo {
        float: left;
    }

    .section-title {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 4em;
        color: #005580;
        text-align: center;
        margin-bottom: 0.75em;
    }

    .body-section {
        width: 100%;
        max-width: 800px;
        margin: 3em auto;
        text-align: center;
        position: relative;
    }

    .body-section:after {
        content: '';
        display: block;
        width: 500px;
        border-bottom: 2px solid orangered;
        margin: 1em auto;
    }

    #courses {
        max-width: 95%;
    }

    .service-box {
        width: 25%;
        margin: 1em 2em 3em;
        color: #778899;
        display: inline-block;
    }

    .service-header {
        text-align: center;
    }

    .service-header p {
        text-transform: uppercase;
        font-weight: 600;
        color: #005580;
    }

    .service-body {
        text-align: left;
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
    }

    #courses .row {
        margin-bottom: 4em;
    }

    .courses-intro {
        color: #778899;
        max-width: 800px;
        margin: 2em auto 4em;
    }

    .course-profile {
        text-align: left;
        margin: 0 0 3em;
    }

    .course-title {
        font-size: 120%;
        color: #005580;
        font-weight: 600;
    }

</style>
@endsection

@section('content')
    <nav class="top-nav">
        <img class="nav-logo" src="{{ asset('images/isomark2.png') }}" alt="" width="100px" height="40px"/>
        <ul>
            <li>about</li>
            <li>services</li>
            <li>courses</li>
            <li>contact us</li>
        </ul>
    </nav>
    <header class="banner-header">

    </header>
    <div id="services" class="body-section">
        <h1 class="section-title">Services</h1>
        <div class="service-box">
            <div class="service-header"><p>Sheq Inspection</p><span class="glyphicon glyphicon-grain"></span></div>
            <div class="service-body">For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</div>
        </div>
        <div class="service-box">
            <div class="service-header"><p>Sheq Inspection</p><span class="glyphicon glyphicon-grain"></span></div>
            <div class="service-body">For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</div>
        </div>
        <div class="service-box">
            <div class="service-header"><p>Sheq Inspection</p><span class="glyphicon glyphicon-grain"></span></div>
            <div class="service-body">For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</div>
        </div>
        <div class="service-box">
            <div class="service-header"><p>Sheq Inspection</p><span class="glyphicon glyphicon-grain"></span></div>
            <div class="service-body">For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</div>
        </div>
        <div class="service-box">
            <div class="service-header"><p>Sheq Inspection</p><span class="glyphicon glyphicon-grain"></span></div>
            <div class="service-body">For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</div>
        </div>
        <div class="service-box">
            <div class="service-header"><p>Sheq Inspection</p><span class="glyphicon glyphicon-grain"></span></div>
            <div class="service-body">For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</div>
        </div>
        <button class="more-button btn">more</button>
    </div>
    <div id="courses" class="body-section">
        <h1 class="section-title">Courses</h1>
        <p class="courses-intro">Isomark offers more than 30 fully accredited courses, all Bacon ipsum dolor amet t-bone tongue ham hock, meatloaf cupim tenderloin ribeye andouille beef ribs ham tri-tip capicola pork swine salami. Pork sausage ham hock tongue. Jowl shank tri-tip, sirloin frankfurter kielbasa porchetta. Ground round drumstick tail capicola alcatra, boudin flank pork loin meatball hamburger filet mignon. Bresaola pork porchetta, chuck rump hamburger brisket ground round sausage turducken. Chicken porchetta drumstick, sausage t-bone frankfurter pork swine tongue beef ribs corned beef. Tail porchetta beef ribs short loin beef venison corned beef pig shank.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="course-profile">
                    <p class="course-title">NEBOSH International Diploma in Occupational Safety and Health</p>
                    <p class="course-venue">Venue: JHB</p>
                    <div class="btn btn-xs btn-primary pull-right">JOIN</div>
                    <p class="course-dates">12th July - 25th July 2015</p>
                    <p class="book-by">Booking closes: 30th April 2015</p>
                </div>
                <div class="course-profile">
                    <p class="course-title">NEBOSH International General Certificate Course</p>
                    <p class="course-venue">Venue: PMB</p>
                    <div class="btn btn-xs btn-primary pull-right">JOIN</div>
                    <p class="course-dates">3rd Aug - 14th Aug 2015</p>
                    <p class="book-by">Booking closes: 31st May 2015</p>
                </div>
                <button class="more-button btn">more</button>
            </div>
            <div class="col-md-6">
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
            </div>
        </div>
    </div>
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