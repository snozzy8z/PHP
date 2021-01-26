<?php

$months = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
$days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $_POST['months'], $_POST['years']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="month">Mois :</label>
        <select name="months" id="">
            <?php foreach ($months as $key => $month) {
                $keys = $key + 1;
                echo '<option value="' . $keys . '">' . $month . '</option>';
            }; ?>

        </select>
        <label for="years">Année :</label>
        <select name="years" id="">
            <?php

            for ($i = 1970; $i < 2030 + 1; $i++) {
                echo  '<option value="' . $i . '">' . $i . '</option>';
            }; ?>
        </select>
        <input type="submit" name="submit">
    </form>
    <!-- =================================================== -->
    <!-- Calendrier -->
    <div class="container justify-content-center">
        <div class="row">
            <?php
            foreach ($days as $key => $day) { ?>
                <div class="col-md-1"><?= $day ?></div>
            <?php
            };
            ?>
        </div>

        <div class="row">
            <?php
            for ($i = 1; $i <= $days_in_month; $i++) { ?>
                <div class="col-md-1"><?= $i;
                                        ?></div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>