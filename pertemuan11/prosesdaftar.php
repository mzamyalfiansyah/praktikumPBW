<?php

    session_start();

    include "konek.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password1= $_POST['password1'];
        $password2 = $_POST['password2'];
        $email = $_POST["email"];

        if($password1 == $password2){
            //echo "password sama";

            $hash = password_hash($password1, PASSWORD_DEFAULT);
            //echo $hash;
            $stmt = $conn->prepare("INSERT INTO pengguna SET username=?, password=?, email=?");
            $stmt->bind_param("sss", $username,  $hash, $email);
            $stmt->execute();

            $stmt->close();

            $_SESSION['succes'] = "Akun berhasil dibuat nih, tinggal login!";
            header("Location: daftar.php");

        }else{
            //echo "password beda";

            $_SESSION['error'] = "Password harus sama !";
            header("Location: daftar.php");
            exit;   

        }


        







    }