<?php
    date_default_timezone_set('UTC');
    setlocale(LC_ALL, "fra.utf8");
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= strftime("%A %d %B %Y");
    ?> </p>
</body>
</html>