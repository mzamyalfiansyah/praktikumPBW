<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="post">

        <label for="NPM">NPM :</label> <br>
        <input type="text" name="NPM" required>

        <br>
        <br>

        <label for="nama">nama :</label> <br>
        <input type="text" name="nama" required>

        <br>
        <br>

        <label for="prodi">Prodi :</label> <br>
        <input type="text" name="prodi" required>

        <br>
        <br>

        <label for="semester">Semester :</label> <br>
        <input type="text" name="semester" required>

        <br>
        <br>

        <label for="biayaukt">Biaya UKT :</label> <br>
        <input type="text" name="biayaukt" required>

        <br>
        <br>

        <button>submit</button>



    </form>

    <?php 
        $npm = $_POST["NPM"];
        $nama = $_POST["nama"];
        $prd = $_POST["prodi"];
        $smt = $_POST["semester"];
        $ukt = $_POST["biayaukt"];
        $diskon1 = 0.1;
        $diskon2 = 0.15;


    ?>

    <h2>Hasil :</h2>
    <p>NPM : <?php echo $npm ?></p>
    <p>Nama : <?php echo $nama ?></p>
    <p>Prodi : <?php echo $prd ?></p>
    <p>Semester : <?php echo $smt ?></p>

    <?php 
        if($ukt >= 5000000 && $smt > 8){
             $ukt = $ukt * $diskon2;
        }
        elseif($ukt >= 5000000){
             $ukt * $diskon1;
        }else{
             $ukt;
        }
    ?>

        <p>Yang Harus Dibayar : <?php echo $ukt; ?></p>

</body>
</html>