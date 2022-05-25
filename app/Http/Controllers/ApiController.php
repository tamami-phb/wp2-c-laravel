<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class ApiController extends Controller
{
    public function getAll() {
        return Mahasiswa::all();
    }

    public function simpan(Request $req) {
        $mhs = new Mahasiswa;
        $mhs->nim = $req->input('nim');
        $mhs->nama = $req->input('nama');
        $mhs->kelas = $req->input('kelas');
        $mhs->save();
        return "ok";
    }
}
