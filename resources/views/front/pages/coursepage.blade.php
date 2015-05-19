@extends('front.base')

@section('seo')
    @include('front.partials.seotags', [
    'description' => 'Isomark offers fully accredited and industry recognised training courses on all subjects of Health, Safety and Environmental Risk Management',
    'keywords' => 'Isomark, SHEQ training, Risk Management Training',
    'title' => 'Isomark Training Courses'])
    @include('front.partials.ogmeta', [
    'og_title' => 'Isomark Training Courses',
    'og_description' => 'Isomark offers fully accredited and industry recognised training courses on all subjects of Health, Safety and Environmental Risk Management',
    'og_url' => Request::url()])
@endsection

@section('content')
    @include('front.partials.pageheader', ['pageTitle' => 'Isomark Courses'])
    <div class="container">
        <p class="courses-intro page-lead">ISOMARK offers numerous accredited training courses as well as tailored workshops. ISOMARK's courses have been categorised into Safety, Health and Environment, Lifting Equipment Training, Soft Skills and Workshops. Furthermore ISOMARK has a collection of Skills Bundles for those who seek further education in this field. Please select an icon below to read further on our courses.</p>
        <div class="course-icons-container">
            <div class="course-icon-row row">
                <div class="col-sm-6">
                    <a href="/courses/safety-health-and-environment">
                        <div class="course-icon-box">
                            @include('svg.courseicons.courses_safety')
                            <h4>Safety, Health and Environment</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="/courses/lifting-equipment-training">
                        <div class="course-icon-box">
                            @include('svg.courseicons.courses_lifting')
                            <h4>Lifting Equipment</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="course-icon-row row">
                <div class="col-sm-6">
                    <a href="/courses/soft-skills-programmes">
                        <div class="course-icon-box">
                            @include('svg.courseicons.courses_soft')
                            <h4>Soft Skills Programmes</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="/courses/skills-bundles">
                        <div class="course-icon-box">
                            @include('svg.courseicons.courses_skills')
                            <h4>Skills Bundles</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="course-icon-row row">
                <div class="col-sm-6">
                    <a href="/workshops">
                        <div class="course-icon-box">
                            @include('svg.courseicons.courses_workshops')
                            <h4>Workshops</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('front.partials.footer')
    @include('flash::message')
@endsection

@section('bodyscripts')
    <script>
        $('.alert-info').delay(4000).hide('slow');
    </script>
@endsection