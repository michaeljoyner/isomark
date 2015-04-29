@extends('front.base')

@section('content')
    <header>
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
    </header>
    <div class="page-title-banner">
        <span>{{ $courses->first()->category->name }}</span>
    </div>
    <div class="content-wrapper clearfix">
        <div class="contents-col" data-spy="affix" data-offset-top="250" data-offset-bottom="1000">
            <h2>contents</h2>
            <ul>
                @foreach($list as $key => $value)
                    <li><a href="#{{$key}}">{{$value}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="details-col">
            @foreach($courses as $course)
                <section class="course-detailed" id="{{$course->slug}}">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="course-name">{{ $course->name }}</h1>
                            <div class="course-info">{!! $course->description !!}</div>
                            <a class="btn prompt-button" href="/bookings/{{ $course->slug }}">Make Booking</a>
                        </div>
                        <div class="col-md-6">
                            <p class="course-detail-name">Unit Standard ID</p>
                            <p class="course-info">{{ $course->usid }}</p>
                            <p class="course-detail-name">Aim and Objective</p>
                            <p class="course-info">{{ $course->aim }}</p>
                            <p class="course-detail-name">Certification</p>
                            <p class="course-info">{{ $course->certification }}</p>
                            <p class="course-detail-name">People per Course</p>
                            <p class="course-info">{{ $course->people_per_course }}</p>
                            <p class="course-detail-name">Course duration</p>
                            <p class="course-info">{{ $course->duration }}</p>
                            <p class="course-detail-name">Fee</p>
                            <p class="course-info">{{ $course->fee }}</p>
                        </div>
                    </div>
                </section>
            @endforeach
        </div>
    </div>
    @include('front.partials.footer')
@endsection

@section('bodyscripts')
    <script>
        $(".contents-col a").click(function(ev) {
            ev.preventDefault();
            $('html, body').animate({
                scrollTop: $(this.getAttribute('href')).offset().top - 50
            }, 1000);
        });
    </script>
@endsection