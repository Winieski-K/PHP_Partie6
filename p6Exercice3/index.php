<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <body>
        <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Afficher variables</a>
        <p>
            <?php
            // Vérifie la présence des données
            if (!empty($_GET['startDate']) && !empty($_GET['endDate'])) {
                // Affiche les valeurs des paramètres d'url
                echo $_GET['startDate'] . ' ' . $_GET['endDate'];
            } else {
                // Affiche un message en cas de données manquantes
                echo 'Données manquantes';
            }
            ?>
        </p>
        <a href="index.php">Retour</a>
    </body>
</html>
