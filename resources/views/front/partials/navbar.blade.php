<nav class="main-navbar">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="/services">Services</a></li>
        <li>
            <a href="/courses">Courses</a>
            <ul class="submenu">
                @foreach($categoryList as $slug => $category)
                <li><a href="/courses/{{ $slug }}">{{ $category }}</a></li>
                @endforeach
                <li><a href="/workshops">Workshops</a></li>
            </ul>
        </li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</nav>