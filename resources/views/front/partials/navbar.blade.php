<nav class="main-navbar">
    <ul>
        <li @if(Request::path() === "/") class="active" @endif><a href="/">Home</a></li>
        <li @if(Request::path() === "about") class="active" @endif><a href="/about">About</a></li>
        <li @if(Request::path() === "services") class="active" @endif><a href="/services">Services</a></li>
        <li @if(starts_with(Request::path(), "courses") || Request::path() === "workshops") class="active" @endif>
            <a href="/courses">Courses</a>
            <ul class="submenu">
                @foreach($categoryList as $slug => $category)
                <li><a href="/courses/{{ $slug }}">{{ $category }}</a></li>
                @endforeach
                <li><a href="/workshops">Workshops</a></li>
            </ul>
        </li>
        <li @if(Request::path() === "contact") class="active" @endif><a href="/contact">Contact Us</a></li>
    </ul>
</nav>
@if(starts_with(Request::path(), "courses") || Request::path() === "workshops")
<nav class="courses-nav main-navbar">
    <ul>
        @foreach($categoryList as $slug => $category)
            <li><a href="/courses/{{ $slug }}">{{ $category }}</a></li>
        @endforeach
            <li><a href="/workshops">Workshops</a></li>
    </ul>
</nav>
@endif