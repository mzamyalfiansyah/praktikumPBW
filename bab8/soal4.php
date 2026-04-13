<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Soal nomor 4 (Menentukan bilangan ganjil atau genap)</h1>

    <h3>Masukkan Bilangan :</h3>
    <form action="" method="post">
        <input type="number" name="bilanganinput" required>
        
        <br>
        <br>

        <button>sbmit</button>
    </form>

    <?php 
    
        $bilangan = $_POST["bilanganinput"];
        $status = ($bilangan % 2 == 0) ? "genap" : "ganjil";

        

    ?>

    <p>Bilangan <?php echo $bilangan; ?> adalah : <?php echo $status; ?></p>

</body>
</html>