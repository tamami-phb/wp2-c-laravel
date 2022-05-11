<h3>Daftar Mahasiswa</h3>

<table border=1>
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>KELAS</th>
    </tr>
@forelse($data as $detail)
    <tr>
        <td>{{ $detail->nim }}</td>
        <td>{{ $detail->nama }}</td>
        <td>{{ $detail->kelas }}</td>
    </tr>
@empty
  <tr>
      <td colspan=3>Data Kosong</td>
  </tr>
@endforelse
</table>