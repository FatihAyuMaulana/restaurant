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
        <!-- Gallery Bottom End -->
    </section>
@endsection

@push('styles')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    h1 {
        color: #333;
        font-size: 2rem;
        margin-bottom: 40px;
    }

    /* Grid container */
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Card style */
    .menu-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .menu-card:hover {
        transform: translateY(-5px);
    }

    .menu-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .menu-info {
        padding: 20px;
        text-align: center;
    }

    .menu-info h3 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 10px;
    }

    .menu-info p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 8px;
    }

    .btn {
        padding: 8px 16px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #218838;
    }

    /* Fade-in animation */
    .fade-in {
        opacity: 0;
        animation: fadeInAnimation 1s forwards;
    }

    @keyframes fadeInAnimation {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Animasi fade-in untuk grid
    const grid = document.querySelector('.fade-in');
    grid.style.animationDelay = '0.5s';
</script>
@endpush
