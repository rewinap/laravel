<?php

namespace App\Http\Controllers;

use App\Models\kuliah;
use App\Models\Mahasiswa;
// use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KuliahController extends Controller
{
    public function viewMateri() {
        $data = array(
            'topik' => 'Laravel'
        );
        return view('kuliah', $data);
    }

    public function viewKuliah() {
        $data = kuliah::all();
        return view('kuliah.index', ['data' => $data]);
    }
}
