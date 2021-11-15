<?php include ("config.php") ; ?>

<!DOCTYPE html >
<html>
<head>
    <title> List Mahasiswa </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<div class="container">

    <div class="card-header bg-info  text-white">
    <header>
        <h3> Mahasiswa yang sudah mendaftar </h3>
    </header>
    </div>

    <br>
    <nav>
        <a href= "daftar.php" > [+] Tambah Baru </a>    
    </nav>


    <div class="card mt-3">
     <div class="card-header bg-dark text-white">
       Daftar mahasiswa
        </div>
        <div class="card-body">

        <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th style="width : 3%"> No </th>
            <th style="width : 5%"> nim </th>
            <th style="width : 5%"> nama </th>
            <th style="width : 10%"> alamat </th>
            <th style="width : 10%"> prodi </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>

        <?php 
            $no=1;
        $sql = "SELECT * FROM tmhs";
        $query = mysqli_query($db, $sql);

        while ($tmhs = mysqli_fetch_array($query)) {
            echo "<tr>";

            echo "<td style='width : 3%'>". $no ."</td>";
            echo "<td style='width : 5%'>". $tmhs['nim']."</td>";
            echo "<td style='width : 5%'>". $tmhs['nama']."</td>";
            echo "<td style='width : 5%'>". $tmhs['alamat']."</td>";
            echo "<td style='width : 5%'>". $tmhs['prodi']."</td>";
            echo "<td>";
            echo "<a href = 'edit.php?id=".$tmhs['id_mhs']."'> Edit / </a> ";
            echo "<a href = 'hapus.php?id=".$tmhs['id_mhs']."'> Hapus </a>";
            echo "</td>";
            $no++;
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

    <p> Total: <?php echo mysqli_num_rows($query) ?> </p>
        
        </div> 
    </div>
    <!-- Awal Cad tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>