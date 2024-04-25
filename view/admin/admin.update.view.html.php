<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update d'un article</title>
    <link rel="stylesheet" href="css/style.css">
    <!--Lien CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Update d'un article</h1>
    <nav>
        <ul>
            <li>Accueil de l'administration</li>
            <li><a href="?create">Ajouter un lieu</a></li>
            <li><a href="?disconnect">Déconnexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Article à modifier</h3>
        <?php
        if (isset($errorUpdate)) :
        ?>
            <h3 id="alert"><?= $errorUpdate ?></h3>
        <?php
        endif;
        // datas est une chaine de caractère : erreur SQL !
        if (is_string($getOneGeoloc)) :
        ?>
            <h3 id="alert"><?= $getOneGeoloc ?></h3>
        <?php
        // Pas de `geoloc` trouvée
        elseif ($getOneGeoloc === false) :
        ?>
            <h3 id="comment">Vous n'avez pas modifié le lieu !</h3>
        <?php
        //Nous avons un lieu
        else :
        ?>
            <form action="" method="POST" name="geo">
                <input type="text" name="title" value="<?= $getOneGeoloc['title'] ?>" required><br>
                <textarea name="geolocdesc"><?= $getOneGeoloc['geolocdesc'] ?></textarea><br>
                <input type="number" name="latitude" step="0.000000001" value="<?= $getOneGeoloc['latitude'] ?>" required>
                <input type="number" name="longitude" step="0.000000001" value="<?= $getOneGeoloc['longitude'] ?>" required>
                <input type="submit" value="Update">
            </form>
        <?php endif ?>
    </div>
    <!--Lien JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>