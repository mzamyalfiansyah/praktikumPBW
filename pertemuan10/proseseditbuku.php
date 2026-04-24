<?php

  
    include "konek.php";

    $ID = $_POST["ID"];
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahunterbit = $_POST["tahunterbit"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    $stmt = $conn->prepare("UPDATE buku SET Judul=?, Penulis=?, Tahun_Terbit=?, Harga=?, stok=? WHERE ID = ?");
    $stmt->bind_param("ssiiii", $judul, $penulis, $tahunterbit, $harga, $stok, $ID);
    $stmt->execute();

        echo "<script>
        alert('Berhasil Mengedit');
        window.location='databuku.php';
        </script>";