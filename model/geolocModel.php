<?php

// Fonction qui récupère tous les champs de `geoloc`
function getAllGeoloc(PDO $connection): array|string
{
    $sql = "SELECT * FROM `geoloc`";
    try {
        $query = $connection->query($sql);

        // Si il n'y a pas de résultat, fetchAll sera un tableau vide
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

// Fonction qui charge tous les champs d'un élément de geoloc grâce à on idgeoloc
// Renvoie false en cas d'échec ou un message d'erreur sql
// Renvoie un tableau associatif si true

function getOneGeolocById(PDO $db, int $id): string|bool|array
{
    $sql = "SELECT * FROM `geoloc` WHERE `idgeoloc` = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam("id", $id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        if ($stmt->rowCount() === 0) return false;
        $results = $stmt->fetch();
        $stmt->closeCursor();
        return $results;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
