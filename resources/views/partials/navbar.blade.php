<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Isomark</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                    <a href="/admin/courses" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Courses <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/admin/courses">Search</a></li>
                        @foreach($categoryList as $categoryId => $category)
                            <li><a href="/admin/courses/category/{{ $categoryId }}">{{ $category }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/auth/login">Login</a></li>
                @else
                    @if($canCreateUser)
                        <li><a href="/admin/users">Manage Users</a></li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/admin/users/changepassword/{{ Auth::user()->id }}">Change Password</a></li>
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>