<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>

    <?php
        
        include "navbar.html";
    ?>
    <br>
    <br>
    <br>
    

    <div style="width: 50%; margin-left: 5%;">

    <h2>Tambah Buku</h2>

        <form action="prosestambahbuku.php" method="post">
            
            <p>Judul Buku :</p>
            <input class="form-control" type="text" name="judul" required>

            <p>Penulis</p>
            <input class="form-control" type="text" name="penulis" required>

            <p>Tahun Terbit :</p>
            <input class="form-control" type="date" name="tahunterbit" required>

            <p>Harga :</p>
            <input class="form-control" type="number" name="harga" required>

            <p>Stok :</p>
            <input class="form-control" type="number" name="stok" required>

            <br>
            <br>

            <button type="submit" class="btn btn-warning">Tambah</button>

        </form>

        <br>
        

    </div>
</body>
</html>