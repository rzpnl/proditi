@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        KUESIONER KEPUASAN MAHASISWA
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('static.index') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span><a href="{{ route('static.kuesionerKMahasiswa') }}">Kuesioner
                            Kepuasan Mahsiswa</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
        
        <h3 class="mt-4 mb-5">KUESIONER KEPUASAN MAHASISWA</h3>

            <div class="alert alert-info" role="alert">
                Untuk melihat Chart Hasil Survey Kuesioner Kepuasan Mahasiswa, <a href="/kuesioner-kepuasan-mahasiswa/hasil"><button>Klik Disini</button></a>
            </div>
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12 col-md-12">
                            <iframe
                                src="https://docs.google.com/forms/d/e/1FAIpQLSd5hsE1QwoYHz0sXp0Ni4pUru7mZlQQ7VDMPmARg_ff7_gMHA/viewform?embedded=true"
                                frameborder="0" scrolling="yes" seamless="seamless" height="1200" width="100%"></iframe>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
