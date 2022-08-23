<nav class="navbar navbar-light navbar-expand-lg mb-5 py-0" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="/"><img src="{{asset('imgs/gioi-thieu-dxmb.png')}}" alt="logo" class="admin-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" style="color: black">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                </li>
                @else

                <!-- Example split danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-warning">{{Auth::user()->name}}</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                    <li><img src="/images/doge2.jpg" class="px-2" alt="hoc vien 1"></li>
                    <li><a class="dropdown-item" href="#">{{Auth::user()->email}}</a></li>
                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">Về trang quản trị</a></li>
                    <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('signout') }}">Logout</a>
                    </li>
                    </ul>
                </div>

                @endguest
            </ul>
        </div>
    </div>
</nav>
