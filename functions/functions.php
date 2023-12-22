<?php

require '../src/connexion/connexion.php';

$db = ConnexionDB::getConnexion();

function controllerCallView($page){

    $pageUrl = "../src/views/" . $page . "View.php";
    
    return $pageUrl;
}



function arrayCallCss ($css){

    $cssUrl = "css/" . $css . ".css";
    return $cssUrl;
}



function readAll($table){

    global $db;

    try{
    $request = $db->query("SELECT * FROM $table");
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    } catch (PDOException $e) {
        echo "impossible de lire les données";
    }
}