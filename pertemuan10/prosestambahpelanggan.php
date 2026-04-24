<?php

   
    include "konek.php";

    $nama = $_POST["Nama"];
    $alamat = $_POST["Alamat"];
    $email = $_POST["Email"];
    $telepon = $_POST["Telepon"];

    $stmt = $conn->prepare("INSERT INTO pelanggan (Nama, Alamat, Email, Telepon) VALUES ( ?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $alamat, $email, $telepon);
    $stmt->execute();

    echo "<script>
        alert('Berhasil menambahkan pelanggan');
        window.location='tambahpelanggan.php';
        </script>";
    
