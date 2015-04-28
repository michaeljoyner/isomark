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
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequuntur, est eveniet fugiat labore
            minus odit optio placeat suscipit voluptate. Ab adipisci amet beatae eius eum quia vel voluptas voluptate?
        </div>
        <div>Blanditiis consequatur, dolor ipsum laboriosam nulla recusandae saepe sint? Aliquid amet aspernatur
            consequuntur corporis debitis dicta dolor dolore, eligendi error id iure minus possimus ratione
            reprehenderit rerum saepe similique. Exercitationem?
        </div>
        <div>Accusantium amet cum cumque doloribus enim eum ex excepturi expedita fugiat, in incidunt labore laborum
            modi nam non nulla praesentium quae quaerat quam quis quos rerum, sapiente sed vel voluptas!
        </div>
        <div class="course-icons-container">
            <div class="course-icon-box">
                @include('svg.isomark_website_icons-13')
                <h4>Safety, Health and Environment</h4>
            </div>
            <div class="course-icon-box">
                @include('svg.isomark_website_icons-14')
                <h4>Lifting Equipment</h4>
            </div>
            <div class="course-icon-box">
                @include('svg.isomark_website_icons-15')
                <h4>Soft Skills Programmes</h4>
            </div>
            <div class="course-icon-box">
                @include('svg.isomark_website_icons-16')
                <h4>Skills Bundles</h4>
            </div>
            <div class="course-icon-box">

            </div>
        </div>
    </div>
@endsection