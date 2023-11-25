@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        TENTANG PRODI
                    </h1>
                    <p class="text-white link-nav"><a href="/">Home </a> <span class="lnr lnr-arrow-right"></span>
                        <a href="{{ route('static.profil') }}"> tentang</a>
                        </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area pb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Deksripsi Program Studi</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Program Studi Teknik Informatika merupakan pendidikan vokasi yang ditujukan untuk
                                menghasilkan Tenaga sarjana terapan yang kompeten dalam bidang Teknologi Informasi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Visi Program Studi</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Menjadi pendidikan tinggi vokasi pada bidang teknologi informasi yang profesional,
                                unggul dan berdaya saing di tingkat nasional.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Misi Program Studi</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Menyelenggarakan pendidikan vokasi yang berkualitas pada bidang teknologi informasi
                                dengan penguatan soft skill yang memadai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start course-mission Area -->
    <section class="course-mission-area pb-lg-120 pb-60">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5  d-block d-lg-none mb-4">
                    <img class="img-fluid" style="" src="{{ env('APP_URL') . '/image/Tujuan_Lecture.png' }}"
                        alt="">
                </div>
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h2 class="mb-10">Sasaran Program Studi.</h2>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-7 accordion-left">
                    <!-- accordion 2 start-->
                    <dl class="accordion">
                        <dt>
                            <a href="" class="active">Manajemen Mutu Internal</a>
                        </dt>
                        <dd style="display: block;">
                            Kuat dalam pengelolaan organisasi sehingga selalu siap menghadapi tantangan dan perubahan
                            sesuai dengan tuntutan perkembangan zaman.
                        </dd>
                        <dt>
                            <a href="">Suasana Akademik yang Kondusif</a>
                        </dt>
                        <dd style="display: none;">
                            Menjalankan kegiatan tridarma perguruan tinggi baik oleh dosen, tenaga kependidikan, tenaga
                            laboratorium maupun mahasiswa.
                        </dd>
                        <dt>
                            <a href="">Lulusan Yang Kompeten</a>
                        </dt>
                        <dd style="display: none;">
                            Berkompeten pada bidang teknologi informasi yang memiliki kemampuan dalam perancangan dan
                            mengembangkan
                            sistem informasi/aplikasi berbasis desktop, web, mobile dan memiliki kompetensi pada bidang
                            jaringan komputer.
                        </dd>
                        <dt>
                            <a href="">Budaya Mutu Akademik Yang Baik</a>
                        </dt>
                        <dd style="display: none;">
                            Terciptanya budaya mutu akademik yang baik merupakan tanggung jawab
                            moral seluruh civitas akademika dan penyelenggara program studi/jurusan kepada
                            masyarakat, pengguna lulusan terkait kredibilitas dan kompetensi lulusan.
                        </dd>
                        <dt>
                            <a href="">Sumber Daya Yang Optimal</a>
                        </dt>
                        <dd style="display: none;">
                            Mengoptimalkan dan memanfaatkan semua sumber daya danfasilitasyang ada
                            pada lembaga maupun pada jurusan/program studi baik terkait sarana prasarana,
                            sumber daya manusia (dosen dan tenaga kependidikan) untuk kemajuan dan
                            keberlanjutan program studi sebagai tempat pusat pendidikan vokasi yang profesional dan
                            unggul.
                        </dd>
                    </dl>
                    <!-- accordion 2 end-->
                </div>
                <div class="col-lg-5  d-lg-flex d-none">
                    <img class="img-fluid" style="object-fit: cover"
                        src="{{ env('APP_URL') . '/image/Lecture_Goals_Ilustration.webp' }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End course-mission Area -->

    <!-- Start info Area -->
    <section class="info-area pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5  d-lg-flex d-none">
                    <img class="img-fluid" style="" src="{{ env('APP_URL') . '/image/Tujuan_Lecture.png' }}"
                        alt="">
                </div>
                <div class="col-lg-7 px-4 px-lg-1 pt-lg-4">
                    <h2>Tujuan Program Studi Teknik Informatika</h2><br>
                    <p class="text-justify">Menghasilkan lulusan sarjana terapan profesional dan terampil yang memiliki
                        kemampuan
                        untuk
                        merancang, menganalisis, membuat dan mengimplimentasikan serta mengembangkan
                        aplikasi baik berbasis web, mobile dan desktop. Menghasilkan lulusan sarjana terapan yang
                        memiliki kemampuan untuk melakukan perancangan sistem jaringan
                        komputer (sebagai administrator jaringan), membangun infrastruktur jaringan komputer yang handal
                        meliputi: instalasi, melakukan konfigurasi, maintenance dan menganalisa jaringan
                        komputer baik sekala internet, intranet dan jaringan komputer lokal (LAN). Menghasilkan produk
                        perangkat lunak berbasis teknologi informasi yang bermanfaat bagi masyarakat dan industri.
                        Menghasilkan kegiatan pengabdian kepada masyarakat yang berbasis teknologi informasi.
                        Menghasilkan lulusan yang berkompeten pada bidang teknologi informasi.</p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- End info Area -->
@endsection
