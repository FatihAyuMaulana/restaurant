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
@endsection
