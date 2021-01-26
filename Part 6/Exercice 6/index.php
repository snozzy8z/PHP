<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'Bonjour'. ' ' . $_POST['civilité'] . ' ' .$_POST['user_name'] . ' ' .$_POST['user_secondName'];
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
        <form action="index.php" method="POST" id="form" style="visibility: visible;">
            <div>
                <label for="Civilité">Civilité</label>
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
                <button type="submit">Validé</button>
            </div>
        </form>
</body>

</html>
<?php
}
?>



