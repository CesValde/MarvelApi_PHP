<?php

    require_once "funciones.php" ;

    const API_URL = "https://whenisthenextmcufilm.com/api" ;
    $data = getData(API_URL) ;
    $untilMessage = getMessageuntil($data["days_until"]) ;

   /*  echo "." ; */
?>


    <!DOCTYPE html>
    <html lang="en">
    <?php require "head.php"; ?> 

    <main> 
        <!-- <pre style="font-size: 12px; overflow: scroll; height: 300px">
            <?php var_dump($data) ;  // mostramos los datos ?>
        </pre> -->

        <section> 
            <img src="<?= $data["poster_url"] ; ?>" width="300" alt="Poster de <?= $data["title"] ; ?>"
            style="border-radius: 16px" />
        </section>

        <hgroup>    
            <h3> <?= $data["title"]; ?> <?= $untilMessage ; ?></h3>
            <p> Fecha de estreno: <?= $data["release_date"]; ?> </p>
            <p> La siguiente es: <?= $data["following_production"]["title"]; ?> </p>
        </hgroup>
    </main> 



    <body>
        <h1> PROXIMO ESTRENO </h1>
    </body>
    </html>