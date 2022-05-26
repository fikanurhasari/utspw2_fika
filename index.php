<?php

    include 'connection.php';
    $tampil = pg_query("SELECT * FROM databuku");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <nav class="navbar navbar-light bg-secondary">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="buku.png" alt="" width="55" height="35" class="d-inline-block align-text-top">
      <class style="font-size: 1rem; color: #FFFFFF"><b>TOKO BUKU FIKA</b></class>
      </a>
  </div>
</nav>
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body shadow" style="margin-auto;">
                <h3 class="text-center"><b>Daftar Data Buku</b></h3>
                <h3 class="text-center"><img src="buku.png" width="230" height="150"></h3>
                <a href="tambah.php" class="btn btn-primary" >Tambah</a><h1> </h1>
                <table class="table table-hover table-secondary">
                    <thead>
                        <tr>
                            <td><b>No</b></td>
                            <td><b>Judul Buku</b></td>
                            <td><b>Penulis</b></td>
                            <td><b>Penerbit</b></td>
                            <td><b>Aksi</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['judul_buku'];?></td>
                            <td><?= $data['penulis'];?></td>
                            <td><?= $data['penerbit'];?></td>
                            <td>
                                <a href="edit.php?judul_buku=<?= $data['judul_buku']; ?>" class="btn btn-info">Edit</a>
                                <a href="hapus.php?judul_buku=<?= $data['judul_buku']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>