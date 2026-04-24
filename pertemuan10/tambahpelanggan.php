<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
</head>
<body>
    <?php 
        include "konek.php";
        include "navbar.html";
    ?>

    <br>
    <br>
    <br>

    <div style="width: 90%; margin: auto;">
        <h4>Tambahkan pelanggan baru</h4>

        <form action="prosestambahpelanggan.php" method="post" style="width: 50%;">

            <label for="Nama">Masukkan Nama :</label>
            <input class="form-control" type="text" name="Nama" id="Nama" placeholder="Masukkan Nama">
            <br>

            <p>Masukkan Alamat :</p>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Masukkan alamat" name="Alamat" id="Alamat" style="height: 100px"></textarea>
                <label for="Alamat">Masukkan Alamat :</label>

            </div>

            <br>

            <label for="Email">Masukkan Email</label>
            <input class="form-control" type="email" name="Email" id="Email" placeholder="contoh@gmail.com">
            
            <br>

            <label for="Telepon">Masukkan Nomor Telepon :</label>
            <input class="form-control" type="number" name="Telepon" id="Telepon">

            <br>

            <button class="btn btn-warning" type="submit">Simpan</button>
        </form>

    </div>
</body>
</html>