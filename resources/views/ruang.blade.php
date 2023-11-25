@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        RUANG KULIAH
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('static.index') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span><a href="{{ route('static.ruangdosen') }}">Ruang Kuliah</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="mt-20 mb-20" style="color: black">RUANG PROGRAM STUDI TEKNIK
                                INFORMATIKA
                            </h3>
                        </div>
                        <div class="col-lg-12 mb-4 widget-image">
                            <div class="content col-12" style="width: auto; height: auto%;">
                                <img src="{{ env('APP_URL') . '/image/umum/banner.jpg' }}" class="card-img-top"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center" style="box-shadow: 100px">
                    <div class="card mx-1" style="width: 18rem; height: 15rem;">
                        <img src="{{ env('APP_URL') . '/image/ruang/rd.jpg' }}" class="card-img-top" alt="..."
                            style="height: 10rem">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#" class="text-black">RUANG DOSEN</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center" style="box-shadow: 100px">
                    <div class="card mx-1" style="width: 18rem; height: 15rem;">
                        <img src="{{ env('APP_URL') . '/image/ruang/rk2.jpg' }}" class="card-img-top" alt="..."
                            style="height: 10rem">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#" class="text-black">RUANG KULIAH</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center" style="box-shadow: 100px">
                    <div class="card mx-1" style="width: 18rem; height: 15rem;">
                        <img src="{{ env('APP_URL') . '/image/ruang/rk3.jpg' }}" class="card-img-top" alt="..."
                            style="height: 10rem">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#" class="text-black">RUANG KULIAH</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center" style="box-shadow: 100px">
                    <div class="card mx-1" style="width: 18rem; height: 15rem;">
                        <img src="{{ env('APP_URL') . '/image/ruang/rk4.jpg' }}" class="card-img-top" alt="..."
                            style="height: 10rem">
                        <div class="card-body">
                            <h5 class="card-title text-center"><a href="#" class="text-black">RUANG KULIAH</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
