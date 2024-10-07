<header>
    <!--? Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul>
                                        @if(Auth::guest())
                                            {{-- TANPA LOGIN --}}
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        @else
                                            {{-- HARUS LOGIN --}}
                                            @if(Auth::user()->isAdmin()) {{-- Memeriksa apakah pengguna adalah admin --}}
                                                {{-- NAVBAR UNTUK ADMIN --}}
                                                {{-- <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                                <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
                                                <li><a href="{{ route('admin.settings') }}">Settings</a></li> --}}
                                                <li><a href="">Admin Dashboard</a></li>
                                                <li><a href="">Manage Users</a></li>
                                                <li><a href="">Settings</a></li>
                                            @else
                                                <li><a href="{{ url('/') }}">Home</a></li>
                                                <li><a href="{{ url('menu') }}">Menu</a></li>
                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                                <li><a href="{{ route('gourmet_spot') }}">Gourmet Spot</a></li>
                                            @endif
                                    
                                            <form action="{{ route('logout') }}" method="POST" id="form-logout" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif
                                    </ul>                                    
                                </nav>
                            </div>
                            <!-- Header Right (login/register/logout) -->
                            <div class="header-right-btn f-right d-none d-lg-block ml-20">
                                @if(Auth::check())
                                    <a href="#" onclick="$('#form-logout').submit()" class="border-btn header-btn">Logout</a>
                                    <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="border-btn header-btn">Login</a>
                                    <a href="{{ route('register') }}" class="border-btn header-btn">Register</a>
                                @endif
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
