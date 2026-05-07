<?php

    session_start();

    include "konek.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_POST['username'];
        $email = $_POST['email'];

        if($_POST['password1'] == $_POST['password2']){
            $password = password_hash($_POST['password1'], PASSWORD_DEFAULT);

            // echo "sama";

            $stmt = $conn->prepare('INSERT INTO admin (username, password, email) VALUES (?, ?, ?)');
            $stmt->bind_param('sss', $username, $password, $email);
            $stmt->execute();

            $_SESSION['success'] = "Berhasil buat akun!";


        }else{
            // echo "beda";

            $_SESSION['error'] = "Password Harus Sama Dong!";

        }

            header("Location: daftar.php");
            exit;


    }