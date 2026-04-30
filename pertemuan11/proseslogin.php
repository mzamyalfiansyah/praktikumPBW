<?php

    session_start();

    include "konek.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // echo $username;
        // echo $password;

        $stmt = $conn->prepare('SELECT * FROM admin WHERE username=?');
        $stmt->bind_param('s', $username);
        $stmt->execute();

        $result = $stmt->get_result();
        if($result->num_rows === 1){

            $user = $result->fetch_assoc(); 
    
            if(password_verify($password, $user['password'])){
    
                $_SESSION['ID'] = $user['ID'];
                $_SESSION['username'] = $user['username'];
    
                header("Location: index.php");
                exit;
    
            } else {
                $_SESSION['error'] = "Username atau Password salah!";
                header("Location: login.php");
                exit;
            }

        } else {
        $_SESSION['error'] = "Username atau Password salah!";
        header("Location: login.php");
        exit;
    	}
  	
    }