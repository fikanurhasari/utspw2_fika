<?php
    include 'connection.php';

    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $query_tambah = "INSERT INTO databuku (judul_buku,penulis,penerbit) VALUES ('$judul_buku','$penulis','$penerbit')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }

?>