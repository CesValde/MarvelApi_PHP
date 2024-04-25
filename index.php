<?php

    require_once "consts.php" ;
    require_once "funciones.php" ;
    require "clases/NextMovie.php" ;

    /*  Sacabamos los datos en variables ahora se saca con la clase NextMovie
        $data = getData(API_URL) ;
        $until_message = getMessageUntil($data["days_until"]) ; 
    */

    $nextMovie = NextMovie::fetchAndCreateMovie(API_URL) ;
    $nextMovieData = $nextMovie -> getData() ;
?>

    <?php renderTemplate('header', ['title' => $nextMovieData['title']]); ?> 
    <!-- Unimos el array $nextMovieData con el mensaje que retorna la funcion -->
    <?php renderTemplate("main", array_merge($nextMovieData, ["untilMessage" => $nextMovie -> getMessageUntil()])); ?>
    <?php renderTemplate("estilos"); ?>
