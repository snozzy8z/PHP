<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user.php" method="POST">
        <div>
            <label for="firstName">Nom :</label>
            <input type="text" id="firstName" name="user_name">
        </div>
        <div>
            <label for="secondName">Prénom :</label>
            <input type="text" id="secondName" name="user_secondName">
        </div>
        <div>
            <button type="submit">Validé</button>
        </div>
    </form>
</body>
</html>