<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticController extends Controller
{
    /**
     * Display a Index Of Web.
     */

    public function index()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }

    public function dataMahasiswa()
    {
        return view('dataMahasiswa');
    }

    public function strukturPimpinan()
    {
        return view('strukturPimpinan');
    }

    // public function kuesionerMahasiswa()
    // {
    //     return view('kuesionerMahasiswa');
    // }

    // public function kuesionerAlumni()
    // {
    //     return view('kuesionerAlumni');
    // }

    public function kuesionerTatakelola()
    {
        return view('layananTatakelola');
    }
    public function hasilkuesionerTatakelola()
    {
        return view('hasilkuesionerTatakelola');
    }

    public function kuesionerVMTS()
    {
        return view('kuesionerVmts');
    }
    public function hasilkuesionerVMTS()
    {
        return view('hasilkuesionerVmts');
    }

    public function kuesionerSaranaPrasarana()
    {
        return view('kuesionerSarana');
    }
    public function hasilkuesionerSaranaPrasarana()
    {
        return view('hasilkuesionerSarana');
    }

    public function kuesionerMitra()
    {
        return view('kuesionerMitra');
    }
    public function hasilkuesionerMitra()
    {
        return view('hasilkuesionerMitra');
    }

    public function kuesionerKMahasiswa()
    {
        return view('kuesionerKepuasanMahasiswa');
    }
    public function hasilkuesionerKMahasiswa()
    {
        return view('hasilkuesionerKMahasiswa');
    }

    public function dataDosen()
    {
        return view('dataDosen');
    }

    public function laboratorium()
    {
        return view('laboratorium');
    }
    // public function ruangdosen()
    // {
    //     return view('ruangdosen');
    // }

    public function ruang()
    {
        return view('ruang');
    }

    public function general()
    {
        return view('general');
    }

    public function perpustakaan()
    {
        return view('perpustakaan');
    }

    public function pages($param)
    {
        switch ($param) {
            case '1':
                return view('pages.first');
                break;
            case '2':
                return view('pages.second');
                break;
            case '3':
                return view('pages.third');
                break;
            case '4':
                return view('pages.fourth');
                break;
            default:
                abort(404);
                break;
        }
    }

    public function kurikulum()
    {
        return view('kurikulum');
    }

    public function berita()
    {
        return view('berita');
    }
}
