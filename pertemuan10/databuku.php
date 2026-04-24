<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
    <body>
    
        <?php

            include "konek.php";
            include "navbar.html";

            $result = mysqli_query($conn, "SELECT * FROM buku WHERE Status = 'tersedia'");
        ?>

        <br>
        <br>
        <br>
        <br>


        <div style="width: 90%; margin: auto;">
            <h4>Daftar Buku</h4>
            <p>Berikut adalah daftar buku yang tersedia</p>
            <div class="cari">
                <form action="prosescaribuku.php" method="post" style="width: 80%; display: flex; gap: 10px;">
                    <input class="form-control" type="text" name="cari" placeholder="Cari buku berdasarkan judul">
                    <button class="btn btn-warning">Cari</button>
                </form>
            </div>
            
        <br>


            <table class="table table-striped table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>

                    </tr>

                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <input type="hidden" name="ID" value="<?= $row['ID'] ?>">

                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?= $row['Judul']; ?></td>
                        <td><?= $row['Penulis']; ?></td>
                        <td><?= $row['Tahun_Terbit']; ?></td>
                        <td> Rp. <?= $row['Harga']; ?></td>
                        <td><?= $row['stok']; ?></td>
                        <td> <a href="editbuku.php?ID=<?= $row['ID']; ?>" class="btn btn-warning">Edit</a>
                             <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hapus
                            </button>
                        </td>
                        

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Perhatian !!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Yakin ingin menghapus ?
                        </div>
                        <div class="modal-footer">
                             <a href="proseshapusbuku.php?ID=<?= $row['ID']; ?>" class="btn btn-danger">Hapus</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    <?php } ?>
                </table>
        

                        

                    
            

        </div>

                


        


    </body>
</html>