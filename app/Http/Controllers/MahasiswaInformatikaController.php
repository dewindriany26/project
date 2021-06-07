<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaInformatikaController extends Controller
{
    public function index()
    {
        $data_mahasiswa1 = \App\Mahasiswa::all();
        return view('mahasiswa_informatika.index',['data_mahasiswa1'=> $data_mahasiswa1]);
    }
}
