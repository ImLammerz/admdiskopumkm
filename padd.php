<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $namars = $_POST['namars'];
    $alamatrs = $_POST['alamatrs'];
    $telponrs = $_POST['telponrs'];
    $maprs = $_POST['maprs'];
    $gmaprs = $_POST['gmaprs'];
    
    // buat query
    $sql = "INSERT INTO Rsakit (namars, alamatrs, telponrs, maprs, gmaprs) VALUE ('$namars', '$alamatrs', '$telponrs', '$maprs', '$gmaprs')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>