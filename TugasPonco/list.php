<?php include ("config.php") ; ?>

<!DOCTYPE html >
<html>
<head>
    <title> Data Mahasiswa </title>
</head>

<body>
    <header>
        <h3> Mahasiswa yang sudah mendaftar </h3>
    </header>

    <nav>
        <a href= "daftar.php" > [+] Tambah Baru </a>    
    </nav>

    <br>

    <table border ="1"> 
    <thead>
        <tr>
            <th style="width : 10%"> No </th>
            <th style="width : 25%"> Nama </th>
            <th style="width : 50%"> jurusan </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no=1; 
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);

        while ($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";

            echo "<td style='width : 10%'>". $no ."</td>";
            echo "<td style='width : 25%'>". $siswa['nama']."</td>";
            echo "<td style='width : 50%'>". $siswa['jurusan']."</td>";
            echo "<td>";
            echo "<a href = 'edit.php?id=".$siswa['id']."'>edit </a> ";
            echo "<a href = 'hapus.php?id=".$siswa['id']."'>hapus </a>";
            echo "</td>";
            $no++;
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p> Total: <?php echo mysqli_num_rows($query) ?> </p>

    </body>
</html>