<?php
/**
 * Génère l'entête HTML avec un titre personalisé
 * @param êtitle
 * @return void
 */


function head_with_title($title = "Orphelinat")
{
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="http://localhost:8080/orphelinat/">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <!-- On va linker notre css qui est dans public/build -->
        <!-- LE HTML NE SAIS PAS LIRE LE SASS/SCSS DONC TOUJOURS LINKET LE CSS -->
        <!-- <link rel="stylesheet" href="public/build/style.css"> -->
        <title><?=$title?></title>
    </head>

    <body>
    <?php
}

    ?>