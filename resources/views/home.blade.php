@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between" style="height: 606px;">
                <div class="banner-content col-lg-9 col-md-12">
                    <h4 class="text-uppercase text-white">
                        Program Studi
                    </h4>
                    <h1 class="text-uppercase">
                        Teknik Informatika
                    </h1>
                    <h3 class="pt-5 text-uppercase text-white">
                        Kami Memastikan pendidikan yang lebih baik
                        untuk dunia yang lebih baik
                    </h3>
                    <p class="pt-10 pb-10 text-white">
                        Program Studi Teknik Informatika terakreditasi peringkat B berdasarkan keputusan Badan Akreditasi
                        Nasional Perguruan Tinggi Departemen Pendidikan Nasional Republik Indonesia Nomor :
                        3565/SK/BAN-PT/AKRED/DIPL-IV/XII/2018 Tanggal 28 Desember 2018.
                    </p>
                    <a href="/tentang" class="primary-btn text-uppercase">Tentang Kami</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Fasilitas</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Fasilitas yang modern untuk bagi mahasiswa,
                                tenaga pengajar, dan tenaga pendidikan.
                            </p>
                            <a href="/fasilitas/general">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Kemahasiswaan</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Pelayanan dan informasi tentang administrasi, serta informasi lainya berkaitan dengan
                                kemahasiswaan.
                            </p>
                            <a href="/data-mahasiswa">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Profil Program Studi</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Temukan informasi lengkap tentang prodi Teknik Informatika, profile prodi, serta visi dan
                                misinya.
                            </p>
                            <a href="/tentang">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start pengumuman Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40   col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Berita TI Terbaru</h1>
                        <p>Baca Lebih Banyak Berita Seputar Program Studi TI(Teknik Informatika) Kami Disini!
                        </p>
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
                    <a href="/berita/1" class="details-btn d-flex justify-content-center align-items-center"><span
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
    </section>
    <!-- End blog Area -->

    <!-- Start search-course Area -->
    <section class="search-course-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 search-course-left py-4">
                    <h3 class="text-white text-center my-4">Lokasi Politeknik Negeri Lhokseumawe</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.6348547170014!2d97.15502971435029!3d5.119574796284543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304777a35c813bbf%3A0xfac9e2831347f07f!2sPoliteknik+Negeri+Lhokseumawe!5e0!3m2!1sid!2sid!4v1511899636175"
                            width="320" height="258" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 search-course-right py-4">
                    <h3 class="text-white text-center my-4">Hubungi Kami</h3>
                    <form class="form-wrap" action="#">
                        <input type="text" class="form-control" name="name" placeholder="Full Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'">
                        <input type="phone" class="form-control" name="phone" placeholder="Email Address"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Massage"></textarea>
                        </div>
                        <button class="primary-btn text-uppercase">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End search-course Area -->

    <!-- Start upcoming-event Area -->
    {{-- <section class="upcoming-event-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Upcoming Events of our Institute</h1>
                        <p>If you are a serious astronomy fanatic like a lot of us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-upcoming-event-carusel">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="#">
                                <h4>The Universe Through
                                    A Child S Eyes</h4>
                            </a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”,
                                telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="#">
                                <h4>The Universe Through
                                    A Child S Eyes</h4>
                            </a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”,
                                telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="#">
                                <h4>The Universe Through
                                    A Child S Eyes</h4>
                            </a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”,
                                telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="#">
                                <h4>The Universe Through
                                    A Child S Eyes</h4>
                            </a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”,
                                telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="#">
                                <h4>The Universe Through
                                    A Child S Eyes</h4>
                            </a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”,
                                telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="#">
                                <h4>The Universe Through
                                    A Child S Eyes</h4>
                            </a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”,
                                telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End upcoming-event Area -->

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Butuh Berita & Info Yang Lain?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="/berita" disabled>Kunjungi</a>
                </div>
            </div>
        </div>
    </section>
@endsection
