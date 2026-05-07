<?php
session_start();

if(!isset($_SESSION['ID'])){

    $_SESSION['success'] = "eitss.. Login dulu lah heheh";
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
  </head>
  <body>

      <div>
        <h4>Sstt... Data rahasia :</h4>

                <br>

                <p>Nama : Muhammad Zamy Alfiansyah</p>
                <p>NPM : 2410631170040</p>
                <p>Prodi : Informatika</p>
                <p>Fakultas : Ilmu Komputer</p>
                
                <br>

                
                <p>Pencet ini biar ga ada yang tau : <a class="btn btn-danger" href="logout.php">Logout</a></p>
                
      </div>
  </body>
</html>
