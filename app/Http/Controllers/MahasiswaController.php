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

    public function tambah(Request $req) {
        $mhs = new Mahasiswa;
        $mhs->nim = $req->nim;
        $mhs->nama = $req->nama;
        $mhs->kelas = $req->kelas;
        $mhs->save();
        return $this->getAll();
    }

    public function hapus($id) {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return $this->getAll();
    }

    public function formUbah($nim) {
        $mhs = Mahasiswa::find($nim);

        return view('form-ubah', [ 'mhs' => $mhs ]);
    }

    public function ubah(Request $req) {
        $mhs = Mahasiswa::where('nim', $req->nim)->first();
        $mhs->nama = $req->nama;
        $mhs->kelas = $req->kelas;
        $mhs->save();
        return $this->getAll();
    }

}
