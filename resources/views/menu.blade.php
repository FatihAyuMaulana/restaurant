@extends('layouts.app')

@section('content')

    <!--? Gallery Area Start -->

    <section class="gallery-area fix ">
        <!-- Gallery Top Start -->
        <div class="gallery-top section-bg pt-90 pb-40" data-background="{{ asset('assets/img/gallery/section_bg01.png')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Our Offerd Menu</span>
                            <h2>Some Trendy And  Popular Courses Offerd</h2>
                        </div> 
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>                                                                         
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Special</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Makanan</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Minuman </a>
                                <a class="nav-item nav-link" id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab" aria-controls="nav-dinner" aria-selected="false"> Dessert </a>
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

        <div class="booking-area section-bg pt-120 pb-130" data-background="{{ asset('assets/img/gallery/section_bg04.png')}}">
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
        </div>
        <!-- Gallery Bottom End -->
    </section>
@endsection


