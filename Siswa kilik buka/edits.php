<?php 

include ("config.php") ;

//cek apakah tombol daftar sudah diklik atau belim>
if(isset($_POST['simpan'])){
    
    //ambil data dari formuli
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];

    //buat query update
    $sql = "UPDATE siswa SET nama='$nama',
    kelas='$kelas', email='$email' WHERE id=$id"; 
    $query = mysqli_query($db, $sql);

    // apakah query simpen berhasil
    if( $query ){
        //kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list.php');    
    } else {
        //kalau gagal atampilkan pesan
        die('Gagal menyimpan perubahan');
    }
    
} else {
    die ("Akses dilaranhg...."); 
}

?>