<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Soal nomor 3 (Menampilkan arra daftar nama hewan menggunakan foreach)</h1>

    <?php 

        $namahewan = [
            "kucing",
            "anjing",
            "sapi",
            "monyet",
            "jerapah"
        ];

        foreach ($namahewan as $nama) {

            echo "Nama hewan : ". $nama . "<br>";
            
        }

    ?>

    <br>
    <br>
    <a href="soal5.php">Kembali</a>
    
</body>
</html>