<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $namars = $_POST['namars'];
    $alamatrs = $_POST['alamatrs'];
    $telponrs = $_POST['telponrs'];
    $maprs = $_POST['maprs'];
    $gmaprs = $_POST['gmaprs'];


    // buat query update
    $sql = "UPDATE Rsakit SET namars='$namars', alamatrs='$alamatrs', telponrs='$telponrs', maprs='$maprs', gmaprs='$gmaprs' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>