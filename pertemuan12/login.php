<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="src/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
    <body class="bg-pink-500 flex justify-center ...">
        <div class="bg-white p-8 w-96 m-20 rounded-xl">

            <h1 class="flex justify-center">Login</h1>

                <?php
                    session_start();
                    if(isset($_SESSION['error'])){
                ?>
                    <div class="bg-red-500 text-white p-2 rounded-xl flex justify-center mt-5" id="alertBox" style="
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
                    session_start();
                    if(isset($_SESSION['success'])){
                ?>
                    <div class="bg-green-500 text-white p-2 rounded-xl flex justify-center mt-5" id="alertBox" style="
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

                <div class="mt-5">
                    <label for="username" class="block text-sm/6 text-gray-900">Username</label>
                    <input id="username" type="text" name="username" placeholder="Masukkan Username" class="w-full py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 border-2 border-pink-500 rounded-md " required/>

                    <br>
                    <br>

                    <label for="password" class="block text-sm/6 text-gray-900">Password</label>
                    <input id="password" type="password" name="password" placeholder="Masukkan password" class="w-full py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 border-2 border-pink-500 rounded-md " required/>

                    <br>
                    <br>
                    <br>

                    <button class="bg-pink-500 w-full p-2 text-white rounded-md hover:bg-pink-700" type="submit">Masuk</button>
                   
                    <br>
                    <br>
                </div>
            </form>

        </div>
    </body>
</html>