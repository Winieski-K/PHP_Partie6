<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <a href="index.php?week=12">Afficher variable</a>
        <p>
            <?php
            // Vérifie la présence des données
            if (!empty($_GET['week'])) {
                // Affiche la valeur du paramètre d'url
                echo $_GET['week'];
            } else {
                // Affiche un message en cas d'absence de données
                echo 'Donnée manquante';
            }
            ?>
        </p>
        <a href="index.php">Retour</a>
    </body>
</html>
