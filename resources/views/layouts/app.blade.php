<!DOCTYPE html>
<html lang="id-ID" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ env('APP_URL') . '/image/fav.ico' }}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Teknik Informatika - PNL</title>
    <link rel="shortcut icon" href="{{ env('APP_URL') . '/favicon.ico' }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/linearicons.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/font-awesome.min.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/magnific-popup.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/nice-select.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/animate.min.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/owl.carousel.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/jquery-ui.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . '/css/main.css' }}">


<body>
    <header>
        <header id="header" id="home">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                            <ul>
                                <li><a href="https://www.facebook.com/Prodi-Teknik-Informatika-PNL-1943090052679642/"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/prodi-ti/"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.instagram.com/prodi.ti/"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                            <a href="tel:+62 645 42670"><span class="lnr lnr-phone-handset"></span> <span
                                    class="text">+62 645 42670</span></a>
                            <a href="mailto:proditi@pnl.ac.id"><span class="lnr lnr-envelope"></span> <span
                                    class="text">proditi@pnl.ac.id</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="{{ route('static.index') }}"><img
                                src="{{ env('APP_URL') . '/image/prodi/logo_ti.png' }}" alt=""
                                title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="{{ route('static.index') }}">HOME</a></li>
                            <li><a href="{{ route('static.profil') }}">TENTANG</a></li>
                            <li class="menu-has-children"><a href="">PROGRAM STUDI</a>
                                <ul>
                                    <li><a href="{{ route('static.dataDosen') }}">Data Dosen</a></li>
                                    <li><a href="{{ route('static.dataMahasiswa') }}">Data Mahasiswa</a></li>
                                    <li><a href="{{ route('static.strukturPimpinan') }}">Struktur Pimpinan</a></li>
                                    <li class="menu-has-children"><a style="color:#333">Fasilitas
                                        </a>
                                        <ul>
                                            <li><a href="{{ route('static.general') }}">Umum</a></li>
                                            <li><a href="{{ route('static.ruang') }}">Ruang</a></li>
                                            {{-- <li><a href="{{ route('static.ruangdosen') }}">Ruang Dosen</a></li> --}}
                                            <li><a href="{{ route('static.laboratorium') }}">laboratorium</a></li>
                                            <li><a href="{{ route('static.perpustakaan') }}">Perpustakaan</a></li>
                                            {{-- <li><a href="{{ route('static.laboratorium') }}">Akses Internet</a></li> --}}
                                        </ul>
                                    </li>
                                    <li class="menu-has-children"><a style="color:#333">Kuesioner </a>
                                        <ul>
                                            <li><a href="{{ route('static.kuesionerVMTS') }}">Kuesioner VMTS</a></li>
                                            <li><a href="{{ route('static.kuesionerTatakelola') }}">Kuesioner Tata
                                                    Kelola</a>
                                            </li>
                                            <li><a href="{{ route('static.kuesionerMitra') }}">Kuesioner Mitra</a></li>
                                            <li><a href="{{ route('static.kuesionerKMahasiswa') }}">Kuesioner Kepuasan
                                                    Mahasiswa</a></li>
                                            <li><a href="{{ route('static.kuesionerSaranaPrasarana') }}">Kuesioner
                                                    Sarana &
                                                    Prasarana</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('static.berita') }}">BERITA & INFO</a></li>
                            <li><a href="{{ route('static.kurikulum') }}">KURIKULUM</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->
    </header>

    <main>
        @yield('content') <!-- Ini adalah area konten unik untuk setiap halaman -->
    </main>

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Links</h4>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/tentang">Tentang</a></li>
                            <li><a href="/berita">Berita & Info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4 style="color: #04091e">-</h4>
                        <ul>
                            <li><a href="data-dosen">Data Dosen</a></li>
                            <li><a href="data-mahasiswa">Data Mahasiswa</a></li>
                            <li><a href="/fasilitas/general">Fasilitas Umum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4 style="color: #04091e">-</h4>
                        <ul>
                            <li><a href="/kurikulum">Kurikulum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL"
                                        placeholder="Enter Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email Address '" required=""
                                        type="email" disabled>
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit" disabled>
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="info"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center justify-content-between">
                <p class="footer-text m-0 col-lg-6 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Teknik Informatika - Politeknik Negeri Lhokseumawe
                </p>
                <div class="col-lg-6 col-sm-12 footer-social">
                    <a href="https://www.facebook.com/Prodi-Teknik-Informatika-PNL-1943090052679642/"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://github.com/prodi-ti/"><i class="fa fa-github"></i></a>
                    <a href="https://www.instagram.com/prodi.ti/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{ env('APP_URL') . '/js/vendor/jquery-2.2.4.min.js' }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ env('APP_URL') . '/js/vendor/bootstrap.min.js' }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ env('APP_URL') . '/js/easing.min.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/hoverIntent.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/superfish.min.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/jquery.ajaxchimp.min.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/jquery.magnific-popup.min.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/jquery.tabs.min.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/jquery.nice-select.min.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/owl.carousel.min.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/mail-script.js' }}"></script>
    <script src="{{ env('APP_URL') . '/js/main.js' }}"></script>
</body>

</html>
