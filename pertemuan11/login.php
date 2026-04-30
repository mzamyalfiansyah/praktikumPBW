    <?php 
    session_start(); 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 
    <title>Login</title>
</head>
<body>

        <div style="display: flex; justify-content: center; align-items: center;">



            <div style="border: 1px black solid; width: 30%; border-radius: 10px; padding: 50px; margin: 100px auto;">
                
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
            
                <h2 style="color: blue;">Login Kedalam Sistem</h2>


                <form action="proseslogin.php" method="post">

                    <label for="username">Masukkan Username :</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" >

                    <br>

                    <label for="password">Masukkan Password :</label>
                    <input class="form-control" type="password" name="password" placeholder="password" >
                    
                    <br>

                    <button class="btn btn-primary" type="submit" style="width: 100%;">Masuk</button>
                </form>

                <br>
                
                <p style="text-align: center;">Belum punya akun? <a href="daftar.php" style="text-decoration: none;">Daftar dulu</a></p>

            </div>            

        </div>


</body>

</html>