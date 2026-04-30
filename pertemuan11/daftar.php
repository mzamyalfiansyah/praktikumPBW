<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 
    <title>Daftar</title>
</head>
    <body>

        <div style="display: flex; justify-content: center; align-items: center;">



            <div style="border: 1px black solid; width: 30%; border-radius: 10px; padding: 30px; margin: 50px auto;">
            <?php 
                session_start();
            if (isset($_SESSION['error'])): ?>
                <div id="alertBox" style="color: white; background: red; padding: 10px;">
                    <?= $_SESSION['error']; ?>
                </div>

                <script>
                    setTimeout(function() {
                        document.getElementById("alertBox").style.display = "none";
                    }, 3000); // hilang setelah 3 detik
                </script>

            <?php 
                unset($_SESSION['error']); 
                endif; 
            ?>

            <?php
                if (isset($_SESSION['succes'])): ?>
                <div id="alertBox" style="color: white; background: green; padding: 10px;">
                    <?= $_SESSION['succes']; ?>
                </div>

                <script>
                    setTimeout(function() {
                        document.getElementById("alertBox").style.display = "none";
                    }, 3000); // hilang setelah 3 detik
                </script>

            <?php 
                unset($_SESSION['succes']); 
                endif; 
            ?>
            
                <h2 style="color: blue;">Daftar Akun Pengguna</h2>


                <form action="prosesdaftar.php" method="post">

                            <?php if (isset($_SESSION['error'])): ?>
                <div id="alertBox" style="color: white; background: red; padding: 10px;">
                    <?= $_SESSION['error']; ?>
                </div>

                <script>
                    setTimeout(function() {
                        document.getElementById("alertBox").style.display = "none";
                    }, 3000); // hilang setelah 3 detik
                </script>

            <?php 
            unset($_SESSION['error']); 
            endif; 
            ?>

                    <label for="username">Masukkan Username :</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" required>

                    <br>

                    <label for="email">Masukkan Email :</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                    
                    <br>

                    <label for="password1">Masukkan Password :</label>
                    <input class="form-control" type="password" name="password1" placeholder="password" required>
                    
                    <br>
                                        
                    <label for="password2">Ulangi Password :</label>
                    <input class="form-control" type="password" name="password2" placeholder="password" required>
                    
                    <br>

                    <button class="btn btn-primary" type="submit" style="width: 100%;">Daftar</button>
                </form>

                <br>
                
                <p style="text-align: center;">Udah punya akun? ngapain daftar, <a href="login.php" style="text-decoration: none;">Login</a></p>

            </div>            

        </div>
        
    </body>
</html>