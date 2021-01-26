<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="profil.php" enctype="multipart/form-data">
        <div>
            <label for="Civilité">Civilité :</label>
            <input type="radio" value="Monsieur" name="civilité">Mr 
            <input type="radio" value="Madame" name="civilité">Mme
        </div>
        <div>
            <label for="firstName">Nom :</label>
            <input type="text" id="firstName" name="user_name">
        </div>
        <div>
            <label for="secondName">Prénom :</label>
            <input type="text" id="secondName" name="user_secondName">
        </div>
            <!-- On limite le fichier à 100Ko -->
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
            Fichier : <input type="file" name="file">
            <input type="submit" name="submit" value="Envoyer le fichier">
        </form>
</body>
</html>