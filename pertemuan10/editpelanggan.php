<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
</head>
    <body>

        <?php 
            include "konek.php";
            include "navbar.html";

            $ID = $_GET["ID"];

            $pelanggan = mysqli_query($conn,"SELECT * FROM pelanggan WHERE ID = '$ID'");
            $pelanggan = mysqli_fetch_array($pelanggan);
        ?>

        <br>
        <br>


        <div class="container">

            <form action="proseseditpelanggan.php" method="post" style="width: 50%;">

                <input type="hidden" name="ID" value="<?= $pelanggan['ID'] ?>">

                <label for="Nama">Edit Nama :</label>
                <input class="form-control" type="text" name="Nama" id="Nama" value="<?= $pelanggan['Nama'] ?>">
                
                <br>

                <label for="Alamat">Edit Alamat :</label>
                <input class="form-control" type="text" name="Alamat" id="Alamat" value="<?= $pelanggan['Alamat'] ?>">

                <br>

                <label for="Email">Edit Email :</label>
                <input class="form-control" type="email" name="Email" id="Email" value="<?= $pelanggan['Email'] ?>">

                <br>

                <label for="Telepon">Edit Nomor Telepon :</label>
                <input class="form-control" type="number" name="Telepon" id="Telepon" value="<?= $pelanggan['Telepon'] ?>">

                <br>
                <br>
                
                    <button class="btn btn-warning">Simpan</button>
                    <a class="btn btn-danger" href="daftarpelanggan.php">Batal</a>

            </form>
        </div>


        
    </body>
</html>