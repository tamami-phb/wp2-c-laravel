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
        // $mhs->save();
        Mahasiswa::upsert([ $mhs ], ['nim']);
        return "ok";
    }

    public function hapus($nim) {
        $mhs = Mahasiswa::where('nim', $nim)->first();
        $mhs->delete();
        return "ok";
    }

    public function getData($nim) {
        return Mahasiswa::where('nim', $nim)->first();
    }
}
