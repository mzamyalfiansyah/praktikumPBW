<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h2>Belanja Alat Tulis Mahasiswa</h2>

    <form action="proses.php" method="post">

        <label for="nama">Nama :</label> <br>
        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required> <br><br>

        <label for="nim">NIM :</label> <br>
        <input type="number" name="nim" id="nim" placeholder="Masukkan NIM" required> <br><br>

        <label for="email">Email :</label> <br>
        <input type="email" name="email" id="email" placeholder="Masukkan Email" required> <br><br>

        <div class="layanan">
            <label for="Reguler" required>Pilih Layanan :</label> <br>
            <input type="radio" name="layanan" value="Reguler" > Reguler <br>
            <input type="radio" name="layanan" value="Prioritas" > Prioritas <br>
        </div>


        <br>

        <label for="barang" required>Pilih Barang :</label> <br>
        <input type="checkbox" name="barang" value="Pensil" > Pensil <br>
        <input type="checkbox" name="barang" value="Buku" > Buku <br>
        <input type="checkbox" name="barang" value="Penggaris" > Penggaris <br>

        <br>

        <button>Kirim</button>
    </form>

</body>
</html>