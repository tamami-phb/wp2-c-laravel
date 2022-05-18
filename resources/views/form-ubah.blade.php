<h3>Formulir Ubah Data</h3>

<form action="/ubah" method="POST">
    @csrf
    <label for="nim">NIM</label>
    <input type="text" id="nim" name="nim" readonly value="{{ $mhs->nim }}"><br>

    <label for="nama">NAMA</label>
    <input type="text" id="nama" name="nama" value="{{ $mhs->nama }}"><br>

    <label for="kelas">KELAS</label>
    <input type="text" id="kelas" name="kelas" value="{{ $mhs->kelas }}"><br>

    <input type="submit" value="Simpan">
</form>