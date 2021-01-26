<?php
if (isset($_GET['user_login']) && isset($_GET['user_password'])) {
    $login = $_GET['user_login'];
    $pass = $_GET['user_password'];
    setcookie('user_login', $login, time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('user_password', $pass, time() + 365*24*3600, null, null, false, true);
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%)" ;>
        <header>
            <div class="border" style="background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);">
                <h1 class="text-center">Exercice 3</h1>
                <h2 class="text-center">
                    Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</h2>
            </div>
            <hr class="">
        </header>
        <main class="text-center justify-content-center">

            <form action="recup.php" method="GET" enctype="multipart/form-data">
                <label for="login">Login :</label>
                <input type="text" name="user_login">
                <label for="password">Password :</label>
                <input type="password" name="user_password">
                <input type="submit" name="submit">
            </form>

        <?= '<h1>' . 'Bonjour' . ' ' . 'ton login est :' . ' ' . $login . ' ' . 'et ton mot de passe est :' . $pass;
    }
        ?>


        </main>
        <footer>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>

    </html>