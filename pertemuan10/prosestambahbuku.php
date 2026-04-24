<?php

   
    include "konek.php";

    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahunterbit = $_POST["tahunterbit"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    $stmt = $conn->prepare("INSERT INTO buku (Judul, Penulis, Tahun_Terbit, Harga, stok) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiii", $judul, $penulis, $tahunterbit, $harga, $stok);
    $stmt->execute();

    echo "<script>
        alert('Berhasil menambahkan buku');
        window.location='tambahbuku.php';
        </script>";
    
