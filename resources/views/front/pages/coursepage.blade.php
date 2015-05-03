@extends('front.base')

@section('content')
    <header class="clearfix">
        @include('front.partials.searchbar')
        @include('front.partials.navbar')
        <div class="page-title-banner">
            <span>Isomark Courses</span>
        </div>
    </header>
    <div class="container">
        <p class="courses-intro"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis delectus distinctio eum exercitationem facere minima omnis perspiciatis soluta vel voluptatem? Animi eligendi est labore laborum magnam nam placeat quasi sint.</span><span>Ab ad aliquam beatae consequatur exercitationem facere modi molestias, necessitatibus nemo nulla quod sequi temporibus veniam? Dolore esse iure labore nemo nostrum quia. A beatae itaque numquam repudiandae suscipit tempora?</span><span>Accusamus adipisci asperiores aspernatur enim exercitationem, iure neque nesciunt non omnis optio praesentium quaerat, saepe, sed sequi sunt tempora vero. Ad excepturi fuga modi officia omnis qui rem unde vitae.</span>
        </p>
        <div class="course-icons-container clearfix">
            <div class="course-icon-row clearfix">
                <div class="pull-left clearfix">
                    <a href="/courses/safety-health-and-environment">
                        <div class="course-icon-box">
                            @include('svg.isomark_website_icons-13')
                            <h4>Safety, Health and Environment</h4>
                        </div>
                    </a>
                </div>
                <div class="pull-right clearfix"><a href="/courses/lifting-equipment-training"><div class="course-icon-box">
                    @include('svg.isomark_website_icons-14')
                    <h4>Lifting Equipment</h4>
                </div></a></div>
            </div>
            <div class="course-icon-row clearfix">
                <div class="pull-left"><a href="/courses/soft-skills-programmes"><div class="course-icon-box">
                    @include('svg.isomark_website_icons-15')
                    <h4>Soft Skills Programmes</h4>
                </div></a></div>
                <div class="pull-right"><a href="/courses/skills-bundles"><div class="course-icon-box">
                    @include('svg.isomark_website_icons-16')
                    <h4>Skills Bundles</h4>
                </div></a></div>
            </div>
            <div class="course-icon-row clearfix">
                <div class="pull-left"><a href="/workshops"><div class="course-icon-box">
                    @include('svg.isomark_website-18')
                    <h4>Workshops</h4>
                </div></a></div>
            </div>
        </div>
    </div>
    @include('front.partials.footer')
@endsection