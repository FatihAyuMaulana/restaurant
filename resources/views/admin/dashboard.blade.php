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
                </main>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

@endsection