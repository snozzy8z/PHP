<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $info = new SplFileInfo($_POST['monfichier']);
    echo 'Bonjour'. ' ' . $_POST['civilité'] . ' ' .$_POST['user_name'] . ' ' .$_POST['user_secondName']. ' ' . 'votre fichier est: ' .$_POST['monfichier'];
}else{

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <div>
            <label for="Civilité">Civilité :</label>
            <select name='civilité' size='1'>
                <option>
                <option>Mr
                <option>Mme
            </select>
        </div>
        <div>
            <label for="firstName">Nom :</label>
            <input type="text" id="firstName" name="user_name">
        </div>
        <div>
            <label for="secondName">Prénom :</label>
            <input type="text" id="secondName" name="user_secondName">
        </div>
        <div>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
            Transfère le fichier <input type="file" name="monfichier" />
            <input type="submit" />
        </div>
    </form>
</body>

</html>
<?php
}
?>