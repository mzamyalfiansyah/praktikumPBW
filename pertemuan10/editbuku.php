<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
    <body>

      

        <?php 
            include "navbar.html"; 
            include "konek.php";
            
        ?>

        <br>
        <br>
        <br>

        <div style="width: 50%; margin-left: 5%;">

            <h2>Edit Buku</h2>
            <?php

                include "koneksi.php";

                $ID = $_GET["ID"];

                $query = mysqli_query($conn, "SELECT * FROM buku WHERE ID = '$ID'");
                $data = mysqli_fetch_assoc($query);
              

                $value = date('Y-m-d', strtotime($user['Tahun_Terbit']));
            ?>


            <form action="proseseditbuku.php" method="post">

                <input type="hidden" name="ID" value="<?= $data['ID']?>">

                <p>Judul Buku :</p>
                <input class="form-control" type="text" name="judul" value="<?= $data['Judul']; ?>">

                <p>Penulis</p>
                <input class="form-control" type="text" name="penulis" value="<?= $data['Penulis']; ?>">

                <p>Tahun Terbit :</p>
                <input class="form-control" type="date" name="tahunterbit" value="<?= $value; ?>">

                <p>Harga :</p>
                <input class="form-control" type="number" name="harga" value="<?= $data['Harga']; ?>">

                <p>Stok :</p>
                <input class="form-control" type="number" name="stok" value="<?= $data['stok']; ?>">

                <br><br>

                <button type="submit" class="btn btn-warning">Simpan</button>
                <a class="btn btn-danger" href="databuku.php">Batal</a>

            </form>

        
        </div>





    </body>
</html>