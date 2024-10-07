@extends('layouts.app')

@section('content')
    

    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".2s">Selamat Datang di Restaurant BIM</span>
                                <h1 data-animation="fadeInLeft" data-delay=".4s">Kami percaya makanan enak menawarkan senyuman yang menawan</h1>
                                <p data-animation="fadeInLeft" data-delay=".6s">Jelajahi Dunia Restaurant, Semua yang Anda Butuhkan Ada di Sini.
                                </p>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Reservasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".2s">Selamat Datang di Restaurant BIM</span>
                                <h1 data-animation="fadeInLeft" data-delay=".4s">Kami percaya makanan enak menawarkan senyuman yang menawan</h1>
                                <p data-animation="fadeInLeft" data-delay=".6s">Jelajahi Dunia Restaurant, Semua yang Anda Butuhkan Ada di Sini.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="industries.html" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Resurvation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <p>Dengan keahlian yang tak tertandingi, Chef Juna selalu menghadirkan hidangan yang memukau lidah dan mata.</p>
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
                        <img src="{{ asset('assets/img/gallery/chef juna1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!--? gallery Products Start -->
    {{-- <section class="gallery-area fix ">
        <!-- Gallery Top Start -->
        <div class="gallery-top section-bg pt-90 pb-40" data-background="{{ asset('assets/img/gallery/section_bg01.png')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Menu Penawaran Kami</span>
                            <h2>Beberapa Kursus Trendi Dan Populer Ditawarkan</h2>
                        </div> 
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>                                                                         
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> Spesial </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Makan Siang </a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Makan Pagi </a>
                                <a class="nav-item nav-link" id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab" aria-controls="nav-dinner" aria-selected="false"> Makan malam </a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Top End -->
        <!-- Gallery Bottom Start -->
        <div class="container-fluid p-0">
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row no-gutters">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/gallery1.png')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 150.000</span>
                                        <h4>Delicious Food</h4>
                                        <p>Ut enim ad minim veniam quis nostr.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/Nasi Liwet.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp 45.000</span>
                                        <h4>Nasi Liwet</h4>
                                        <p>Cocok banget buat makan siang.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery3.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery4.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row no-gutters">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/gallery2.png')}}');"></div>
                                    <div class="g-caption">
                                        <span>$25</span>
                                        <h4>Delicious Food</h4>
                                        <p>Ut enim ad minim veniam quis nostr.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/gallery1.png')}}');"></div>
                                    <div class="g-caption">
                                        <span>$25</span>
                                        <h4>Delicious Food</h4>
                                        <p>Ut enim ad minim veniam quis nostr.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery3.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery4.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row no-gutters">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/gallery1.png')}}');"></div>
                                    <div class="g-caption">
                                        <span>$25</span>
                                        <h4>Delicious Food</h4>
                                        <p>Ut enim ad minim veniam quis nostr.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/gallery2.png')}}');"></div>
                                    <div class="g-caption">
                                        <span>$25</span>
                                        <h4>Delicious Food</h4>
                                        <p>Ut enim ad minim veniam quis nostr.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery3.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery4.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card Four -->
                <div class="tab-pane fade" id="nav-dinner" role="tabpanel" aria-labelledby="nav-dinner">
                    <div class="row no-gutters">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/gallery3.png')}}');"></div>
                                    <div class="g-caption">
                                        <span>$25</span>
                                        <h4>Delicious Food</h4>
                                        <p>Ut enim ad minim veniam quis nostr.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/gallery4.png')}}');"></div>
                                    <div class="g-caption">
                                        <span>$25</span>
                                        <h4>Delicious Food</h4>
                                        <p>Ut enim ad minim veniam quis nostr.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="row no-gutters">
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery1.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery2.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>$25</span>
                                                <h4>Delicious Food</h4>
                                                <p>Ut enim ad minim veniam quis nostr.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
        <!-- Gallery Bottom End -->
    </section> --}}
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
                            <span class="color1">23 Dec, 2020</span>
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
                            <span class="color1">23 Dec, 2020</span>
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
                            <span class="color1">23 Dec, 2020</span>
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