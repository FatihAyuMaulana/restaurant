@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <section class="gallery-area fix ">
        <!-- Gallery Top Start -->
        <div class="gallery-top section-bg pt-90 pb-40" data-background="{{ asset('assets/img/gallery/section_bg01.png') }}">
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

                <a href="{{ url('admin/menu/create') }}" class="btn btn-secondary mb-3">
                    <!-- Ikon Add Menu -->
                    <i class="fas fa-plus"></i> Add Menu
                </a>
                <a href="{{ route('home') }}" class="btn btn-secondary mb-3">
                    <!-- Ikon Panah Kiri -->
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                
                

                <div class="row justify-content-center">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true"> Makanan </a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact" aria-selected="false"> Minuman </a>
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
                        @if (count($foods) > 0)
                            @foreach ($foods as $food)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="gallery-box">
                                        <div class="single-gallery">
                                            <div class="gallery-img big-img"
                                                style="background-image: url('{{ asset('storage/' . $food['foto_makanan']) }}');
                                                background-size: cover;
                                                background-position: center;">
                                            </div>
                                            <div class="g-caption">
                                                <span>Rp. {{ number_format($food['harga'], 0, ',', '.') }}</span>
                                                <h4>{{ $food['nama_makanan'] }}</h4>
                                                <p>{{ $food['deskripsi'] }}</p>
                                                <!-- Edit and Delete buttons -->
                                                <a href="{{ route('menu.edit', $food['id']) }}" class="btn btn-primary btn-sm mt-2">
                                                    <!-- Ikon Edit -->
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                
                                                <form action="{{ route('menu.delete', $food['id']) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mt-2" 
                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                <!-- Ikon Delete -->
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="section-tittle text-center mb-40">
                                    <h2>Tidak ada menu</h2>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            <!-- End Nav Card -->
        </div>
    </section>
    {{-- <style><style>
        /* Umum */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        
        /* Area Galeri */
        .gallery-area {
            padding: 60px 0;
            background: linear-gradient(135deg, #f5f7fa, #e4e7ed);
            border-radius: 15px;
        }
        
        .section-bg {
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        /* Judul Bagian */
        .section-tittle span {
            font-size: 20px;
            font-weight: 600;
            color: #64c896;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: block;
        }
        
        .section-tittle h2 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
            line-height: 1.4;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        /* Tombol */
        .btn-secondary {
            color: #fff;
            background-color: #64c896;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 600;
            transition: all 0.4s ease-in-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .btn-secondary:hover {
            background-color: #57b68b;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* Galeri */
        .gallery-box {
            margin: 20px;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .gallery-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .single-gallery {
            position: relative;
            overflow: hidden;
            height: 300px;
        }
        
        .gallery-img {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: all 0.4s ease-in-out;
        }
        
        .gallery-box:hover .gallery-img {
            transform: scale(1.1);
            filter: brightness(0.8);
        }
        
        .g-caption {
            padding: 20px;
            text-align: center;
        }
        
        .g-caption span {
            font-size: 20px;
            font-weight: 700;
            color: #64c896;
        }
        
        .g-caption h4 {
            font-size: 22px;
            color: #444;
            margin: 10px 0;
        }
        
        .g-caption p {
            font-size: 14px;
            color: #777;
            line-height: 1.6;
        }
        
        /* Tombol Aksi */
        .btn-primary, .btn-danger {
            padding: 10px 20px;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 20px;
            transition: all 0.4s ease-in-out;
        }
        
        .btn-primary {
            background-color: #4a90e2;
            color: #fff;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary:hover {
            background-color: #3b7cd6;
            transform: translateY(-3px);
        }
        
        .btn-danger {
            background-color: #e94e77;
            color: #fff;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-danger:hover {
            background-color: #d13c67;
            transform: translateY(-3px);
        }
        
        /* Responsif */
        @media (max-width: 768px) {
            .gallery-box {
                margin: 10px;
            }
        
            .section-tittle h2 {
                font-size: 28px;
            }
        
            .section-tittle span {
                font-size: 16px;
            }
        
            .btn-secondary {
                font-size: 12px;
                padding: 10px 20px;
            }
        }
        </style>
        </style> --}}
@endsection
