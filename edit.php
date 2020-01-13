<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM Rsakit WHERE id=$id";
$query = mysqli_query($db, $sql);
$rs = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Info Rumah Sakit</title>
</head>

<body>
    <header>
        <h3>Edit Informasi Sakit</h3>
    </header>

    <form action="pedit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $rs['id'] ?>" />

        <p>
            <label for="namars">Nama: </label>
            <input type="text" name="namars" placeholder="nama Rsakit" value="<?php echo $rs['namars'] ?>" />
        </p>
        <p>
            <label for="alamatrs">Alamat: </label>
            <textarea name="alamatrs"><?php echo $rs['alamatrs'] ?></textarea>
        </p>
        <p>
            <label for="telponrs">Telpon: </label>
            <textarea name="telponrs"><?php echo $rs['telponrs'] ?></textarea>
        </p>
         <p>
            <label for="maprs">maprs: </label>
            <textarea name="maprs"><?php echo $rs['maprs'] ?></textarea>
        </p>
        <p>
            <label for="gmaprs">gmaprs: </label>
            <textarea name="gmaprs"><?php echo $rs['gmaprs'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>