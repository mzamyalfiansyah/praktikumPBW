    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesan Buku</title>
    </head>
    <body>

        <?php 
            include "konek.php";
            include "navbar.html";

            $data = mysqli_query($conn, "SELECT * FROM buku WHERE status = 'tersedia'");

            $pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan");
            
        ?>




        <br>
        <br>
        <br>

        <div style="width: 90%; margin: auto; height: 50%;" >

            <h4>Buat Pesanan</h4>

            <br>



            <form action="proses_pesanan.php" method="post">
                
                

                                <select class="form-select" name="IDBuku" aria-label="Default select example" style="width: 50%;">
                                    <option selected>Pilih Buku</option>
                                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                                        <option value="<?= $row['ID'] ?>"><?= $row['Judul'] ?></option>
                                    <?php } ?>
                                </select>
                      

                        <br>


                        <p>Pilih Pelanggan :</p>

                        <select class="form-select" name="IDPelanggan" aria-label="Default select example" style="width: 50%;">
                            <option selected>Pilih Pelanggan</option>
                            <?php while ($row = mysqli_fetch_assoc($pelanggan)) { ?>
                                <option value="<?= $row['ID'] ?>"><?= $row['Nama'] ?></option>
                            <?php } ?>
                        </select>
                        <?php 
                            $pelanggan = mysqli_fetch_assoc($pelanggan);
                            $buku = mysqli_fetch_assoc($data);
                        ?>
                        <!-- <input type="hidden" name="ID_Pelanggan" id="ID_Pelanggan" value="<?= $pelanggan['ID'] ?>">
                        <input type="hidden" name="ID_Buku" id="ID_Buku" value="<?= $buku['ID'] ?>"> -->
                        

                        <br>

                        <label for="Kuantitas">Jumlah :</label>
                        <input class="form-control" type="number" name="Kuantitas" style="width: 10%;" required>
                    
                        <br>
                        <br>

                        <button class="btn btn-warning" type="submit">Pesan</button>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br><br><br><br><br><br><br><br><br><br>



            </form>
            

    
        </div>
        
    </body>
    </html>