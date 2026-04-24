<?php

    include "konek.php";

    $ID = $_GET["ID"];

    echo $ID;

    $result = mysqli_query($conn, "UPDATE buku SET Status = 'dihapus' WHERE ID = '$ID'");

        echo "<script>
        alert('Data berhasil Di Hapus!');
        window.location='databuku.php';
        </script>";
