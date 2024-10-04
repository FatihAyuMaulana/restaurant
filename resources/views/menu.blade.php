@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <section class="gallery-area fix ">
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
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/steak4.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 500.000 </span>
                                        <h4>Beef Premium BIM</h4>
                                        <p>Sensasi Daging Berkualitas dengan Rasa yang Tak Tertandingi.</p>
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
                                        <span>Rp 65.000</span>
                                        <h4>Nasi Liwet Nusantara</h4>
                                        <p>Perpaduan Rasa Klasik dengan Sajian Tradisional.</p>
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
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/ocean blue.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 35.000</span>
                                                <h4>Ocean Blue Hawaii</h4>
                                                <p>Kesegaran Laut dalam Setiap Tegukan.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/dessert matcha.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 85.000 </span>
                                                <h4>Matcha Sensation</h4>
                                                <p>Dessert Matcha dengan Tekstur Halus dan Rasa Otentik.</p>
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
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/Nasi Liwet.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 65.000</span>
                                        <h4>Nasi Liwet Nusantara</h4>
                                        <p>Perpaduan Rasa Klasik dengan Sajian Tradisional.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/Spaghetti alle Vongole Klasik.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 85.000</span>
                                        <h4>Spaghetti alle Vongole Klasik</h4>
                                        <p> Keaslian Rasa Laut dalam Setiap Suapan.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/spaicy shrimp.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 135.000</span>
                                        <h4>Spaicy Shrimp</h4>
                                        <p>Udang dengan Sentuhan Pedas yang Meledak di Mulut.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/Josh Emetts Bouillabaisse.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 125.000</span>
                                        <h4>Josh Emett's Bouillabaisse</h4>
                                        <p>Hidangan Laut yang Menggugah Selera dengan Sentuhan Khas.</p>
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
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/ramen.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 75.000</span>
                                                <h4>Ramen Spesial</h4>
                                                <p>Perpaduan Rasa Autentik Jepang dalam Setiap Suapan.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/steak4.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 500.000</span>
                                                <h4>Beef Premium BIM</h4>
                                                <p>Sensasi Daging Berkualitas dengan Rasa yang Tak Tertandingi.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/gallery3.png')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 180.000</span>
                                                <h4>Cheese Crust Meal</h4>
                                                <p>Hidangan Lezat dengan Kelezatan Keju yang Menggoda.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/steak6.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 140.000</span>
                                                <h4>Steak Mashroom</h4>
                                                <p>Steak juicy dengan sentuhan saus jamur yang creamy dan kaya rasa.</p>
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
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/kopi.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 35.000</span>
                                        <h4>Cappuccino Klasik BIM</h4>
                                        <p>Kenikmatan Kopi dengan Sentuhan Krim.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/blackberry thyme lemonade.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 60.000</span>
                                        <h4>Blackberry Thyme Lemonade</h4>
                                        <p>Minuman Segar dengan Rasa Alami yang Memikat.</p>
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
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/ocean blue.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 50.000</span>
                                                <h4>Ocean Blue Hawaii</h4>
                                                <p>Kesegaran Laut dalam Setiap Tegukan.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/matcha bliss.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 45.000</span>
                                                <h4>Matcha Bliss</h4>
                                                <p>Kesejukan dan Kelezatan Teh Hijau dalam Segelas.</p>
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
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/dessert matcha.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 85.000</span>
                                        <h4>Matcha Sensation</h4>
                                        <p>Dessert Matcha dengan Tekstur Halus dan Rasa Otentik.</p>
                                        <a href="#" class="btn order-btn">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img big-img" style="background-image: url('{{ asset('assets/img/gallery/dessert mango.jpg')}}');"></div>
                                    <div class="g-caption">
                                        <span>Rp. 90.000</span>
                                        <h4>Dessert Mango</h4>
                                        <p>Kelembutan buah yang meledak dengan rasa di lidahmu.</p>
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
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/pancake redvelvet.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 55.000</span>
                                                <h4>Pancake Redvelvet</h4>
                                                <p>Rasa red velvet klasik dalam bentuk pancake yang fluffy dan lezat.</p>
                                                <a href="#" class="btn order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img smoll-img" style="background-image: url('{{ asset('assets/img/gallery/macaron blueberry1.jpg')}}');"></div>
                                            <div class="g-caption">
                                                <span>Rp. 45.000</span>
                                                <h4>Macaron Blueberry</h4>
                                                <p>Kombinasi sempurna antara manis dan segar dalam setiap gigitan blueberry macaron.</p>
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


