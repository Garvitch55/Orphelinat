<?php

//l import du php data object
// pdo securise la plus grosse faille d internet: l injection sql
require_once __DIR__ . "/../pdo.php";

//fichier qui ajoute les enfants dans la base de données
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

//FORMULAIRE EN GET
// LES DONNEES VONT EN L URL (UNIFORM RESSOURCE LOCATOR)
// LE PROBLEME POUR UN FORMULAIRE GET EST LIMITER PAR 2000 CARACTERES
//CAS D USAGE => RECHERCHE OU FILTRES.

//FORMULAIRE UN POST
//LES DONNEES VONT DANS LE CORPS DE LA REQUETES
// DONNEES ILLIMITE.
//CAS D UTILISATION => CONNEXION, FORMULAIRE, ENVOI de fichier



if($_SERVER['REQUEST_METHOD'] === 'POST'){
//ICI ON CONTINUE LE CODE CAR ON A ENVOYER NOTRE FORMULAIRE EN POST
//ON RECUPERE LES DONNEES ET ON LES NETTOIE
// NOUVELLE SUPER GLOBAL=> $POST
// CEST UN TABLEAU ASSOCIATIF QUI CONTIENT TOUTES LES DONNEES
// DE VOS INPUTS

// echo '<pre>';
// var_dump($_POST);
// var_dump($_POST['birthdate']);
// echo '</pre>';

//ON ENLEVE LES POTENTIELS ESPACE EN TROP. MAIS POUR EVITER LES NULL ON TULISERA UN OPERATEUR DE COALESENCE DES NULL
$firstname = trim($_POST['firstname'] ?? '');
// ICI SI $POST EST NULL IL DEVIENDRA UNE CHAINE VIDE ''
//SI IL N'EST PAS NULL IL GARDERA SA VALEUR, par exemple "JEAN-MICHEL"
$lastname = trim($_POST['lastname'] ?? '');
$birthdate = $_POST['birthdate'] ?? '';
$biosex = $_POST['biosex'] ?? '';
$origin = $_POST['origin'] ?? '';
$description = trim($_POST['description'] ?? '');


// ON DOIT VERIFIER SI UN CHAMP N EST PAS VIDE

// SI AU MOINS UNE EST VIDE OU RETOURNE  AU FORMULAIRE AVEC UN MESSAGE D ERREUR

if (
empty($firstname) ||
empty($lastname) ||
empty($birthdate) ||
empty($biosex) ||
empty($origin) ||
empty($description)
){
//on retourne  dans le formulaire car une donnees est vide, de plus je vais rajouter une erreur en get
header("Location:../../views/children/add_children_form.php?status=danger&message=Le formulaire est mal remplie.");
exit;
}
// on va mettre les données dans la base de données
//Appelle de pdo

$pdo = new PDO("mysql:host=localhost:8081;dbname=orphelinat;charset=utf8", "root", "1234");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}else{
    //ON EST EJECTE DU SCRIPT SI ON ACCEDE DIRECTEMENT PAR LA PAGE
    header("Location: ../../index.php");
    exit;
}
//fichier qui ajoute les enfants dans la base de données

