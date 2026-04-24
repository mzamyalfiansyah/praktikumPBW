<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Soal nomor 1 (Menentukan jenis kendaraan berdasarkan roda)</h1>

    <form action="" method="post">

        <h2>Tentukan Jumlah Roda :</h2>

        <label for="roda">Masukan Jumlah Roda : </label> <br>
        <input type="number" name="roda" required>

        <br>
        <br>

        <button>Submit</button>

    </form>

    <br>
    <h2>Jenis Kendaraan :</h2>

    <?php 
        $roda = $_POST["roda"];

        switch($roda){
            case "2";
                echo"motor, sepeda";
                break;

            case "3";
                echo "bajai, becak, cator";
                break;

            case"4";
                echo "Mobil, Truck, mini bus, Pick up";
                break;

            case"10";
                echo "Fuso, trailer, tronton";
                break;

            default:
                echo "Tidak ditemukan";
            
        }
    ?>

<br>
<br>
    <a href="soal5.php">Kembali</a>
    
</body>
</html>