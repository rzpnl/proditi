@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        BERITA & INFORMASI
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('static.index') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span><a href="{{ route('static.berita') }}">berita</a>
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
                            <h3 class="mt-20 mb-20" style="color: black">BERITA & INFORMASI</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="object-fit-cover border rounded" height="180px" style="object-fit: cover"
                                src="{{ env('APP_URL') . '/image/blog/blog-1.jpeg' }}" alt="">
                        </div>
                        <p class="meta">18 September 2023 | By <a href="#">Admin</a></p>
                        <a href="/berita/1">
                            <h5>Wakil Direktur III PNL Hadiri Pembukaan POMDA 2023</h5>
                        </a>
                        <p>
                            Wakil Direktur III Ir. Sariyusda, M.T hadiri acara pembukaan Pekan Olahraga Mahasiswa Daerah
                            (POMDA)..
                        </p>
                        <a href="/berita/2" class="details-btn d-flex justify-content-center align-items-center"><span
                                class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="object-fit-cover border rounded" height="180px" style="object-fit: cover"
                                src="{{ env('APP_URL') . '/image/blog/blog-2.jpeg' }}" alt="">
                        </div>
                        <p class="meta">22 September 2023 | By <a href="#">Admin</a></p>
                        <a href="/berita/2">
                            <h5>Mahasiswa PNL Terus Dulang Medali POMDA 2023</h5>
                        </a>
                        <p>
                            Mahasiswa Politeknik Negeri Lhokseumawe (PNL) kembali mendulang medali di ajang Pekan Olahraga
                            Mahasiswa Daerah..
                        </p>
                        <a href="/berita/2" class="details-btn d-flex justify-content-center align-items-center"><span
                                class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="object-fit-cover border rounded" height="180px" style="object-fit: cover"
                                src="{{ env('APP_URL') . '/image/blog/blog-3.jpeg' }}" alt="">
                        </div>
                        <p class="meta">22 September 2023 | By <a href="#">Admin</a></p>
                        <a href="/berita/3">
                            <h5>Mahasiswa PNL Terus Dulang Medali POMDA 2023</h5>
                        </a>
                        <p>
                            Mahasiswa Politeknik Negeri Lhokseumawe (PNL) kembali mendulang medali di ajang Pekan Olahraga
                            Mahasiswa Daerah..
                        </p>
                        <a href="/berita/3" class="details-btn d-flex justify-content-center align-items-center"><span
                                class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="object-fit-cover border rounded" height="180px" style="object-fit: cover"
                                src="{{ env('APP_URL') . '/image/blog/blog-4.jpeg' }}" alt="">
                        </div>
                        <p class="meta">05 Oktober 2023 | By <a href="#">Admin</a></p>
                        <a href="/berita/4">
                            <h5>Rakornas Satgas PPKS Dihadiri Mendikbudristek, Satgas PPKS PNL Ikut Diundang</h5>
                        </a>
                        <p>
                            Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS) yang merupakan..
                        </p>
                        <a href="/berita/4" class="details-btn d-flex justify-content-center align-items-center"><span
                                class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
