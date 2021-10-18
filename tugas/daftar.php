<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa </title>
</head>

<body>
    <header> 
        <h3> Data Mahasiswa <h/3>
    </header>

    <form action= "pendaftaran.php" method= "POST">

        <fieldset>
            <p>
                <label for="nama">mama: </label>
                <input type="test" name="nama" 
                placeholder="isikan nama lengkap" />
            </p> 
            <p>
                <label for="alamat">Jurusan: </label>
                <input type="text" name="jurusan" 
                placeholder= "isikan jurusan" />
            </p>
            <p>
                <input type="submit" value="Simpan"
                name="daftar" />
            </p>
        </fieldset>
    </from>
</body>
</html>
