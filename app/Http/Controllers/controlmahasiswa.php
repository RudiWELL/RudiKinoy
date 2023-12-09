<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    function home()
    {
        $npm = [123, 124 ,125];
        return view('mahasiswa',compact('npm'));
    }
    function tambah_mahasiswa()
    {
        return 'halo';
    }
}
