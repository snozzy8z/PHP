<?php

session_start();

$_SESSION['lastname'] = 'Tony';
$_SESSION['firstname'] = 'Pflug';
$_SESSION['age'] = 22 ;

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
            <h1 class="text-center">Exercice 2</h1>
            <h2 class="text-center">Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
                Ces variables auront été définies directement dans le code.
                Il faudra afficher le contenu de ces variables sur la deuxième page.</h2>
        </div>
        <hr class="">
    </header>
    <main class="text-center justify-content-center">
    <a href="main.php"<div class="border d-inline-flex p-2 justify-content-center" style="background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);">
    <h2 class="text-center">Page suivante</h2>
    </div></a>
    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>