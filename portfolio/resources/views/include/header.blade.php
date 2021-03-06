<nav class="side-navbar">
    <!-- Sidebar Header    -->
    <div class="sidebar-header d-flex align-items-center justify-content-center p-3 mb-3">
        <!-- My Info-->
        <div class="sidenav-header-inner text-center">
            <img class="img-fluid rounded-circle avatar mb-3" src="./img/profile-pic.jpg" alt="person">
            <h2 class="h5 my-name text-white text-uppercase mb-0">Ahmed Mohamed</h2>
            <p class="text-sm mb-0 text-muted">Web Developer</p>
        </div>
        <a class="brand-small text-center" href="#">
            <p class="h1 m-0">AM</p>
        </a>
    </div>
    <span class="text-uppercase text-gray-500 text-sm fw-bold  mx-lg-2 heading">
        Main</span>

    <ul class="list-unstyled">
        <li class="sidebar-item sidebar-item-name">
            <a class="sidebar-drop-link" href="#">
                <i class="fal fa-home fa-lg p-2"></i>
                <div class="text-uppercase">
                    Home
                </div>
            </a>
        </li>
        <li class="sidebar-item sidebar-item-name">
            <a class="sidebar-drop-link" href="#">
                <i class="fal fa-address-card fa-lg p-2"></i>
                <div class="text-uppercase">
                    About
                </div>
            </a>
        </li>
        <li class="sidebar-item sidebar-item-name">
            <a class="sidebar-drop-link" href="#dropMenu" data-bs-toggle="collapse">
                <i class="fal fa-browser fa-lg p-2"></i>
                <div class="text-uppercase">
                    My Websites
                </div>
            </a>
            <ul class="collapse list-unstyled " id="dropMenu">
                <li><a class="sidebar-drop-link" href="#">website one</a></li>
                <li><a class="sidebar-drop-link" href="#">Website two</a></li>
                <li><a class="sidebar-drop-link" href="#">Website three</a></li>
            </ul>
        </li>
        <li class="sidebar-item sidebar-item-name">
            <a class="sidebar-drop-link" href="#dropMenu2" data-bs-toggle="collapse">
                <i class="fal fa-dice-three fa-lg p-2"></i>
                <div class="text-uppercase">
                    My Games
                </div>
            </a>
            <ul class="collapse list-unstyled " id="dropMenu2">
                <li><a class="sidebar-drop-link" href="#">Game one</a></li>
                <li><a class="sidebar-drop-link" href="#">Game two</a></li>
                <li><a class="sidebar-drop-link" href="#">Game three</a></li>
            </ul>
        </li>
        <li class="sidebar-item sidebar-item-name">
            <a class="sidebar-drop-link" href="#dropMenu3" data-bs-toggle="collapse">
                <i class="fal fa-tools fa-lg p-2"></i>
                <div class="text-uppercase">
                    My tools
                </div>
            </a>
            <ul class="collapse list-unstyled " id="dropMenu3">
                <li><a class="sidebar-drop-link" href="#">Tool one</a></li>
                <li><a class="sidebar-drop-link" href="#">Tool two</a></li>
                <li><a class="sidebar-drop-link" href="#">Tool three</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- navbar-->
<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="d-flex align-items-center">
                    <a class="menu-btn d-flex align-items-center justify-content-center p-2 bg-gray-900"
                        id="toggle-btn" href="#">
                        <i class="fal fa-bars fa-lg "></i>
                    </a>
                    <a class="navbar-brand ms-2" href="index.html">
                        <div class="brand-text d-none d-md-inline-block text-uppercase ">
                            <span class="text-white fw-normal text-xs">MY</span>
                            <strong class="text-primary text-sm">PORTFOLIO</strong>
                        </div>
                    </a>
                </div>
                <!-- @if (Route::has('login'))
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
                @endif -->
            </div>
        </div>
    </nav>
</header>
