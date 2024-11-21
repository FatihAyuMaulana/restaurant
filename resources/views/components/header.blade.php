    <style>
    .img-bg {
        filter: brightness(0.5);
        /* Mengurangi kecerahan gambar menjadi 50% */
    }

    .img-bg:hover {
        filter: brightness(0.5);
        /* Gambar menjadi lebih gelap saat di-hover */
    }

    /* Warna teks putih secara default untuk link di dalam navbar */
    .header-area .main-menu ul li a {
        color: #fff !important;
        /* Warna teks putih */
        transition: color 0.3s ease;
        /* Transisi smooth saat warna berubah */
    }

    .header-area .header-right-btn .border-btn {
        color: #fff;
        border-color: #fff;
    }

    /* Saat di-scroll, ubah teks menjadi warna hitam */
    .navbar-scrolled .main-menu ul li a {
        color: #333 !important;
        /* Warna teks hitam saat navbar di-scroll */
    }

    .navbar-scrolled .header-right-btn .border-btn {
        color: #333;
        /* Warna tombol hitam saat di-scroll */
        border-color: #333;
    }

    .navbar-scrolled .header-right-btn .border-btn:hover {
        background-color: #333;
        color: #fff;
    }
</style>
<header>
    <!--? Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="/">
                                <img src="assets/img/logo/logo2.png" alt="" width="100" height="auto">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul>
                                        @if (Auth::guest())
                                            {{-- TANPA LOGIN --}}
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            {{-- <li><a href="{{ url('menu') }}">Menu</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li> --}}
                                            {{-- <li><a href="{{ route('gourmet_spot') }}">Gourmet Spot</a></li> --}}
                                        @else

                                            {{-- HARUS LOGIN --}}
                                            @if (Auth::user()->isAdmin())
                                                {{-- Memeriksa apakah pengguna adalah admin --}}
                                                {{-- NAVBAR UNTUK ADMIN --}}
                                                {{-- <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                                <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
                                                <li><a href="{{ route('admin.settings') }}">Settings</a></li> --}}
                                                <li><a href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>
                                                <li><a href="{{ route('user.index') }}">Manage Users</a></li>
                                                <li><a href="{{ route('admin.menu.menu') }}">Menu</a></li>
                                                <li><a href="{{ url('/transaction') }}">Transaction</a></li>
                                                <li><a href="{{ route('admin.contact.index') }}">Message Center</a></li>
                                            @else
                                                <li><a href="{{ url('/') }}">Home</a></li>
                                                <li><a href="{{ url('menu') }}">Menu</a></li>
                                                {{-- cart --}}
                                                <li> <a href="{{ route('cart.view') }}">Cart</a>
                                                </li>
                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                                {{-- <li><a href="{{ route('gourmet_spot') }}">Gourmet Spot</a></li> --}}
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
                                @if (Auth::check())
                                <a href="#" onclick="$('#form-logout').submit()" class="border-btn header-btn btn-secondary">
                                    <!-- Ikon Sign-out (Keluar) -->
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                                
                                
                                    <form id="form-logout" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                <a href="{{ route('login') }}" class="border-btn header-btn">
                                    <!-- Ikon Login -->
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                                <a href="{{ route('register') }}" class="border-btn header-btn">
                                    <!-- Ikon Register -->
                                    <i class="fas fa-user-plus"></i> Register
                                </a>
                                
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
<script>
    window.onscroll = function() {
        var header = document.querySelector(".header-area");
        var scrollPosition = window.scrollY;

        console.log("Scroll position:", scrollPosition); // Menampilkan posisi scroll di konsol

        // Jika halaman di-scroll lebih dari 50px, tambahkan class "navbar-scrolled"
        if (scrollPosition > 50) {
            header.classList.add("navbar-scrolled");
            console.log("Navbar scrolled"); // Memastikan class ditambahkan
        } else {
            header.classList.remove("navbar-scrolled");
            console.log("Navbar not scrolled"); // Memastikan class dihapus
        }
    };
</script>
