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
    </div>
</nav>
