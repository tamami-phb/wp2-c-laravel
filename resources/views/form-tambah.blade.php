<h3>Formulir Tambah Data</h3>

<form action="/tambah" method="POST">
    @csrf
    <label for="nim">NIM</label>
    <input type="text" id="nim" name="nim"><br>

    <label for="nama">NAMA</label>
    <input type="text" id="nama" name="nama"><br>

    <label for="kelas">KELAS</label>
    <input type="text" id="kelas" name="kelas"><br>

    <input type="submit" value="Simpan">
</form>