<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

    public function getAll() {
        $data = Mahasiswa::all();
        return view('list-mahasiswa', [ 'data' => $data ]);
    }

}
