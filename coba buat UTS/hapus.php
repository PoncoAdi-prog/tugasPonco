<?php
include("config.php");

if(isset($_GET['id_mhs'])) {

    //ambil id dari query string
    $id_mhs =$_GET['id_mhs'];

    // buat query hapus
    $sql = "DELETE FROM tmhs WHERE id_mhs='$id_mhs'";
    $query = mysqli_query ($db, $sql);

    //apakah query hapus berhasil?
    if( $query ){
        header ('Location: list.php');    
    } else {
        die ("Gagal menghapus");
    }

} else {
    die ("Akses dilaranhg...."); 
}

?>
    