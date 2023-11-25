@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Kurikulum
                    </h1>
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
                    <div class="single-post row ">
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
                        <div class="col-lg-12 col-md-12">
                            <h3 class="mt-20 mb-20">Kurikulum Teknik Informatika</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <p> Jadwal Pembelajaran Program Studi D4 Teknik Informatika - Politeknik Negeri Lhokseumawe
                            </p>
                        </div>
                        <div class="col-12">
                            <div id="accordion">
                                <div class="card mb-2">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne" style="padding-left:0">
                                                Jadwal Pembelajaran 2020-2021
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="card-text">Kepada Mahasiswa Teknik Informatika
                                                Politeknik
                                                Negeri Lhokseumawe, Berikut Jadwal Pembelajaran Tahun 2018-2019. </p>
                                            <a href="#" class="btn btn-primary">Download</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="true" aria-controls="collapseTwo" style="padding-left:0">
                                                Jadwal Pembelajaran 2021-2022
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="card-text">Kepada Mahasiswa Teknik Informatika
                                                Politeknik
                                                Negeri Lhokseumawe, Berikut Jadwal Pembelajaran Tahun 2018-2019. </p>
                                            <a href="#" class="btn btn-primary">Download</a>
                                        </div>s
                                    </div>
                                </div>
                                <div class="card mb-2">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="true" aria-controls="collapseThree" style="padding-left:0">
                                                Jadwal Pembelajaran 2022-2023
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="card-text">Kepada Mahasiswa Teknik Informatika
                                                Politeknik
                                                Negeri Lhokseumawe, Berikut Jadwal Pembelajaran Tahun 2018-2019. </p>
                                            <a href="#" class="btn btn-primary">Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 mt-4 mb-2">
                            <p> Kurikulum Pembelajaran Program Studi D4 Teknik Informatika - Politeknik Negeri
                                Lhokseumawe
                            </p>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER I</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI0003</div>
                                        <div class="mata-kuliah">English for Academic Listening
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1RdXakZcfE8QPIMHPv1BL1TdWsFeUK4yh/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">DU0001</div>
                                        <div class="mata-kuliah"> Agama
                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1qangeaUcdXdW6jm9cJQtlybiJ5CTytvL/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI0004</div>
                                        <div class="mata-kuliah"> Matematika Teknik
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1jV0DRYs4_uwFypsVk9EZSz1Ua9ygskSh/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI1008</div>
                                        <div class="mata-kuliah"> Konsep Teknologi Informasi
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1SRQJ0jlCUDjjN8GCamQE1kH4KWwK2jAZ/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        <div class="kode">TI2006</div>
                                        <div class="mata-kuliah"> Konsep Pemrograman
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1lLIZLQFslcKwt4NTXXbYha_AVArSZfxQ/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">06</div>
                                        <div class="kode">TI2029</div>
                                        <div class="mata-kuliah"> Konsep Basis Data
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1Po_JM6RA3JUzfcOb9q-Uk97QlRvWQfnl/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">07</div>
                                        <div class="kode">TI2016</div>
                                        <div class="mata-kuliah"> Organisasi dan Arsitektur Komputer
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1TSxYZHDlJGmXzha4vhW3t-L4amiyIISC/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">08</div>
                                        <div class="kode">TI2084</div>
                                        <div class="mata-kuliah"> Logika dan Algoritma
                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1FeV4Rf8XcgR_NVxoP-2brI_E7co2Q6bP/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">09</div>
                                        <div class="kode">TI2009</div>
                                        <div class="mata-kuliah"> Praktikum Keterampilan Komputer
                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1nPpdteWNGsqvbjlvucRMocLnSqQ88BEr/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">10</div>
                                        <div class="kode">TI2007</div>
                                        <div class="mata-kuliah"> Praktikum Konsep Pemrograman
                                        </div>
                                        <div class="jam">5</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1JdqFDjZXEHZF_2_18denjnLWIJFPSU8f/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">11</div>
                                        <div class="kode">TI2030</div>
                                        <div class="mata-kuliah"> Praktikum Konsep Basis Data
                                        </div>
                                        <div class="jam">5</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1a0rxM8wghMBDlBTvzW8T3098_W6sOXb5/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">37</div>
                                        <div class="sks text-dark">22</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER II</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI1005
                                        </div>
                                        <div class="mata-kuliah"> Matematika diskrit

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1Qlf3uOF0DTq6gKe1cFQpnnxYYrX__gyw/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">TI0013
                                        </div>
                                        <div class="mata-kuliah"> English for Academic Speaking

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1SYnB_wTf1oMXQgnNTBezqu0f_6nFONr0/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI2017
                                        </div>
                                        <div class="mata-kuliah"> Algoritma dan Struktur Data

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1dKzoyJFr9fZ7VaHyU4g-N0-sA4r51I_L/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI2039
                                        </div>
                                        <div class="mata-kuliah"> Basis Data Lanjut

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1CbmZte0OnmhusEkG2HCU8VMb7liKsWri/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        <div class="kode">TI2086
                                        </div>
                                        <div class="mata-kuliah"> Desain Web (SI WEB 1)

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1LYTNnORPDVRBZl0Lfh0yUMzJGqGTiA_5/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">06</div>
                                        <div class="kode">TI1019
                                        </div>
                                        <div class="mata-kuliah"> Bahasa Assembly

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps">-</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">07</div>
                                        <div class="kode">DU0002
                                        </div>
                                        <div class="mata-kuliah"> Pancasila dan Kewarganegaraan

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1KYiwF-_lvB3TZwjazJG4xqb_vawiRtjA/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">08</div>
                                        <div class="kode">TI2087
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Desain Web (SI WEB 1)

                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1A4eRi_KPgLOIwgiTGifekxwwK5fBEjD_/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">09</div>
                                        <div class="kode">TI2018
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Algoritma dan Struktur Data

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1n0ppQJTrD8xvZiLDp4DeLi3B7wekPmJF/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">10</div>
                                        <div class="kode">TI2020
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Bahasa Assembly

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps">-</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">11</div>
                                        <div class="kode">TI2040
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Basis Data Lanjut

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1yNW8eG05vkexyzJkNpPGFITqyk0AxroP/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">37</div>
                                        <div class="sks text-dark">21</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER III</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI2085</div>
                                        <div class="mata-kuliah"> Aljabar Linier

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1vvOvjNmW7CE8QVd7MsA9zf88OiEy_DHk/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">TI0025
                                        </div>
                                        <div class="mata-kuliah"> Bahasa Ingris 3

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1GVssZKdqhpx59vG8sL4uL8XuXV1gxabh/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI2031
                                        </div>
                                        <div class="mata-kuliah"> Pemrograman Berorientasi Objek

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/18zPrn8FhCZN2GSFhlwF1VA7sV99ETGGs/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI2049
                                        </div>
                                        <div class="mata-kuliah"> Konsep Jaringan Komputer

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1GT5Vc6gn8eGqG7GGa1aR-CAZUHcBZP2E/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        <div class="kode">TI2038
                                        </div>
                                        <div class="mata-kuliah"> Rekayasa Perangkat Lunak

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1UW2I_UNE7Q5b2W2TlIQNQf98TsU3ODpb/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">06</div>
                                        <div class="kode">TI2088
                                        </div>
                                        <div class="mata-kuliah"> Pemrograman Web Lanjut

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1B70lCKY7IV39_f_no8PDp21VFKqUgGkz/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">07</div>
                                        <div class="kode">TI1026
                                        </div>
                                        <div class="mata-kuliah"> Metode Numerik

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1y93c5zzFRMw3VcvWzPC07XjWrh7noihl/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">08</div>
                                        <div class="kode">TI2052
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Pemrograman Web Lanjut

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1rEXegWM_fhHxYyWMV6eTkeKWy9LEYF-7/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">09</div>
                                        <div class="kode">TI2032
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Pemrograman Berorientasi Objek

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1rcbIjVpQLs68Ye5AxA_Jkhzvttit4L_A/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">10</div>
                                        <div class="kode">TI2027
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Metode Numerik

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a href="" target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">11</div>
                                        <div class="kode">TI2050
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Konsep Jaringan Komputer

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1dZab3LlV182vUeO7tNMKNF1ABtTOYcnT/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">21</div>
                                        <div class="sks text-dark">36</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER IV</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI0036
                                        </div>
                                        <div class="mata-kuliah"> English for academic writing

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/19rpY6G1YCtJc3FsuaBKIuJM02MCEkDSM/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">TI2064
                                        </div>
                                        <div class="mata-kuliah"> Administrasi dan Manajemen Jaringan

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1yAsdwzuGSxgCd9CYjTKuNrU7qfpyNFN5/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI1053
                                        </div>
                                        <div class="mata-kuliah"> Kecerdasan Buatan

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1VCoGXF_fV4ncgS2kkGIjL4B2mgGwauGv/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI2066
                                        </div>
                                        <div class="mata-kuliah"> Pemrograman Lanjut

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1RUBsD8hlxbm1U2bPDFGOih1clMw52Lmt/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        <div class="kode">TI2051
                                        </div>
                                        <div class="mata-kuliah"> Administrasi Basis Data

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/17RRSYPSMMoRuz2YALxb1bZJDhBpeqgn0/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">06</div>
                                        <div class="kode">TI2042
                                        </div>
                                        <div class="mata-kuliah"> Sistem Operasi

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1hwh0maqEtRznJDIf1AhaN2Zqolf8sr_L/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">07</div>
                                        <div class="kode">TI2063
                                        </div>
                                        <div class="mata-kuliah"> Framework Web Development

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1TwJD4R5S-Kg_PUdeFAzGPXV7yEKPG12H/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">08</div>
                                        <div class="kode">TI2045
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Pemrograman Lanjut

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1ftvw6sbmwkSz_BTZaQd6Q5Wya0Egn3TX/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">09</div>
                                        <div class="kode">TI2062
                                        </div>
                                        <div class="mata-kuliah"> P. Administrasi dan Manajemen Jaringan

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1fx1UmRZ7SLkV17rAIISZ9qKIpabuZjhE/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">10</div>
                                        <div class="kode">TI2069
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Administrasi Basis Data

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/18edbVe-A1RGUvOQjEByLPPPhQ9cjaoNR/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">11</div>
                                        <div class="kode">TI2067
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Kecerdasan Buatan

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1Lube47tePUfUbJOOl111slBdkZe_3REA/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">12</div>
                                        <div class="kode">TI2070
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Framework Web Development

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1evpZmCTQD7i2efKEJouD3PdXYMWiampn/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">13</div>
                                        <div class="kode">TI2043
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Sistem Operasi

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1vWHzMnlrujMYzaGUSRdcuC5r4njdnZ0R/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">38</div>
                                        <div class="sks text-dark">22</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER V</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI2065
                                        </div>
                                        <div class="mata-kuliah"> Sistem Pengambilan Keputusan dan SIM

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1jSkAZrwg5HdPirjWXJT942gscBDtnO9e/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">TI2057
                                        </div>
                                        <div class="mata-kuliah"> Bahasa Indonesia

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/12yWBHnRjQHusEjo666FIWONOopoTmtaG/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI1037
                                        </div>
                                        <div class="mata-kuliah"> Statistik dan Probabilitas

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/155NuwVexi1CXQZxjAQNn7I03swVGpVgJ/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI2054</div>
                                        <div class="mata-kuliah"> Pemrograman Mobile

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1v99b9WxVpDYGvWh8YH4iTuZinpeT6tvy/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        <div class="kode">TI2061
                                        </div>
                                        <div class="mata-kuliah"> Keamanan Jaringan Komputer

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1_tGpEeAbVWdXaHe2uMWK5MsCgtPsJzQJ/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">06</div>
                                        <div class="kode">TI2071
                                        </div>
                                        <div class="mata-kuliah"> Rancangan Analisa Algoritma

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1t4vbj6SnHFSqTsz2h6qlpp0B8dFv_ZOy/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">07</div>
                                        <div class="kode">TI1066
                                        </div>
                                        <div class="mata-kuliah"> Pengolahan Citra Digital

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1Tc-cRSZQjeuVjRn9_rU7ucTR3dAodCHE/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">08</div>
                                        <div class="kode">TI1079
                                        </div>
                                        <div class="mata-kuliah"> Workshop Pengembangan Perangkat Lunak

                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a href="" target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">09</div>
                                        <div class="kode">TI2062
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Keamanan Jaringan Komputer

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1fx1UmRZ7SLkV17rAIISZ9qKIpabuZjhE/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">10</div>
                                        <div class="kode">TI2068
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Pengolahan Citra Digital

                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1BxncK0-VEQUzT80rIsM-YfudI4c6UHEA/view?usp=drive_link"
                                                target="_blank">Unduh</a></div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">11</div>
                                        <div class="kode">TI2055
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Pemrograman Mobile

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1EIxqSqdXWo8OMNz1V6fPMTFAN0JEyDeU/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">34</div>
                                        <div class="sks text-dark">20</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER VI</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI2075
                                        </div>
                                        <div class="mata-kuliah"> Metodologi Penelitian

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1n4VYOW82_mX_4WeLU-waHITRcfbuU4Sj/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">TI1064
                                        </div>
                                        <div class="mata-kuliah"> Machine Learning

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/130EuHTQDGndaAC18ZYhHNZF_ZqkU339k/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI2081
                                        </div>
                                        <div class="mata-kuliah"> Kerja Praktek (PKL)

                                        </div>
                                        <div class="jam">8</div>
                                        <div class="sks">3</div>
                                        <div class="rps">-</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI1076
                                        </div>
                                        <div class="mata-kuliah"> Computer Vision

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1IU3eoRl-urfiJ87ns52LWAHOwU_xM-97/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        {{-- <div class="kode">TI1076 --}}
                                        <div class="kode">TI2032
                                        </div>
                                        <div class="mata-kuliah"> P.Computer Vision

                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1IU3eoRl-urfiJ87ns52LWAHOwU_xM-97/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">18</div>
                                        <div class="sks text-dark">10</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER VII</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI2098
                                        </div>
                                        <div class="mata-kuliah"> Kualitas Perangkat Lunak

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1zKmv3MguJWpyog24lGMwOfdhVQvYAPBq/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">TI1068
                                        </div>
                                        <div class="mata-kuliah"> Komputasi Cloud

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/13uTXsrn9lKMaw5vO14_bbIQI_drfXO_K/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI1065
                                        </div>
                                        <div class="mata-kuliah"> Interaksi Manusia dan Komputer

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1IcCQCY2FbWCp1NqGNg2Uea1wXEGT9_c8/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI2091
                                        </div>
                                        <div class="mata-kuliah"> Geografis Information System

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps">-</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">05</div>
                                        <div class="kode">TI1069
                                        </div>
                                        <div class="mata-kuliah"> Big Data

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1nFYRaUiYKEyiteWs0VJOUiBBMznLwPN-/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">06</div>
                                        <div class="kode">TI1077
                                        </div>
                                        <div class="mata-kuliah"> Data Mining dan Warehouse

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1pN1v6Ab2H1Q0bCBSpvjTi4TeXE6zkqx6/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">07</div>
                                        <div class="kode">TI2056
                                        </div>
                                        <div class="mata-kuliah"> Proyek Akhir Tahap 1

                                        </div>
                                        <div class="jam">6</div>
                                        <div class="sks">2</div>
                                        <div class="rps">-</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">08</div>
                                        <div class="kode">TI1078
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Big Data

                                        </div>
                                        <div class="jam">3</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1XdQ88wVkPofgMNGUBeE-dZMFrYtYyAxC/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">09</div>
                                        <div class="kode">TI1079
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Kualitas Perangkat Lunak

                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1yPglnnrW4uu3t2Q_1BThzsYzlqm7srNF/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">10</div>
                                        <div class="kode">TI2092
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Geografis Information System

                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1u2dcit6jZUX86JWKpQSV66zLM8uUmowZ/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">11</div>
                                        <div class="kode">TI2059
                                        </div>
                                        <div class="mata-kuliah"> Praktikum Komputasi Cloud

                                        </div>
                                        <div class="jam">4</div>
                                        <div class="sks">1</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1Ss5VGT621RewoLUZgRkCtZ5S37yuuzV0/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">33</div>
                                        <div class="sks text-dark">18</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border col-lg-12 mb-3">
                            <h5 class="mb-2 pl-4">SEMESTER VIII</h5>
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan">NO </div>
                                        <div class="kode">Kode MK</div>
                                        <div class="mata-kuliah">Mata Kuliah</div>
                                        <div class="jam">Jam</div>
                                        <div class="sks">SKS</div>
                                        <div class="rps">RPS</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">01</div>
                                        <div class="kode">TI2094
                                        </div>
                                        <div class="mata-kuliah"> Kewirausahaan dan Etika Profesi

                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1MBi2x3FnIaiFyUqOtCgy_TmB1f2nhCR-/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">02</div>
                                        <div class="kode">TI1082
                                        </div>
                                        <div class="mata-kuliah"> Managemen Proyek TI
                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps"><a
                                                href="https://drive.google.com/file/d/1M4QPvHrjiA4Rlt24NVbOAHyU54hZVAuP/view?usp=drive_link"
                                                target="_blank">Unduh</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">03</div>
                                        <div class="kode">TI2060
                                        </div>
                                        <div class="mata-kuliah"> Etika Profesi
                                        </div>
                                        <div class="jam">2</div>
                                        <div class="sks">2</div>
                                        <div class="rps">-</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan">04</div>
                                        <div class="kode">TI2083
                                        </div>
                                        <div class="mata-kuliah"> Proyek Akhir Tahap 2/TGA

                                        </div>
                                        <div class="jam">20</div>
                                        <div class="sks">6</div>
                                        <div class="rps">-</a>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan text-dark">#</div>
                                        <div class="kode text-dark">TOTAL</div>
                                        <div class="mata-kuliah"></div>
                                        <div class="jam text-dark">26</div>
                                        <div class="sks text-dark">12</div>
                                        <div class="rps text-dark">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
