@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Data Mahasiswa
                    </h1>
                    <p class="text-white link-nav"> Program Studi <span class="lnr lnr-arrow-right"></span><a
                            href="{{ route('static.dataMahasiswa') }}">Data Mahasiswa</a></p>
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
                        <div class="col-lg-12 col-md-12">
                            <h3 class="mt-20 mb-20">DATA MAHASISWA</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <p> Data Mahasiswa Program Studi Teknik Informatika</p>
                        </div>

                        <div class="row mx-0" style="width: 100%">
                            <div class="col-lg-3 mb-3 col-md-6 d-flex justify-content-center align-items-center"
                                style="width: 100%;">
                                <div class="card" style="width: 100%;">
                                    <a target="_Blank"
                                        href="https://drive.google.com/uc?export=download&id=1kgr6c00XFTaqs9e1-w76o3Lw6B2iMEqH">

                                        <img src="{{ asset('image/class-ilus.webp') }}" class="card-img-top"
                                            style="height: 8rem; object-fit: cover; object-position: center center"
                                            alt="Foto Ilustrasi Kelas">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2023-2024</p>
                                            {{-- <a target="_Blank" href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3 col-md-6 d-flex justify-content-center align-items-center"
                                style="width: 100%;">
                                <div class="card" style="width: 100%;">
                                    <a target="_Blank"
                                        href="https://drive.google.com/uc?export=download&id=1CayAsSnogtmh88nTl4EY4bALj3-UnIrQ">
                                        <img src="{{ asset('image/class-ilus.webp') }}" class="card-img-top"
                                            style="height: 8rem; object-fit: cover; object-position: center center"
                                            alt="Foto Ilustrasi Kelas">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2022-2023</p>
                                            {{-- <a target="_Blank" href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3 col-md-6 d-flex justify-content-center align-items-center"
                                style="width: 100%;">
                                <div class="card" style="width: 100%;">
                                    <a target="_Blank"
                                        href="https://drive.google.com/uc?export=download&id=1GRFKJWN4Lr4QTfnA7ln7x6f2Q_enBNNY">
                                        <img src="{{ asset('image/class-ilus.webp') }}" class="card-img-top"
                                            style="height: 8rem; object-fit: cover; object-position: center center"
                                            alt="Foto Ilustrasi Kelas">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2021-2022</p>
                                            {{-- <a target="_Blank" href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3 col-md-6 d-flex justify-content-center align-items-center"
                                style="width: 100%;">
                                <div class="card" style="width: 100%;">
                                    <a target="_Blank"
                                        href="https://drive.google.com/uc?export=download&id=1Pi1BQJ5psQL3IdbyBOKjA74B0fsKDWY-">
                                        <img src="{{ asset('image/class-ilus.webp') }}" class="card-img-top"
                                            style="height: 8rem; object-fit: cover; object-position: center center"
                                            alt="Foto Ilustrasi Kelas">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Data Mahasiswa</h5>
                                            <p class="card-text">Angkatan 2020-2021</p>
                                            {{-- <a target="_Blank" href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-3 pl-3">TAHUN 2022/2023</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan3">NO </div>
                                        <div class="nama-mahasiswa">NAMA</div>
                                        <div class="nim">NIM</div>
                                        <div class="kelas">KELAS</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">01</div>
                                        <div class="nama-mahasiswa">ABDU AL GHIFFARI</div>
                                        <div class="nim">2023573010069
                                        </div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">02</div>
                                        <div class="nama-mahasiswa">AHMAD ALDIN LASE</div>
                                        <div class="nim">2023573010072</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">03</div>
                                        <div class="nama-mahasiswa">ALIA SHAHIRA</div>
                                        <div class="nim">2023573010130</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">04</div>
                                        <div class="nama-mahasiswa">Anindya Humairah</div>
                                        <div class="nim">2023573010005</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">05</div>
                                        <div class="nama-mahasiswa">AULIA RIZKI</div>
                                        <div class="nim">2023573010077</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">06</div>
                                        <div class="nama-mahasiswa">CHELLSI MONICA</div>
                                        <div class="nim">2023573010009</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">07</div>
                                        <div class="nama-mahasiswa">Dini Rivani</div>
                                        <div class="nim">2023573010012</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">08</div>
                                        <div class="nama-mahasiswa">FAKRUL RAZI</div>
                                        <div class="nim">2023573010015</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">09</div>
                                        <div class="nama-mahasiswa">FAUZAN A'ZIMA</div>
                                        <div class="nim">2023573010018</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">10</div>
                                        <div class="nama-mahasiswa">Frans Halomoan Simanjuntak</div>
                                        <div class="nim">2023573010126</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">11</div>
                                        <div class="nama-mahasiswa">ICHSAN MAULANA</div>
                                        <div class="nim">2023573010022</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">12</div>
                                        <div class="nama-mahasiswa">Lia Amanda</div>
                                        <div class="nim">2023573010026</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">13</div>
                                        <div class="nama-mahasiswa">M. YUSUF</div>
                                        <div class="nim">2023573010089</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">14</div>
                                        <div class="nama-mahasiswa">MUHAMMAD ASAQIR</div>
                                        <div class="nim">2023573010091</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">15</div>
                                        <div class="nama-mahasiswa">MUHAMMAD FAJAR</div>
                                        <div class="nim">2023573010093</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">16</div>
                                        <div class="nama-mahasiswa">MUHAMMAD HARIS</div>
                                        <div class="nim">2023573010032</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">17</div>
                                        <div class="nama-mahasiswa">MUHAMMAD RIZKI RAMADAN</div>
                                        <div class="nim">2023573010097</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">18</div>
                                        <div class="nama-mahasiswa">Mulkan Fajri</div>
                                        <div class="nim">2023573010142</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">19</div>
                                        <div class="nama-mahasiswa">NADIATUL KHAIRA</div>
                                        <div class="nim">2023573010039</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">20</div>
                                        <div class="nama-mahasiswa">NAZWA FIRYAL CHERRY</div>
                                        <div class="nim">2023573010042</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">21</div>
                                        <div class="nama-mahasiswa">NURWAHIDA ZAKIA</div>
                                        <div class="nim">2023573010106</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">22</div>
                                        <div class="nama-mahasiswa">RAIHAN AZARINA</div>
                                        <div class="nim">2023573010049</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">23</div>
                                        <div class="nama-mahasiswa">RISKA ARMANDA</div>
                                        <div class="nim">2023573010053</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">24</div>
                                        <div class="nama-mahasiswa">SANJELIER PRIETY ZILKA</div>
                                        <div class="nim">2023573010110</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">25</div>
                                        <div class="nama-mahasiswa">SITI AINUL MARDIAH</div>
                                        <div class="nim">2023573010055</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">26</div>
                                        <div class="nama-mahasiswa">SYARIFAH</div>
                                        <div class="nim">2023573010058</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">27</div>
                                        <div class="nama-mahasiswa">TATYA AULYA PUTRI</div>
                                        <div class="nim">2023573010062</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">28</div>
                                        <div class="nama-mahasiswa">Ulfia Rahmah</div>
                                        <div class="nim">2023573010119</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">29</div>
                                        <div class="nama-mahasiswa">Yazid Bustami</div>
                                        <div class="nim">2023573010122</div>
                                        <div class="kelas">TI 1-A</div>
                                    </div>

                                    <hr>
                                    <div class="table-row2">
                                        <div class="urutan3">01</div>
                                        <div class="nama-mahasiswa">Abdul Harist</div>
                                        <div class="nim">2023573010127</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">02</div>
                                        <div class="nama-mahasiswa">AIDILFANSURY</div>
                                        <div class="nim">2023573010001</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">03</div>
                                        <div class="nama-mahasiswa">Alifa Tazerina</div>
                                        <div class="nim">2023573010003</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">04</div>
                                        <div class="nama-mahasiswa">ARDIANSYAH</div>
                                        <div class="nim">2023573010075</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">05</div>
                                        <div class="nama-mahasiswa">Aulia Syahrul Mubaraq</div>
                                        <div class="nim">2023573010125</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">06</div>
                                        <div class="nama-mahasiswa">Cut Nadia</div>
                                        <div class="nim">2023573010010</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">07</div>
                                        <div class="nama-mahasiswa">Dita Nabila</div>
                                        <div class="nim">2023573010013</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">08</div>
                                        <div class="nama-mahasiswa">FARHATUN NAFISA</div>
                                        <div class="nim">2023573010016</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">09</div>
                                        <div class="nama-mahasiswa">FAUZAN AZIMA</div>
                                        <div class="nim">2023573010081</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">10</div>
                                        <div class="nama-mahasiswa">FUZARI ALZIYANSYAH</div>
                                        <div class="nim">2023573010083</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">11</div>
                                        <div class="nama-mahasiswa">ICHSAN MAULANA</div>
                                        <div class="nim">2023573010085</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">12</div>
                                        <div class="nama-mahasiswa">Livia Safirani</div>
                                        <div class="nim">2023573010138</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">13</div>
                                        <div class="nama-mahasiswa">M.Ijlal Ziyad Akbar</div>
                                        <div class="nim">2023573010139</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">14</div>
                                        <div class="nama-mahasiswa">MUHAMMAD DAFFA RAIHAN</div>
                                        <div class="nim">2023573010092</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">15</div>
                                        <div class="nama-mahasiswa">Muhammad Farhan</div>
                                        <div class="nim">2023573010094</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">16</div>
                                        <div class="nama-mahasiswa">MUHAMMAD IBRAHIM</div>
                                        <div class="nim">2023573010033</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">17</div>
                                        <div class="nama-mahasiswa">Muhammad Syahrul</div>
                                        <div class="nim">2023573010098</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">18</div>
                                        <div class="nama-mahasiswa">MUTHIAH RAHMA PASARIBU</div>
                                        <div class="nim">2023573010101</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">19</div>
                                        <div class="nama-mahasiswa">Nadila Arsyifa</div>
                                        <div class="nim">2023573010040</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">20</div>
                                        <div class="nama-mahasiswa">Nilam Cahaya Safitri</div>
                                        <div class="nim">2023573010104</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">21</div>
                                        <div class="nama-mahasiswa">Pelangi Xena</div>
                                        <div class="nim">2023573010045</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">22</div>
                                        <div class="nama-mahasiswa">RAUDHATUL HUSNA</div>
                                        <div class="nim">2023573010050</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">23</div>
                                        <div class="nama-mahasiswa">Rizal Ananda Rizky</div>
                                        <div class="nim">2023573010054</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">24</div>
                                        <div class="nama-mahasiswa">SANTI MELVIRA</div>
                                        <div class="nim">2023573010111</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">25</div>
                                        <div class="nama-mahasiswa">SITI SARAH SYIFA</div>
                                        <div class="nim">2023573010056</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">26</div>
                                        <div class="nama-mahasiswa">Syifa Ramadhani Al-Fata</div>
                                        <div class="nim">2023573010145</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">27</div>
                                        <div class="nama-mahasiswa">TASYA SALSABILA KISRA</div>
                                        <div class="nim">2023573010146</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">28</div>
                                        <div class="nama-mahasiswa">Teguh Randi Angginta</div>
                                        <div class="nim">2023573010063</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">29</div>
                                        <div class="nama-mahasiswa">ULFIATUL KHAIRA</div>
                                        <div class="nim">2023573010065</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">30</div>
                                        <div class="nama-mahasiswa">YULI MULIA DINAH</div>
                                        <div class="nim">2023573010067</div>
                                        <div class="kelas">TI 1-B</div>
                                    </div>

                                    <hr>

                                    <div class="table-row2">
                                        <div class="urutan3">01</div>
                                        <div class="nama-mahasiswa">Abu Rijal Fajri</div>
                                        <div class="nim">2023573010070</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">02</div>
                                        <div class="nama-mahasiswa">ALDI ALFARISYI</div>
                                        <div class="nim">2023573010073</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">03</div>
                                        <div class="nama-mahasiswa">ALKANIYA POBY</div>
                                        <div class="nim">2023573010131</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">04</div>
                                        <div class="nama-mahasiswa">Ariel Syahreza</div>
                                        <div class="nim">2023573010006</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">05</div>
                                        <div class="nama-mahasiswa">Bagas Darmawan</div>
                                        <div class="nim">2023573010007</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">06</div>
                                        <div class="nama-mahasiswa">CUT NISRINA SHAFA</div>
                                        <div class="nim">2023573010078</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">07</div>
                                        <div class="nama-mahasiswa">DWI FITRI ANIS LUTFIA</div>
                                        <div class="nim">2023573010014</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">08</div>
                                        <div class="nama-mahasiswa">Fariz Hafiz</div>
                                        <div class="nim">2023573010135</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">09</div>
                                        <div class="nama-mahasiswa">Fauzi Syahril Harahap</div>
                                        <div class="nim">2023573010082</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">10</div>
                                        <div class="nama-mahasiswa">HAIKAL FURQAN</div>
                                        <div class="nim">2023573010084</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">11</div>
                                        <div class="nama-mahasiswa">INTAN SUHANA</div>
                                        <div class="nim">2023573010023</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">12</div>
                                        <div class="nama-mahasiswa">M. AKMAL</div>
                                        <div class="nim">2023573010086</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">13</div>
                                        <div class="nama-mahasiswa">Makfira Ramadhani</div>
                                        <div class="nim">2023573010090</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">14</div>
                                        <div class="nama-mahasiswa">Muhammad Dhia Ulhaq</div>
                                        <div class="nim">2023573010028</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">15</div>
                                        <div class="nama-mahasiswa">Muhammad Fathur Arozy</div>
                                        <div class="nim">2023573010095</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">16</div>
                                        <div class="nama-mahasiswa">MUHAMMAD IKHSAN JASRI</div>
                                        <div class="nim">2023573010096</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">17</div>
                                        <div class="nama-mahasiswa">MUHAMMAD SYAUQI AL RIFQI</div>
                                        <div class="nim">2023573010099</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">18</div>
                                        <div class="nama-mahasiswa">NABILA FADILLA SYAKRY</div>
                                        <div class="nim">2023573010102</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">19</div>
                                        <div class="nama-mahasiswa">Nadilla Khalisha</div>
                                        <div class="nim">2023573010143</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">20</div>
                                        <div class="nama-mahasiswa">Nurfazila</div>
                                        <div class="nim">2023573010043</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">21</div>
                                        <div class="nama-mahasiswa">PUTRI NGEAYU</div>
                                        <div class="nim">2023573010046</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">22</div>
                                        <div class="nama-mahasiswa">REFA MAULIDA</div>
                                        <div class="nim">2023573010051</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">23</div>
                                        <div class="nama-mahasiswa">Rizka Melia Akbar</div>
                                        <div class="nim">2023573010107</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">24</div>
                                        <div class="nama-mahasiswa">SASKIA NASQA PUTRI</div>
                                        <div class="nim">2023573010112</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">25</div>
                                        <div class="nama-mahasiswa">Sukia Riska</div>
                                        <div class="nim">2023573010057</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">26</div>
                                        <div class="nama-mahasiswa">T. Hafidhul Furqan</div>
                                        <div class="nim">2023573010059</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">27</div>
                                        <div class="nama-mahasiswa">TIARA ARUNISSA</div>
                                        <div class="nim">2023573010117</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">28</div>
                                        <div class="nama-mahasiswa">Wildanul Hakim</div>
                                        <div class="nim">2023573010120</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">29</div>
                                        <div class="nama-mahasiswa">YULIDA ALVINA</div>
                                        <div class="nim">2023573010123</div>
                                        <div class="kelas">TI 1-C</div>
                                    </div>

                                    <hr>

                                    <div class="table-row2">
                                        <div class="urutan3">01</div>
                                        <div class="nama-mahasiswa">Aditya Fernanda</div>
                                        <div class="nim">2023573010128</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">02</div>
                                        <div class="nama-mahasiswa">Aldi Haryadi</div>
                                        <div class="nim">2023573010129</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">03</div>
                                        <div class="nama-mahasiswa">AMIRUL ZAKIY</div>
                                        <div class="nim">2023573010074</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">04</div>
                                        <div class="nama-mahasiswa">ARIF MUHAMMAD DHANY</div>
                                        <div class="nim">2023573010076</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">05</div>
                                        <div class="nama-mahasiswa">Balqis</div>
                                        <div class="nim">2023573010008</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">06</div>
                                        <div class="nama-mahasiswa">Cynthia Efendi</div>
                                        <div class="nim">2023573010011</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">07</div>
                                        <div class="nama-mahasiswa">Fachrian Albar</div>
                                        <div class="nim">2023573010080</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">08</div>
                                        <div class="nama-mahasiswa">FATHUR RAHMAN</div>
                                        <div class="nim">2023573010136</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">09</div>
                                        <div class="nama-mahasiswa">FEBRYANTI AMELIA PUTRI</div>
                                        <div class="nim">2023573010019</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">10</div>
                                        <div class="nama-mahasiswa">HAVIZIA SALSABILA</div>
                                        <div class="nim">2023573010021</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">11</div>
                                        <div class="nama-mahasiswa">KARTIKA PRATIWI KURNIA</div>
                                        <div class="nim">2023573010024</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">12</div>
                                        <div class="nama-mahasiswa">M. FATHUZ ZAIYAN</div>
                                        <div class="nim">2023573010087</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">13</div>
                                        <div class="nama-mahasiswa">Maulana</div>
                                        <div class="nim">2023573010027</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">14</div>
                                        <div class="nama-mahasiswa">Muhammad Diva Agly</div>
                                        <div class="nim">2023573010029</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">15</div>
                                        <div class="nama-mahasiswa">MUHAMMAD FITRAH DAVID</div>
                                        <div class="nim">2023573010031</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">16</div>
                                        <div class="nama-mahasiswa">Muhammad Nauval Qisti</div>
                                        <div class="nim">2023573010034</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">17</div>
                                        <div class="nama-mahasiswa">MUHAMMAD ZAMZAMI</div>
                                        <div class="nim">2023573010036</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">18</div>
                                        <div class="nama-mahasiswa">NADIA FAZILLAH</div>
                                        <div class="nim">2023573010037</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">19</div>
                                        <div class="nama-mahasiswa">NAFISYA HUSNA</div>
                                        <div class="nim">2023573010041</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">20</div>
                                        <div class="nama-mahasiswa">NURUL SOFIA</div>
                                        <div class="nim">2023573010105</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>

                                    <div class="table-row2">
                                        <div class="urutan3">21</div>
                                        <div class="nama-mahasiswa">Qorisa Agustia</div>
                                        <div class="nim">2023573010047</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">22</div>
                                        <div class="nama-mahasiswa">REYZA MAULANA PUTRA</div>
                                        <div class="nim">2023573010052</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">23</div>
                                        <div class="nama-mahasiswa">RIZKY AULIA RAMADHAN</div>
                                        <div class="nim">2023573010108</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">24</div>
                                        <div class="nama-mahasiswa">SAYYID RUHUL HAQ</div>
                                        <div class="nim">2023573010113</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">25</div>
                                        <div class="nama-mahasiswa">SYAFIQ RASUL</div>
                                        <div class="nim">2023573010115</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">26</div>
                                        <div class="nama-mahasiswa">Tania Humaira</div>
                                        <div class="nim">2023573010060</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">27</div>
                                        <div class="nama-mahasiswa">TJUT NYAK GHINA GHAZIRA</div>
                                        <div class="nim">2023573010064</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">28</div>
                                        <div class="nama-mahasiswa">Win Faris Ariyoga</div>
                                        <div class="nim">2023573010121</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">29</div>
                                        <div class="nama-mahasiswa">ZHAHARA AMELIA</div>
                                        <div class="nim">2023573010068</div>
                                        <div class="kelas">TI 1-D</div>
                                    </div>
                                    
                                    <hr>

                                    <div class="table-row2">
                                        <div class="urutan3">01</div>
                                        <div class="nama-mahasiswa">ADRIO FARESI</div>
                                        <div class="nim">2023573010071</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">02</div>
                                        <div class="nama-mahasiswa">Alfi Rahmi</div>
                                        <div class="nim">2023573010002</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">03</div>
                                        <div class="nama-mahasiswa">ANANDA NUR ANJANI</div>
                                        <div class="nim">2023573010004</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">04</div>
                                        <div class="nama-mahasiswa">Arya Dwi Pangga Handoko</div>
                                        <div class="nim">2023573010132</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">05</div>
                                        <div class="nama-mahasiswa">BINTANG RAMADHAN</div>
                                        <div class="nim">2023573010133</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">06</div>
                                        <div class="nama-mahasiswa">DHIAUL MILLAH</div>
                                        <div class="nim">2023573010079</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">07</div>
                                        <div class="nama-mahasiswa">FAKHRURRAZI</div>
                                        <div class="nim">2023573010134</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">08</div>
                                        <div class="nama-mahasiswa">Fatimah Zuhra</div>
                                        <div class="nim">2023573010017</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">09</div>
                                        <div class="nama-mahasiswa">FINA RIZQINA</div>
                                        <div class="nim">2023573010020</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">10</div>
                                        <div class="nama-mahasiswa">Husnan Alwi</div>
                                        <div class="nim">2023573010137</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">11</div>
                                        <div class="nama-mahasiswa">KHAISAN NACHWA</div>
                                        <div class="nim">2023573010025</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">12</div>
                                        <div class="nama-mahasiswa">M. RIZKI</div>
                                        <div class="nim">2023573010088</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">13</div>
                                        <div class="nama-mahasiswa">MUHAMMAD ALFATURRIZKY</div>
                                        <div class="nim">2023573010140</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">14</div>
                                        <div class="nama-mahasiswa">Muhammad Dzakiy</div>
                                        <div class="nim">2023573010030</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">15</div>
                                        <div class="nama-mahasiswa">MUHAMMAD GHAZA AL-GHAZALI</div>
                                        <div class="nim">2023573010141</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">16</div>
                                        <div class="nama-mahasiswa">MUHAMMAD RIZKI</div>
                                        <div class="nim">2023573010035</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">17</div>
                                        <div class="nama-mahasiswa">Mujiburrahman Hakim</div>
                                        <div class="nim">2023573010100</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">18</div>
                                        <div class="nama-mahasiswa">Nadiati</div>
                                        <div class="nim">2023573010038</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">19</div>
                                        <div class="nama-mahasiswa">NAILA ZAHIRA</div>
                                        <div class="nim">2023573010103</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">20</div>
                                        <div class="nama-mahasiswa">NURUL SYAFIQA</div>
                                        <div class="nim">2023573010044</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">21</div>
                                        <div class="nama-mahasiswa">RAHMATUNNISA</div>
                                        <div class="nim">2023573010048</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">22</div>
                                        <div class="nama-mahasiswa">RIFKI MAULANA</div>
                                        <div class="nim">2023573010144</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">23</div>
                                        <div class="nama-mahasiswa">SALMAN CHAIRY</div>
                                        <div class="nim">2023573010109</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">24</div>
                                        <div class="nama-mahasiswa">SILVIA ANGGRIANI</div>
                                        <div class="nim">2023573010114</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">25</div>
                                        <div class="nama-mahasiswa">SYAHRI RAHMITA</div>
                                        <div class="nim">2023573010116</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">26</div>
                                        <div class="nama-mahasiswa">TASYA ULFA RAHMAZANI</div>
                                        <div class="nim">2023573010061</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">27</div>
                                        <div class="nama-mahasiswa">Tresna Hidayah</div>
                                        <div class="nim">2023573010118</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">28</div>
                                        <div class="nama-mahasiswa">Wulandari</div>
                                        <div class="nim">2023573010066</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                    
                                    <div class="table-row2">
                                        <div class="urutan3">29</div>
                                        <div class="nama-mahasiswa">ZUHRA</div>
                                        <div class="nim">2023573010124</div>
                                        <div class="kelas">TI 1-E</div>
                                    </div>
                                                                                                                                                
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        {{-- <hr> --}}
                        {{-- <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ env('APP_URL') . '/image/blog/feature-img1.jpg' }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3 meta-details">
                            <ul class="tags">
                                <li><a href="#">Food,</a></li>
                                <li><a href="#">Technology,</a></li>
                                <li><a href="#">Politics,</a></li>
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                        class="lnr lnr-user"></span></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                        class="lnr lnr-calendar-full"></span></p>
                                <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                        class="lnr lnr-eye"></span></p>
                                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                        class="lnr lnr-bubble"></span></p>
                                <ul class="social-links col-lg-12 col-md-12 col-6">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div> --}}
                        {{-- <hr> --}}
                        {{-- <div class="single-post row"> --}}
                        {{-- <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ env('APP_URL') . '/image/blog/feature-img1.jpg' }}" alt="">
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-3  col-md-3 meta-details">
                            <ul class="tags">
                                <li><a href="#">Food,</a></li>
                                <li><a href="#">Technology,</a></li>
                                <li><a href="#">Politics,</a></li>
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Mark wiens</a> <span
                                        class="lnr lnr-user"></span></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span
                                        class="lnr lnr-calendar-full"></span></p>
                                <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span
                                        class="lnr lnr-eye"></span></p>
                                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span
                                        class="lnr lnr-bubble"></span></p>
                                <ul class="social-links col-lg-12 col-md-12 col-6">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        {{-- </div> --}}
                    </div>
                    {{-- <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <img src="img/blog/user-info.png" alt="">
                            <a href="#">
                                <h4>Charlie Barber</h4>
                            </a>
                            <p>
                                Senior blog writer
                            </p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <p>
                                Boot camps have its supporters andit sdetractors. Some people do not
                                understand
                                why you
                                should have to spend money on boot camp when you can get. Boot camps have
                                itssuppor
                                ters andits detractors.
                            </p>
                        </div>
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Posts</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Space The Final Frontier</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>The Amazing Hubble</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Astronomy Or Astrology</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="single-post-list d-flex flex-row align-items-center">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html">
                                            <h6>Asteroids telescope</h6>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget ads-widget">
                            <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
                        </div>
                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Post Catgories</h4>
                            <ul class="cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="newsletter-title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="col-autos">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            placeholder="Enter email" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'">
                                    </div>
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">
                                You can unsubscribe at any time
                            </p>
                        </div>
                        <div class="single-sidebar-widget tag-cloud-widget">
                            <h4 class="tagcloud-title">Tag Clouds</h4>
                            <ul>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
    </section>
    <!-- End post-content Area -->
@endsection
