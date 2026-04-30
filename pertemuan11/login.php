<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
    <body style="margin: 0; padding: 0; background-color: #006AFF;">


        <div style="display: flex; flex-direction: column; margin-top: 5%;">
            

            <div style="
                        border-radius:10px; 
                        width: 30%; 
                        margin: auto; 
                        padding: 20px; 
                        background-color: white;
                        ">
                
                <br>
                
                
                <h4 style="text-align: center;">Login</h4>
                <br>
                <br>

                <?php
                    session_start();
                    if(isset($_SESSION['error'])){
                ?>
                    <div id="alertBox" style="
                        background: #ff4d4d;
                        color: white;
                        padding: 12px;
                        border-radius: 6px;
                        text-align: center;
                        margin-bottom: 15px;
                        font-weight: bold;
                        transition: opacity 0.5s ease;
                    ">
                        <?= $_SESSION['error']; ?>
                    </div>

                    <script>
                        setTimeout(() => {
                            const alertBox = document.getElementById('alertBox');
                            if(alertBox){
                                alertBox.style.opacity = '0';
                                setTimeout(() => {
                                    alertBox.style.display = 'none';
                                }, 500);
                            }
                        }, 3000);
                    </script>
                <?php
                    unset($_SESSION['error']);
                }
                ?>



<?php
                    if(isset($_SESSION['success'])){
                ?>
                    <div id="alertBox" style="
                        background: #377D3E;
                        color: white;
                        padding: 12px;
                        border-radius: 6px;
                        text-align: center;
                        margin-bottom: 15px;
                        font-weight: bold;
                        transition: opacity 0.5s ease;
                    ">
                        <?= $_SESSION['success']; ?>
                    </div>

                    <script>
                        setTimeout(() => {
                            const alertBox = document.getElementById('alertBox');
                            if(alertBox){
                                alertBox.style.opacity = '0';
                                setTimeout(() => {
                                    alertBox.style.display = 'none';
                                }, 500);
                            }
                        }, 3000); 
                    </script>
                <?php
                    unset($_SESSION['success']);
                }
                ?>

                <form action="proseslogin.php" method="post">

                    <label for="username">Username :</label><br>
                    <input class="form-control" type="text" name="username" placeholder="Masukkan Username" style="width: 100%;">

                    <br>

                    <label for="password">Password :</label><br>
                    <input class="form-control" type="password" name="password" placeholder="Masukkan Password" style="width: 100%;">

                    <br>

                    <button class="btn btn-primary" type="submit" style="width:100%;">Masuk</button>

                    <br>
                    <br>
                    <p style="text-align: center;">Gapunya akun? <a href="daftar.php"style="text-decoration: none;">daftar dulu lah</a></p>
                    <br>

                </form>

            </div>

        </div>

        
        
    </body>
</html>