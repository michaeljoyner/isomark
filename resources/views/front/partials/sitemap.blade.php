<ul class="site-map">
    <li><a href="/">home</a></li>
    <li><a href="/about">about</a></li>
    <li><a href="/services">services</a></li>
    <li>
        <a href="/courses/">courses</a>
        <ul class="course-category-map">
            @foreach($categoryList as $slug => $category)
                <li><a href="/courses/{{ $slug }}">{{ $category }}</a></li>
            @endforeach
            <li><a href="/workshops">workshops</a></li>
        </ul>
    </li>
    <li><a href="/bookings/">course bookings</a></li>
    <li><a href="/contact">contact us</a></li>
</ul>