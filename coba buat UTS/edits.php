<?php 

include ("config.php") ;

//cek apakah tombol daftar sudah diklik atau belim>
if(isset($_POST['simpan'])){
    
    //ambil data dari formuli
    $id_mhs = $_POST['id_mhs'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];


    //buat query update
    $sql = "UPDATE tmhs SET nim='$nim',
    nama='$nama', alamat='$alamat', prodi='$prodi' WHERE id_mhs=$id_mhs"; 
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