<?php

  
    include "konek.php";

    $ID = $_POST["ID"];
    $nama = $_POST["Nama"];
    $alamat = $_POST["Alamat"];
    $email = $_POST["Email"];
    $telepon = $_POST["Telepon"];

    
    $stmt = $conn->prepare("UPDATE pelanggan SET Nama=?, Alamat=?, Email=?, Telepon=? WHERE ID = '$ID'");
    $stmt->bind_param("sssi", $nama, $alamat, $email, $telepon);
    $stmt->execute();

        echo "<script>
        alert('Berhasil Mengedit');
        window.location='daftarpelanggan.php';
        </script>";