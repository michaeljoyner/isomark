<h1><span class="section-title">courses</span></h1>
<div class="section-content container">
    <p>ISOMARK offers a comprehensive range of fully accredited courses as well as workshops designed to provide the industry required training you may need. ISOMARK's courses include many modules in Safety, Health and Environment, Lifting Equipment Training and Soft Skills. ISOMARK also offers Skill Bundles which include a National Certificate In Occupational Health Safety & Environment.</p>

    <div class="row course-row">
        @foreach($courses as $index => $course)
            <div class="col-md-4 col-sm-4 course-box">
                <a href="/courses/{{ $course->category->slug }}/#{{ $course->slug }}"><h4 class="item-name">{{ $course->name }}</h4></a>
                <p class="item-description">{{ $course->aim }}</p>
            </div>
            @if($index === 2)
                </div><div class="row course-row final-row">
            @endif
        @endforeach
    </div>
    <a href="/courses"><button class="btn prompt-button spaced">more courses</button></a>
</div>