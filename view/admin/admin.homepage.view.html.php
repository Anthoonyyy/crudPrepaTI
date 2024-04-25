<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil de l'administration</title>
    <link rel="stylesheet" href="css/style.css">
    <!--Lien CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Accueil de l'administration</h1>
    <p>Administration des lieux de notre site</p>
    <nav>
        <ul>
            <li>Accueil de l'administration</li>
            <li><a href="?create">Ajouter un lieu</a></li>
            <li><a href="?disconnect">Déconnexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Administration des datas</h3>
        <?php
        // datas est une chaîne de caractère : erreur SQL !
        if (is_string($datas)) :
        ?>
            <h3 id="alert"><?= $datas ?></h3>
        <?php
        // Pas encore de `geoloc`
        elseif (empty($datas)) :
        ?>
            <h3 id="comment">Pas encore de lieu.</h3>
        <?php
        // Nous avons des lieux
        else :
            // on compte le nombre de données 
            $nb = count($datas);
        ?>
            <!-- <h3>Il y a <?= $nb ?> <?= $nb > 1 ? "lieux" : "lieu" ?></h3>-->
            <table>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>

                <?php
                // tant qu'on a des données
                // var_dump($datas);
                foreach ($datas as $data) :
                ?>
                    <tr>
                        <td><?= $data['idgeoloc'] ?></td>
                        <td><?= $data['title'] ?></td>
                        <td><?= $data['geolocdesc'] ?></td>
                        <td><?= $data['latitude'] ?></td>
                        <td><?= $data['longitude'] ?></td>
                        <td><a href="?update=<?= $data['idgeoloc'] ?>"><img src="../img/editIcone.png" alt="update" /></a></td>
                        <td><a href="?delete=<?= $data['idgeoloc'] ?>"><img src="../img/deleteIcon.png" alt="delete" /></a></td>

                    </tr>
                <?php endforeach ?>
            </table>
        <?php endif ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>