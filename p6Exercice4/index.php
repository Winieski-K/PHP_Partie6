<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
    </head>
    <body>
        <a href="index.php?language=PHP&server=LAMP">Afficher variables</a>
        <p>
            <?php
            // GET se génère automatiquement à l'ajout des paramètres d'url
            // Vérifie la présence des données
            if (!empty($_GET['language']) && !empty($_GET['server'])) {
                // Affiche les valeurs des paramètres d'url
                echo $_GET['language'] . ' ' . $_GET['server'];
            } else {
                // Affiche un message en cas de données manquantes
                echo 'Données manquantes';
            }
            ?>
        </p>
        <a href="index.php">Retour</a>
    </body>
</html>
