<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!--Lien CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Accueil</title>
</head>

<body>
    <h1>Accueil</h1>
    <nav>
        <ul>
            <li>Accueil</li>
            <li><a href="?json" target="_blank">API</a>format JSON</li>
            <li><a href="?connect">Connexion</a></li>
        </ul>
    </nav>
    <div id="content">
        <h3>Liste de nos lieux</h3>
        <?php
        /*
        // datas est une chaine de caractère : erreur SQL ! 
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
            <h3>Il y a <?= $nb ?> <?= $nb > 1 ? "lieux" : "lieu" ?></h3>

            <?php
            // tant qu'on a des données
            // var_dump($datas);
            foreach ($datas as $data) :
            ?>
                <h4><?= $data['title'] ?></h4>
                <p><?= $data['geolocdesc'] ?></p>
                <p><?= $data['latitude'] ?> | <?= $data['longitude'] ?></p>
                <hr>
        <?php
            endforeach;
        endif;
        */

        ?>

        <div id="resultat">
            <div id="map"></div>
            <div id="liste"></div>
        </div>

    </div>

    <!--JS de leaflet-->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!--Mon JS-->
    <script src="../js/carteJSON.js"></script>
    <!--Lien JS Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>