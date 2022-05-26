<?php
    include 'connection.php';
    $query = "SELECT * FROM databuku WHERE judul_buku = '$_GET[judul_buku]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
        $judul_buku = $data['judul_buku'];
        $penulis = $data['penulis'];
        $penerbit = $data['penerbit'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<div class="container">
    <div class="card shadow mt-3" >
    <form method="post" action="edit_proses.php" >
        <div class="card-body" style="margin: auto;">
         <h3 class="text-center"><b>Edit Data</b></h3>
        <div class="form-group">
                
            
            <div class="form-group">
                <label class="mt-2mb-2" for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" id="judul_buku" value="<?php echo $judul_buku;?>"  required>
            </div>
            <div class="form-group">
                <label class="mt-5-mb-5" for="penulis">Penulis</label>
                <input type="text" class="form-control" name="penulis" id="penulis" placeholder="masukan penulis"value ="<?php echo $penulis; ?>" required>
            </div>
            <div class="form-group">
                <label class="mt-5-mb-5" for="penerbit">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="masukan penerbit"value ="<?php echo $penerbit; ?>" required>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
        </div>
        </form>
    </div>
       
    </div>
</body>
</html>