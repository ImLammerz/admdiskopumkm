<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
    <header>
        <h3>Add Info Rumah Sakit</h3>
    </header>

    <form action="padd.php" method="POST">

        <fieldset>

        <p>
            <label for="namars">Nama: </label>
            <input type="text" name="namars" placeholder="nama Rsakit" />
        </p>
        <p>
            <label for="alamatrs">Alamat: </label>
            <textarea name="alamatrs"></textarea>
        </p>
         <p>
            <label for="telponrs">Telpon: </label>
            <input type="text" name="telponrs" placeholder="nomor telpon" />
        </p>
        <p>
            <label for="maprs">Maprs: </label>
            <input type="text" name="maprs" placeholder="Maprs" />
        </p>
        <p>
            <label for="gmaprs">gMaprs: </label>
            <input type="text" name="gmaprs" placeholder="gMaprs" />
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>

        </fieldset>

    </form>

    </body>
</html>