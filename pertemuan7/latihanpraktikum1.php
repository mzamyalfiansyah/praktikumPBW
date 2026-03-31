<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Input Nilai</h2>
    <form action="" method="post">

        <label for="nama">Nama:</label> <br>
        <input type="text" name="nama" required>

        <br>
        <br>

        <label for="nilai">Nilai :</label> <br>
        <input type="text" name="nilai" required>
        
        <br>
        <br>

        <button>Submit</button>

    </form>

    <h2> Hasil :</h2>
    <?php 
        $nama = $_POST["nama"];
        $nilai = $_POST["nilai"];
        $predikat;
        $status;

        if($nilai > 100){

            $predikat = "Tidak Valid";
            $status = "Tidak Valid";

        }
        elseif($nilai >= 85){

            $predikat = "A";
            $status = "Lulus";


        }elseif($nilai >= 75){

            $predikat = "B";
            $status = "Lulus";


        }elseif($predikat >= 65){
            
            $predikat = "C";
            $status = "Lulus";

        
        }elseif($predikat >= 50){

            $predikat = "D";
            $status = "Tidak Lulus";


        }elseif($predikat >= 0){

            $predikat = "E";
            $status = "Tidak Lulus";

        }
        else{

            $predikat = "Tidak Valid";
            $status = "Tidak Valid";

        }

    ?>

    <p>Nama : <?php echo $nama; ?></p>
    <p>Nilai : <?php echo $nilai; ?> </p>
    <p>Prediakt : <?php echo $predikat ; ?> </p>
    <p>Status : <?php echo $status; ?></p>
</body>
</html>