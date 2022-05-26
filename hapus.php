<?php
include 'connection.php';

    $query_hapus = "DELETE FROM databuku WHERE judul_buku = '$_GET[judul_buku]'";
    $hapus = pg_query($connection, $query_hapus);

    if($hapus){
        header("location:index.php");
    }else{
        header("location:index.php");
    }
?>