<?php 

include("config.php");

//cek apakah tombol daftar sudah diklik atau belum>
if(isset($_POST['daftar'])){
    
    //ambil data dari formuli
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];

    //buat query
    $sql = "INSERT INTO siswa (nama, kelas, email) VALUE ('$nama', '$kelas', '$email')";
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