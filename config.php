<?php


// on va définir l'adresse de la racine comme une variable globale constante

define('ROOT', __DIR__ . '/');

//Fonction qui charge un fichier

function load(string $file){
 require ROOT . $file;
}

function start_page(string $title) {
    load('head.php');
    head_with_title($title);
    load('nav.php');
}