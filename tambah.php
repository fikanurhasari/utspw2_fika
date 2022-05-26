<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah</title>
</head>
<body>
    <div class="container">
        <div class="card mt-3">
        <form method="post" action="tambah_proses.php" >
            <div class="card-body shadow" style="margin:auto;" >
                <h3 class="text-center"><b>Tambah Data</b></h3>
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku"  name="judul_buku" placeholder="masukan judul_buku" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" placeholder="masukan penulis" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="masukan penerbit" required>
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