<?php

    session_start();
    include "konek.php";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM pengguna WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();
        
        $user = $result->fetch_assoc();


        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['ID'] = $user['ID'];
            header("Location: home.php");

        } else {

            $_SESSION['error'] = "Username atau passwordnya salah nih !";
            header("Location: login.php");
            
        }

        $stmt->close();
    }

