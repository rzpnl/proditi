@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        KUESIONER VMTS
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('static.index') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span><a href="{{ route('static.kuesionerVMTS') }}">Kuesioner
                            VMTS</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">

            <h3 class=" mb-5">KUESIONER VMTS</h3>

            <div class="alert alert-info" role="alert">
                Untuk melihat Chart Hasil Survey VMTS, <a href="/kuesioner-vmts/hasil"><button>Klik Disini</button></a>
            </div>
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post row">
                        <div class="col-12">
                            
                            <iframe
                                src="https://docs.google.com/forms/d/e/1FAIpQLSd2rVFl54ZrSDHebdz0kVAwW3LE4TTs3p4TMppFMafI2BypRw/viewform?embedded=true"
                                frameborder="0" scrolling="yes" seamless="seamless" height="850" width="100%"></iframe>
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
