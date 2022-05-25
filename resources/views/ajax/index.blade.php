<html>
    <head>
        <title>Aplikasi Mahasiswa</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- <script src="js/jquery-migrate-1.4.1.min"></script> -->
    </head>
    <body>
        <h1>Aplikasi Mahasiswa</h1>

        NIM: <input id="nim"><br>
        NAMA: <input id="nama"><br>
        KELAS: <input id="kelas"><br>
        <button id="simpan">Simpan</button><br><br>

        <table border="1">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                </tr>
            </thead>
            <tbody id="isi"></tbody>
        </table>

<script>
function refreshTabel() {
    $.ajax({
            url: "/api/get-all-data",
            type: "GET",
            cache: false,
            success: function(resp) {
                // console.log(resp);
                // result = JSON.parse(resp);
                result = resp;
                resultTag = "";
                for(i=0; i<result.length; i++) {
                    resultTag += "<tr>" +
                        "<td>" + result[i].nim + "</td>" +
                        "<td>" + result[i].nama + "</td>" +
                        "<td>" + result[i].kelas + "</td>" +
                        '<td><button id="hapus" nim="' + result[i].nim + '">Hapus</button></td>' +
                        '<td><button id="edit" nim="' + result[i].nim + '">Ubah</button></td>' +
                        "</tr>";
                }
                $("#isi").html(resultTag);
            }
        });
}

    $(document).ready(function() {
        refreshTabel();
    });

    $(document).on('click', '#simpan', function() {
        mhs = new Object();
        mhs.nim = $("#nim").val();
        mhs.nama = $("#nama").val();
        mhs.kelas = $("#kelas").val();

        $.post("/api/simpan", mhs, function(resp) {
            // console.log(resp);
            if(resp == "ok") refreshTabel();
        });
    });

    $(document).on('click', "#hapus", function() {
        var nim = $(this).attr("nim");
        console.log(nim);
        var param = new Object();
        param.nim = nim;
        $.post("../backend/hapus.php", JSON.stringify(param), 
          function(resp) {
            var obj = JSON.parse(resp);
            if(obj.status == "success") {
                alert("Data berhasil terhapus");
                window.location.href="index.html";
            } else {
                alert("Data gagal terhapus");
            }
        });
    });

    $(document).on('click', '#edit', function() {
        var nim = $(this).attr('nim');
        window.location.href = "./ubah.html?nim=" + nim;
    });
</script>        
    </body>
</html>