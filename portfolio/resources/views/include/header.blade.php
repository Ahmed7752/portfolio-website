<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="padding-right: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            @if (Route::has('login'))
            <div class="d-flex  p-2">
                @auth
                <div style="padding-right: 10px">
                    <a class="btn btn-primary" href="{{ url('/home') }}" role="button">Home</a>
                </div>
                @else
                <div style="padding-right: 10px;">
                    <a class="btn btn-primary" href="{{ route('login') }}" role="button">Login</a>
                </div>

                @if (Route::has('register'))
                <div style="padding-left: 10px;">
                    <a class="btn btn-primary" href="{{ route('register') }}" role="button">Register</a>
                </div>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</nav>
