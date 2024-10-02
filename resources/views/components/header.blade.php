<header>
    <!--? Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo.png')}}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li>
                                            <a href="#">Menu <i class="fas fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('menu') }}">Makanan</a></li>
                                                <li><a href="{{ route('admin.menu.minuman') }}">Minuman</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-20">
                                <a href="{{ route('login') }}" class="border-btn header-btn">Login</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
@push('styles')
/* Style for the submenu */
.submenu {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.submenu li {
    list-style: none;
    padding: 10px;
}

.submenu li a {
    color: #000;
}

#navigation li:hover .submenu {
    display: block;
    top: 100%;
    left: 0;
    z-index: 1000;
}

#navigation li:hover > a {
    color: #ff4a17; /* Custom hover color */
}

.submenu li:hover {
    background-color: #f2f2f2; /* Custom hover color */
}

@endpush


