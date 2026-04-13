<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $barang = $_POST['barang'];

        if ($barang == "Pensil") {
            $total = 2000 * (0.5/100);
        } else if ($barang == "Buku") {
            $total = 5000 * (0.5/100);
        } else if ($barang == "Penggaris") {
            $total = 3000 * (0.5/100);
        }
    ?>



    <h2>Data Pembelian Alat Tulis Mahasiswa</h2>

    <p>Nama : <?php echo $nama ?> </p>
    <p>NIM : <?php echo $nim ?> </p>
    <p>Email : <?php echo $email ?> </p>
    <p>Barang yang dibeli : <?php echo $barang ?> </p>
    <p>Total Harga : <?php echo $total ?>.000 </p>
</body>
</html>