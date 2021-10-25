<?php

include ("config.php") ;

//kalau tudak ada id di query string
if( !isset($_GET['id'])) {
    header('location: list.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id='$id'";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

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
    <title> List siswa diubah </title>
</head>

<body>
    <header> 
        <h3> Data siswa <h/3>
    </header>

    <form action="edits.php" method="POST">
        <fieldset>

            <input type="hidden" name= "id" value ="<?php echo 
            $siswa['id'] ?>" />

        <P>
            <label for="nama">Nama:</label>
             <input type="text" name="nama" 
             placeholder= "isikan nama lengkap" value=
             "<?php echo $siswa['nama'] ?>" />
        </P>
        <p>
            <label for="kelas">Kelas: </label>
            <input type="text" name="kelas" 
            placeholder="isikan kelas" value="<?php echo $siswa['kelas'] ?>" />
        </p>
        <p>
            <label for="emai">Email: </label>
            <input type="text" name="email" 
            placeholder="isikan email" value="<?php echo $siswa['email'] ?>" />
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>

    </form>
    </bady>
</html>