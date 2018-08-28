<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&firstname=Jean&age=25">Afficher variables</a>
        <p>
            <?php
            // Vérifie la présence des données
            if (!empty($_GET['age']) && !empty($_GET['lastname']) && !empty($_GET['firstname'])) {
                // Affiche les valeurs des paramètres d'url
                echo $_GET['lastname'] . ' ' . $_GET['firstname'] . ' ' . $_GET['age'];
            } else {
                // Affiche un message en cas d'absence de données
                echo 'Aucune donnée sur l\'âge trouvée';
            }
            ?>
        </p>
        <a href="index.php">Retour</a>
    </body>
</html>
