<nav class="side-navbar">
    <!-- Sidebar Header    -->
    <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- My Info-->
        <div class="sidenav-header-inner text-center">
            <img class="img-fluid rounded-circle avatar mb-3" src="./img/profile-pic.jpg" alt="person">
            <h2 class="h5 text-white text-uppercase mb-0">Ahmed Mohamed</h2>
            <p class="text-sm mb-0 text-muted">Web Developer</p>
        </div>
        <a class="brand-small text-center" href="index.html">
            <p class="h1 m-0">AM</p>
        </a>
    </div>
    <span class="text-uppercase text-gray-500 text-sm fw-bold letter-spacing-0 mx-lg-2 heading">Main</span>

    <ul class="list-unstyled">

        <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>Example dropdown </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <li><a class="sidebar-link" href="#"><i class="fas fa-user"></i>Page</a></li>
                <li><a class="sidebar-link" href="#"><i class="fas fa-user"></i>Page</a></li>
                <li><a class="sidebar-link" href="#"><i class="fas fa-user"></i>Page</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex align-items-center">
                        <a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900"
                            id="toggle-btn" href="#">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy text-white">
                                <use xlink:href="#menu-1"></use>
                            </svg></a><a class="navbar-brand ms-2" href="index.html">
                            <div class="brand-text d-none d-md-inline-block text-uppercase letter-spacing-0">
                                <span class="text-white fw-normal text-xs">MY</span>
                                <strong class="text-primary text-sm">PORTFOLIO</strong>
                            </div>
                        </a>
                    </div>
                    @if (Route::has('login'))
                    <div class="d-flex fixed-right p-2">
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
    </header>

</div>
