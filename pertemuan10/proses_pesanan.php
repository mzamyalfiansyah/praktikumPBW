<?php 

include "konek.php";

$tanggalpesan = date("Y-m-d");

$qty = $_POST["Kuantitas"];
$IDPelanggan = $_POST["IDPelanggan"];
$IDBuku = $_POST["IDBuku"];

    $result = mysqli_query($conn, "SELECT * FROM buku WHERE ID='$IDBuku'");
    $data = mysqli_fetch_assoc($result);

    $Hargabuku = $data['Harga'];
    $stok = $data['stok'];


    $Total = $Hargabuku * $qty;
    $kurangstok = $stok - $qty;


    if($stok == 0){
        echo "<script>
        alert('Stok Buku Kosong! TIDAK DAPAT MEMBUAT PESANAN!');
        window.location='pesanan.php';
        </script>";
    }else if($stok - $qty < 0){
        echo "<script>
        alert('Stok Buku Kurang! TIDAK DAPAT MEMBUAT PESANAN!');
        window.location='pesanan.php';
        </script>";
    }else{
    
    $pesan = $conn->prepare("INSERT INTO pesanan (Tanggal_Pesanan, Pelanggan_ID, Total_Harga) VALUES (?, ?, ?)");
    $pesan->bind_param("sis", $tanggalpesan, $IDPelanggan, $Total);
    $pesan->execute();
    $Pesanan_ID = $conn->insert_id;

    $detailpesan = $conn->prepare("INSERT INTO detail_pesanan (Pesanan_ID, Buku_ID, Kuantitas, Harga_Per_Satuan) VALUES (?, ?, ?, ?)");
    $detailpesan->bind_param("iiid", $Pesanan_ID, $IDBuku, $qty, $Hargabuku);
    $detailpesan->execute();

    $stmt = $conn->prepare("UPDATE buku SET stok = ? WHERE ID = '$IDBuku'");
    $stmt->bind_param("i", $kurangstok);
    $stmt->execute();

        echo "<script>
        alert('Pesanan berhasil dibuat');
        window.location='pesanan.php';
        </script>";
    }