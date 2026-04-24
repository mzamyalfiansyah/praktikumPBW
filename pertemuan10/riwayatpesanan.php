<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
</head>
    <body>
        
        <?php 
            include "konek.php";
            include "navbar.html";

            $result = mysqli_query($conn, "SELECT 
                                                p.ID AS ID_Pesanan,
                                                p.Tanggal_Pesanan,
                                                p.Pelanggan_ID,
                                                b.Judul,
                                                dp.Kuantitas,
                                                dp.Buku_ID,
                                                dp.Harga_Per_Satuan,
                                                (dp.Kuantitas * dp.Harga_Per_Satuan) AS Subtotal,
                                                p.Total_Harga
                                            FROM pesanan p
                                            JOIN detail_pesanan dp ON p.ID = dp.Pesanan_ID
                                            JOIN buku b ON dp.Buku_ID = b.ID;");
          
        ?>

        <br>
        <br>
        <br>

        <div class="container">
            <h4>Riwayat Pemesanan Buku</h4>

            <table class="table table-striped table-hover">
                <tr>
                    <th>ID Pesanan</th>
                    <th>Tanggal</th>
                    <th>ID Pelanggan</th>
                    <th>ID Buku</th>
                    <th>Kuantitas</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>

                </tr>
                                        
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <tr>
                    <td><?= $row['ID_Pesanan'] ?></td>
                    <td><?= $row['Tanggal_Pesanan'] ?></td>
                    <td><?= $row['Pelanggan_ID'] ?></td>
                    <td><?= $row['Buku_ID'] ?></td>
                    <td><?= $row['Kuantitas'] ?></td>
                    <td>Rp. <?= $row['Harga_Per_Satuan'] ?></td>
                    <td>Rp. <?= $row['Total_Harga'] ?></td>

                </tr>

                <?php } ?>
            </table>

        </div>

    </body>
</html>