<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
</head>
<body>

    <?php 
        include "konek.php";
        include "navbar.html";

        $result = mysqli_query($conn, "SELECT * FROM pelanggan");
    ?>
    
    <br>
    <br>
    <br>


    <div style="width: 90%; margin: auto;">
        <h4>Daftar Pelanggan :</h4>

        <a class="btn btn-warning" href="tambahpelanggan.php">+</a>

        <br>
        <br>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>
                                    
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= $row['Nama'] ?></td>
                <td style="max-width: 150px;"><?= $row['Alamat'] ?></td>
                <td><?= $row['Email'] ?></td>
                <td>+62 <?= $row['Telepon'] ?></td>
                <td><a href="editpelanggan.php?ID=<?= $row['ID']; ?>" class="btn btn-warning">Edit</a></td>
            </tr>

            <?php } ?>
        </table>
    </div>
</body>
</html>