@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        LABORATORIUM
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('static.index') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span><a href="{{ route('static.laboratorium') }}">Laboratorium</a>
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
                            <h3 class="mt-20 mb-20" style="color: black">LABORATORIUM PROGRAM STUDI TEKNIK INFORMATIKA</h3>
                        </div>
                        <div class="col-lg-12 mb-4 widget-image">
                            <div class="content col-12" style="width: auto; height: auto;">
                                {{-- <img src="{{ env('APP_URL') . '/image/gallery/lab.jpg' }}" class="card-img-top"
                                    alt="..."> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-15">
                    <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center mb-3"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b11.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        REKAYASA PERANGKAT LUNAK</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b33.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM PROSES
                                        INFORMASI</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b32.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM BIG
                                        DATA </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b9.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        JARINGAN KOMPUTER</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-15">
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b28.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM SISTEM
                                        KOMPUTER</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b1.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        INFORMATION PROCESSING</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b5.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        KOMPUTASI AWAN</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b19.jpg' }}" class="card-img-top" alt="..."
                                style="height: 10rem">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        KEAMANAN JARINGAN </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-15">
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b27.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        PROSES OTOMASI ROBOT</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b28.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        KEAMANAN INFORMASI</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b29.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        TELEMATIKA</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b30.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LAB INFRASTRUKTUR
                                        JARINGAN</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-15">
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b33.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        PROSES INFORMASI</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b32.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM BIG
                                        DATA</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b29.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LABORATORIUM
                                        TELEMATIKA</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-md-6 d-flex justify-content-center align-items-center"
                        style="box-shadow: 100px">
                        <div class="card mx-1" style="width: 18rem; height: 15rem;">
                            <img src="{{ env('APP_URL') . '/image/lab/b30.jpg' }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center"><a href="#" class="text-black">LAB INFRASTRUKTUR
                                        JARINGAN</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
