<?php
    session_start();
    if (!isset($_SESSION['ID'])) {
    $_SESSION["error"] = "Login Dulu Dongg hehek..";
    header("Location: login.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 
    <title>Home</title>
</head>
    <body>
        <div class="container">

            <h2>Welcome..</h2>

            <p>Informasi Rahasia :</p>
            <p>Nama : Muhammad Zamy Alfiansyah</p>
            <p>NPM : 2410631170040</p>
            <p>Prodi : Informatika</p>
            <p>Kelas : 4B</p>

            <br>
            <br>
            <br>

            <p>Kalau mau keluar pencet tombol ini biar informasi rahasia ga keungkap ;)</p>
            <a class="btn btn-danger" href="proseslogout.php">keluar</a>
        </div>
  
    </body>
</html>