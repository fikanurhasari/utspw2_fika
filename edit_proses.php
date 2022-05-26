<?php

    include('connection.php');
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit']; 

        $query_edit = "UPDATE databuku SET judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit' WHERE judul_buku = '$judul_buku' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$id");
        }
?>