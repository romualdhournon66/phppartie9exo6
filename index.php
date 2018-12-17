<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 9 exercice 6</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 9 exercice 6</h1>
                        <h3 align="center">Exercice 6</h3>
                        <p class="text">Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
                        <?php
                        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
                        ?>
                        <p align="center">Il y a eu <b><?= $number; ?></b> jours dans le mois de Février 2016</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

