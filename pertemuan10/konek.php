<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "pbwpertemuan10";

$conn = mysqli_connect($server, $username, $password, $database);

// if($conn -> connect_error){
//     die("Koneksi Gagal: " . $conn -> connect_error);
// }else{
//     echo "Koneksi Berhasil";
// }