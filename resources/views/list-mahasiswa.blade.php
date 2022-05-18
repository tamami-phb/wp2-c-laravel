<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>

    <body>
<div class="container">
    <nav class="navbar navbar-dark bg-dark rounded-bottom">
        <div class="container-fluid">
            <h3 class="navbar-brand">Daftar Mahasiswa</h3>
        </div>
    </nav>

    <div class="d-grid gap-2">
        <a href="/form-tambah" class="btn btn-primary mt-3">Tambah</a>
    </div>

<div class="card mt-3">
    <div class="card-body">
<table class="table table-striped">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>OPSI</th>
    </tr>
@forelse($data as $detail)
    <tr>
        <td>{{ $detail->nim }}</td>
        <td>{{ $detail->nama }}</td>
        <td>{{ $detail->kelas }}</td>
        <td>
            <div class="btn-group" role="group">
                <a href="/hapus/{{ $detail->nim }}" class="btn btn-danger">Hapus</a>
                <a href="/form-ubah/{{ $detail->nim }}" class="btn btn-warning">Ubah</a>
            </div>
        </td>
    </tr>
@empty
  <tr>
      <td colspan=3>Data Kosong</td>
  </tr>
@endforelse
</table>
</div></div>
</div>
</body>
</html>