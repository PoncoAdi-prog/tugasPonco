<?php 

include("config.php");

//cek apakah tombol daftar sudah diklik atau belum>
if(isset($_POST['daftar'])){
    
    //ambil data dari formuli
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];

    //buat query
    $sql = "INSERT INTO tmhs (nim, nama, alamat, prodi) VALUE ('$nim', '$nama', '$alamat', '$prodi')";
    $query = mysqli_query($db, $sql);

    // apakah query simpen berhasil
    if ( $query ) {
        //kalau berhasil alihkan ke halam index.php dgn status=sukses
        header('location : list.php');    
    } else {
        //kalau gagal alihkan ke nhalaman index.php dgn status gagal
        die('Gagal menyimpan perubahan');

    }
} else {
    die("Akses dilarang...."); 
}

?>