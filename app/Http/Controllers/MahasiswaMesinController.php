<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaMesinController extends Controller
{
    public function index()
    {
        $data_mahasiswa2 = \App\Mahasiswa::all();
        return view('mahasiswa_mesin.index',['data_mahasiswa2' => $data_mahasiswa2]);
    }
}
