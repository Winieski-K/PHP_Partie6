<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6</title>
    </head>
    <body>
        <a href="index.php?building=12&room=101">Afficher variables</a>
        <p>
            <?php
            // Vérifie la présence des données
            if (!empty($_GET['building']) && !empty($_GET['room'])) {
                // Affiche les valeurs des paramètres d'url
                echo $_GET['building'] . ' ' . $_GET['room'];
            } else {
                // Affiche un message en cas de données manquantes
                echo 'Données manquantes';
            }
            ?>
        </p>
        <a href="index.php">Retour</a>
    </body>
</html>
