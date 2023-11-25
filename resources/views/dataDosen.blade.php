@extends('layouts.app')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white text-uppercase">
                        Data Dosen
                    </h1>
                    <p class="text-white link-nav"> Program Studi <span class="lnr lnr-arrow-right"></span><a
                            href="{{ route('static.dataDosen') }}">Data Dosen</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12s posts-list" style="max-width: 100%">
                    <div class="single-post row">
                        <div class="col-lg-12 col-md-12">
                            <h3 class="mt-20 mb-20">DATA DOSEN</h3>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <p> Data Dosen Program Studi Teknik Informatika</p>
                        </div>
                        <div class="section-top-border col-lg-12">
                            <div class="progress-table-wrap">
                                <div class="progress-table full-width">
                                    <div class="table-head">
                                        <div class="urutan2">NO </div>
                                        <div class="nama">Nama Dosen</div>
                                        <div class="nidn">NIDN/NIDK</div>
                                        <div class="magister">Magister</div>
                                        <div class="keahlian">Bidang Keahlian</div>
                                        <div class="jabatan">Jabatan Akademisi</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">1</div>
                                        <div class="nama">Amirullah</div>
                                        <div class="nidn">0028088906</div>
                                        <div class="magister">Teknik Informatika ITS</div>
                                        <div class="keahlian">Pemrograman Web dan Jaringan Komputer</div>
                                        <div class="jabatan">Asisten Ahli</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">2</div>
                                        <div class="nama">Azhar</div>
                                        <div class="nidn">0080086404</div>
                                        <div class="magister">ITB</div>
                                        <div class="keahlian">Teknik Informatika</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">3</div>
                                        <div class="nama">Hendrawati</div>
                                        <div class="nidn">0026027006</div>
                                        <div class="magister">ITB</div>
                                        <div class="keahlian">Teknik Informatika</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">4</div>
                                        <div class="nama">Huzaeni</div>
                                        <div class="nidn">0001067002</div>
                                        <div class="magister">UKM</div>
                                        <div class="keahlian">Basis Data dan Sistem Informasi</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">5</div>
                                        <div class="nama">Muhammad Khadafi</div>
                                        <div class="nidn">0018077503</div>
                                        <div class="magister">USK</div>
                                        <div class="keahlian">Teknik Informatika</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">6</div>
                                        <div class="nama">Mahdi</div>
                                        <div class="nidn">0002087004</div>
                                        <div class="magister">UGM</div>
                                        <div class="keahlian">Ilmu Komputer</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">7</div>
                                        <div class="nama">Muhammad Arhami</div>
                                        <div class="nidn">0029107402</div>
                                        <div class="magister">UGM</div>
                                        <div class="keahlian">Sistem Cerdas</div>
                                        <div class="jabatan">Lektor Kepala</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">8</div>
                                        <div class="nama">Muhammad Reza Zulman</div>
                                        <div class="nidn">0001059205</div>
                                        <div class="magister">National Teipei University Of Technology</div>
                                        <div class="keahlian">Software Engineering dan Distributed System</div>
                                        <div class="jabatan">Asisten Ahli</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">9</div>
                                        <div class="nama">Muhammad Rizka</div>
                                        <div class="nidn">0009108802</div>
                                        <div class="magister">Teknik Informatika ITS</div>
                                        <div class="keahlian">Software Agent dan Jaringan Komputer</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">10</div>
                                        <div class="nama">Mulyadi</div>
                                        <div class="nidn">0023077306</div>
                                        <div class="magister">UGM</div>
                                        <div class="keahlian">Pengolahan Citra dan GIS</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">11</div>
                                        <div class="nama">Musta'inul Abdi</div>
                                        <div class="nidn">0730109102</div>
                                        <div class="magister">Teknik Informatika ITS</div>
                                        <div class="keahlian">Kecerdasa Buatan dan Software Engeneering</div>
                                        <div class="jabatan">Asisten Ahli</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">12</div>
                                        <div class="nama">Radhiyatamm Ardhiyyah</div>
                                        <div class="nidn">0026089202</div>
                                        <div class="magister">Yuan Ze University</div>
                                        <div class="keahlian">Software Engineering</div>
                                        <div class="jabatan">Asisten Ahli</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">13</div>
                                        <div class="nama">Rahmad Hidayat</div>
                                        <div class="nidn">0120048303</div>
                                        <div class="magister">UGM</div>
                                        <div class="keahlian">Computer Vision, Mechine Learning</div>
                                        <div class="jabatan">Asisten Ahli</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">14</div>
                                        <div class="nama">Salahuddin</div>
                                        <div class="nidn">0024047404</div>
                                        <div class="magister">UGM</div>
                                        <div class="keahlian">Rekayasa Perangkat Lunak</div>
                                        <div class="jabatan">Lektor</div>
                                    </div>
                                    <div class="table-row">
                                        <div class="urutan2">15</div>
                                        <div class="nama">Zulfan Khairil Simbolon</div>
                                        <div class="nidn">0002096906</div>
                                        <div class="magister">UGM</div>
                                        <div class="keahlian">Sistem Cerdas</div>
                                        <div class="jabatan">Lektor Kepala</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
