@extends('layouts.app')

@section('content')
    

    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo2.png" alt="">
                </div>
            </div>
        </div>
    </div>
<main>
    <!--? slider Area Start-->
    {{-- <div class="single-slider slider-height d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="hero-slider owl-carousel">
                        <div class="hs-item set-bg" data-setbg="assets/img/hero/logo.jpg"></div>
                        <div class="hs-item set-bg" data-setbg="assets/img/hero/logo1.jpg"></div>
                    </div>
                    <div class="dark-layer-hero"></div>
                    <div class="hero__caption">
                        <span data-animation="fadeInLeft" data-delay=".2s">Selamat Datang di Restaurant BIM</span>
                        <h1 data-animation="fadeInLeft" data-delay=".4s">Kami percaya makanan enak menawarkan senyuman yang menawan</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">Jelajahi Dunia Restaurant, Semua yang Anda Butuhkan Ada di Sini.</p>
                        <!-- Hero-btn -->
                        <div class="hero__btn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Single Slider -->
    <div class="single-slider slider-height d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <img src="{{ asset('assets/img/hero/logo1.jpg')}}" alt="" class="img-bg">
                    <div class="dark-layer-hero"></div>
                    <div class="hero__caption">
                        <span data-animation="fadeInLeft" data-delay=".2s">Discover Your Teste</span>
                        <h1 data-animation="fadeInLeft" data-delay=".4s">We belive good food offer great smile</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>
                        <!-- Hero-btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Custom Modal -->
    <div id="customAlert" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Harap login terlebih dahulu untuk mengakses reservasi.</p>
      </div>
    </div>
    
    <style>

        
    /* Modal styling */
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }
    
    .modal-content {
      background-color: #fff;
      margin: 15% auto; 
      padding: 20px;
      border: 1px solid #888;
      width: 80%; 
      max-width: 400px;
      text-align: center;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
    }
    
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    
    .modal p {
      font-size: 18px;
      color: #333;
    }

    /* .single-slider {
        margin-top: 200px;
    } */
    .single-slider .img-bg {
        position: relative;
        width: 175%;
        height: 700px;
        right: 175px;
        /* width: 1400px;
        height: 700px;
        right: 175px; */
    }
    .single-slider {
    position: relative;  /* Pastikan elemen induk memiliki posisi relative */
    width: 100%;         /* Sesuaikan dengan lebar penuh */
    height: 700px;       /* Pastikan memiliki tinggi yang sesuai */
}

    .single-slider .hero__caption {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 700px;
        text-align: center;
        color: #ffffff;
        z-index: 3;
    }
    .single-slider .hero__caption h1 {
        color: #ffffff;
    }
    .single-slider .hero__caption p {
        color: #ffffff;
    }
    .single-slider .dark-layer-hero {
    position: fixed;  /* Ganti dengan fixed agar menutupi seluruh layar */
    top: 0;
    left: 0;
    right: 0;
       /* Tambahkan bottom: 0 untuk menutupi seluruh tinggi viewport */
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}



    </style>
    
    <script>
        // Get the modal
        var modal = document.getElementById("customAlert");
    
        // Get the button that opens the modal
        var btn = document.getElementById("reservasiBtn");
    
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
    
        // When the user clicks on the button, open the modal
        btn.onclick = function(event) {
            event.preventDefault();
            modal.style.display = "block";
        }
    
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- slider Area End-->
    <!--? About Area Start -->
    <div class="about-low-area section-padding30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>Discover Your Test</span>
                            <h2>We Provide Good Food For Your Family!</h2>
                        </div>
                        <p>Ut enim acgsd minim veniam, quxcis nostrud exercitation ullamco laboris nisi ufsit aliquip ex ea commodo consequat is aute irure m, quis nostrud exer.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-restaurant"></span>
                                </div>
                                <div class="caption">
                                    <p>Dengan keahlian yang tak tertandingi, Chef selalu menghadirkan hidangan yang memukau lidah dan mata.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-tools-and-utensils-1"></span>
                                </div>
                                <div class="caption">
                                    <p>Dengan sentuhan Chef Juna, plating menjadi seni yang memukau, mengubah hidangan menjadi sesuatu yang lebih dari sekadar makanan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-hat"></span>
                                </div>
                                <div class="caption">
                                    <p>Kreativitas dan ketelitian Chef Juna menjadikannya salah satu chef terbaik di Indonesia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                            <div class="single-caption mb-20">
                                <div class="caption-icon">
                                    <span class="flaticon-restaurant"></span>
                                </div>
                                <div class="caption">
                                    <p>Setiap sajian Chef Juna bukan hanya makanan, tapi sebuah pengalaman kuliner yang luar biasa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{ asset('assets/img/gallery/chefkorea.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!--? gallery Products Start -->
    <!-- gallery Products End -->
    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{ asset('assets/img/gallery/steak4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>Tentang Restoran Kami</span>
                            <h2>Menu Wajib Coba yang Selalu Menjadi Favorit</h2>
                        </div>
                        <p class="pera-top">Mencari yang terbaik? Steak kami adalah pilihan para pengunjung setia. Nikmati sendiri kelezatan steak yang menjadi menu andalan di Restaurant BIM.</p>

                        <p  class="mb-65 pera-bottom">Steak kami telah menjadi menu terpopuler di BIM, karena perpaduan sempurna antara rasa, tekstur, dan penyajiannya yang elegan.</p>


                        {{-- <a href="about.html" class="border-btn">Learn More</a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-2 Area End -->
    <!--? Booking Room Start-->
    {{-- <div class="booking-area section-bg pt-120 pb-130" data-background="{{ asset('assets/img/gallery/section_bg04.png')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-40">
                        <span>About Our Restaurant</span>
                        <h2>Book A Table</h2>
                    </div> 
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <form action="#">
                        <div class="booking-wrap d-flex justify-content-between align-items-center">
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="select-this">
                                    <div class="select-itms">
                                        <div class="select-icon">
                                            <i class="ti-user"></i>
                                        </div>
                                        <select name="select" id="select1">
                                            <option value="">Person</option>
                                            <option value="">Person 2</option>
                                            <option value="">Person 3</option>
                                            <option value="">Person 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- select in date -->
                            <div class="single-select-box mb-30">
                                <div class="boking-datepicker">
                                    <input id="datepicker1"  placeholder="Date" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-datepicker">
                                    <input id="timepicker"  placeholder="Time" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <button class="btn select-btn">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Booking Room End-->
    <!--? Our Services Start -->
    <div class="our-services section-padding30">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Servicees We Offer</span>
                        <h2>Our Best Services</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-restaurant"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Best Chef</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services active text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tools-and-utensils-1"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Quality Food</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-restaurant"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="#">Perfect Cook</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->


    <!--? About-3 Start -->
    {{-- <div class="about-area3 pt-180 pb-170 section-bg" data-background="{{ asset('assets/img/gallery/section_bg03.png')}}">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-6 col-md-9 col-sm-11">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-40">
                        <span>About Our Restaurant</span>
                        <h2>We Provide Good Food For Your Family!</h2>
                        <p>Ut enim acgsd minim veniam, quxcis nostrud exercitation ullamco laboris nisi ufsit aliquip ex ea commodo consequat is aute irure m, quis nostrud exer.</p>
                    </div> 
                    <!--Hero form -->
                    <form action="#" class="search-box">
                        <div class="input-form">
                            <input type="text" placeholder="Your Email">
                        </div>
                        <div class="search-form">
                            <button>Subscribe</button>
                        </div>	
                    </form>	
                </div>
            </div>
        </div>
    </div> --}}




    <!-- About-3 End -->
    <!--? Blog Area Start -->
    <section class="blogs-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our New Blog News</span>
                        <h2>Our Recnet News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-100">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/gallery/blog1.png')}}" alt="">
                        </div>
                        <div class="blog-cap">
                            <span class="color1">23 Dec, 2023</span>
                            <h4><a href="blog_details.html">Addiction When Food Plate Becomes</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-100">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/gallery/blog2.png')}}" alt="">
                        </div>
                        <div class="blog-cap">
                            <span class="color1">21 Okct, 2024</span>
                            <h4><a href="blog_details.html">Addiction When Food Plate Becomes</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-100">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/gallery/blog3.png')}}" alt="">
                        </div>
                        <div class="blog-cap">
                            <span class="color1">18 Dec, 2022</span>
                            <h4><a href="blog_details.html">Addiction When Food Plate Becomes</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@endsection