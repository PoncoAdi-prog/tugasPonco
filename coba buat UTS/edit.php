<?php

include ("config.php") ;

//kalau tudak ada id_mhs di query string
if( !isset($_GET['id_mhs'])) {
    header('location: list.php');
}

// ambil id dari query string
$id_mhs = $_GET['id_mhs'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tmhs WHERE id_mhs='$id_mhs'";
$query = mysqli_query($db, $sql);
$tmhs = mysqli_fetch_assoc($query);

// jika data yang di edit tidak ditemukan
if (mysqli_num_rows($query) < 1 ){
    die ("data tidk ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> List mahasiswa diubah </title>
</head>

<body>
    <header> 
        <h3> Data Mahasiswa <h/3>
    </header>

    <form action="edits.php" method="POST">
        <fieldset>

            <input type="hidden" name= "id_mhs" value ="<?php echo 
            $tmhs['id_mhs'] ?>" />

        <P>
            <label for="nim">Nim:</label>
             <input type="text" name="nim" 
             placeholder= "isikan nim lengkap" value="<?php echo $tmhs['nim'] ?>" />
        </P>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" 
            placeholder="isikan nama" value="<?php echo $tmhs['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" 
            placeholder="isikan alamat" value="<?php echo $tmhs['alamat'] ?>" />
        </p>
        <p>
            <label for="prodi">Prodi: </label>
            <input type="text" name="prodi" 
            placeholder="isikan prodi" value="<?php echo $tmhs['prodi'] ?>" />
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>

    </form>
    </bady>
</html>