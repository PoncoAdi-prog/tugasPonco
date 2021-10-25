<?php include ("config.php") ; ?>

<!DOCTYPE html >
<html>
<head>
    <title> List Siswa </title>
</head>

<body>
    <header>
        <h3> Siswa yang sudah mendaftar </h3>
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
            <th style="width : 20%"> kelas </th>
            <th style="width : 10%"> email </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $no=1;
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($db, $sql);

        while ($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";

            echo "<td style='width : 10%'>". $no ."</td>";
            echo "<td style='width : 25%'>". $siswa['nama']."</td>";
            echo "<td style='width : 20%'>". $siswa['kelas']."</td>";
            echo "<td style='width : 20%'>". $siswa['email']."</td>";
            echo "<td>";
            echo "<a href = 'edit.php?id=".$siswa['id']."'> Edit / </a> ";
            echo "<a href = 'hapus.php?id=".$siswa['id']."'> Hapus </a>";
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