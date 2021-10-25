<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa </title>
</head>

<body>
    <header> 
        <h3> Data Siswa Keren <h/3>
    </header>

    <form action= "pendaftaran.php" method= "POST">

        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="test" name="nama" placeholder="isikan nama lengkap" />
            </p> 
            <p>
                <label for="alamat">Kelas: </label>
                <input type="text" name="kelas" placeholder= "isikan kelas" />
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="text" name="email" placeholder= "isikan dengan benar" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="daftar" />
            </p>
        </fieldset>
    </from>
</body>
</html>
