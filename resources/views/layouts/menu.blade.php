<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            {{-- use route is better because path could usually change --}}
            <li class="nav-item {{\Route::currentRouteName()==='pages.index' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('pages.index') }}">All Pages</a>
            </li>

            <li class="nav-item {{\Route::currentRouteName()==='posts.index' ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('posts.index', ['id' => 123]) }}">รายการโพสต์ทั้งหมด</a>
            </li>
            {{-- {{ url()->current() }} --}}
            {{-- {{ \Route::currentRouteName() }} --}}
        </ul>
        <ul class="navbar-nav">
            @auth
                <li class="nav-item">
                    <a href="{{route('profile.show')}}" class="nav-link">
                        {{Auth::user()->name}}
                    </a>
                </li>
            @endauth

            @guest
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('register')}}" class="nav-link">Register</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>
