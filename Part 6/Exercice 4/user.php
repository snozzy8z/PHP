<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <p>Bonjour !</p>
    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles
        <?php
        echo $_POST['user_name']. ' ' . $_POST['user_secondName']. ' ' .'!';?>
    </p>
    <p>Si tu veux changer de nom, prénom <a href="index.php">clique ici</a> pour revenir à la page du formulaire</p>
</body>
</html>