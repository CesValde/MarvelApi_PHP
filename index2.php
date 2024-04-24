<?php 

    const API_URL = "https://whenisthenextmcufilm.com/api" ;
    $result = file_get_contents(API_URL) ;
    $data = json_decode($result, true) ;
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title> Cual es la proxima pelicula de marvel ? </title>
        <!-- pico css  -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/> -->
    </head>

    <main> 
        <!-- <pre style="font-size: 12px; overflow: scroll; height: 300px">
            <?php var_dump($data) ;  // mostramos los datos ?>
        </pre> -->

        <section> 
            <img src="<?= $data["poster_url"] ; ?>" width="300" alt="Poster de <?= $data["title"] ; ?>"
            style="border-radius: 16px" />
        </section>

        <hgroup>    
            <h3> <?= $data["title"]; ?> Se estrena en <?= $data["days_until"] ; ?> dias </h3>
            <p> Fecha de estreno: <?= $data["release_date"]; ?> </p>
            <p> La siguiente es: <?= $data["following_production"]["title"]; ?> </p>
        </hgroup>
    </main> 



    <body>
        <h1> PROXIMO ESTRENO </h1>
    </body>
    </html>