<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&firstname=Jean">Afficher variables</a>
        <p>
            <?php
            // Vérifie la présence des données
            if (!empty($_GET['lastname']) && !empty($_GET['firstname'])) {
                // Affiche la valeur des paramètres d'url
                echo $_GET['lastname'] . ' ' . $_GET['firstname'];
            } else {
                // Affiche un msg d'erreur en cas de données manquantes
                echo 'Données manquantes';
            }
            ?>
        </p>
        <a href="index.php">Retour</a>
    </body>
</html>
