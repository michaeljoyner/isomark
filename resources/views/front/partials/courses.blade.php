<h1><span class="section-title">courses</span></h1>
<div class="section-content container">
    <p>Our services Lorem ipsum dolor sit amet, consectetur adipisicing elit. At atque dignissimos doloremque. Debitis, delectus doloribus eaque eveniet excepturi fugiat, in iste magni mollitia nam necessitatibus nostrum officiis placeat quis ut?</p>

    <div class="row course-row">
        @foreach($courses as $index => $course)
            <div class="col-md-4 col-sm-4 course-box">
                <h4 class="item-name">{{ $course->name }}</h4>
                <p class="item-description">{{ $course->aim }}</p>
            </div>
            @if($index === 2)
                </div><div class="row course-row final-row">
            @endif
        @endforeach
    </div>
    <a href="/courses"><button class="btn prompt-button spaced">more courses</button></a>
</div>