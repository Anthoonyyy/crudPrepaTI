<?php

// si on veut se déconnecter

if (isset($_GET['disconnect'])) {
    // on se déconnecte
    disconnectAdministrator();
    header("Location: ./");
    exit();
}

//Si on veut créer un lieu
if (isset($_GET['create'])) {

    //Si on a cliqué sur insérer
    if (isset(
        $_POST['title'],
        $_POST['geolocdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )) {
        $title = htmlspecialchars(strip_tags(trim($_POST['title'])), ENT_QUOTES) .
            $geolocdesc = htmlspecialchars(trim($_POST['geolocdesc']), ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        $insert = insertOneGeolocById($db, $title, $geolocdesc, $latitude, $longitude);

        if ($insert === true) {
            header("Location: ./");
            exit();
        }
    }

    //chargement de la vue
    include "../view/admin/admin.insert.view.html.php";
}

//si on a cliqué sur update et qu'on'accepte que les chiffres dans le string ['update']
if (isset($_GET['update']) && ctype_digit($_GET['update'])) {
    //conversion en int
    $idUpdate = (int) $_GET['update'];

    //Si on a modifier le formulaire (pas obligatoire de vérifier tous les champs, mais dans le isset, la virgule vaut &&)
    if (isset(
        $_POST['idgeoloc'],
        $_POST['title'],
        $_POST['geolocdesc'],
        $_POST['latitude'],
        $_POST['longitude']
    )) {
        // vérification de valeurs
        $idgeoloc = (int) $_POST['idgeoloc'];
        $title  = htmlspecialchars(strip_tags(trim($_POST['title'])), ENT_QUOTES);
        $geolocdesc  = htmlspecialchars(trim($_POST['geolocdesc']), ENT_QUOTES);
        $latitude = (float) $_POST['latitude'];
        $longitude = (float) $_POST['longitude'];

        //fonction qui update la mise à jour
        //$update =  updateOneGeolocByID($db,$idgeoloc);
        //var_dump($update);
    }
    //Chargement de l'article pour l'update
    // $getOneGeoLoc = getOneGeolocByID($db,$idUpdate);
    // var_dump($getOneGeoLoc);

    //chargement de la vue
    include "../view/admin/admin.update.view.html.php";
    exit();
}



// si on est sur l'accueil chargement de tous les `geoloc`
$datas = getAllGeoloc($db);
// appel de la vue de l'accueil de l'admin
include "../view/admin/admin.homepage.view.html.php";
