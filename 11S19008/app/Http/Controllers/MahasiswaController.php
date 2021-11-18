<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function getDataMahasiswa() {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa', compact('mahasiswa'));
    }
}
