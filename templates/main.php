    <main> 
        <section> 
            <img src="<?= $poster_url ; ?>" width="300" alt="Poster de <?= $title ; ?>"
            style="border-radius: 16px"/>
        </section>

        <hgroup>    
            <h3> <?= $title; ?> .. <?= $untilMessage ; ?></h3>  <!-- $untilMessage viene del index2 -->
            <p> Fecha de estreno: <?= $release_date; ?> </p>    <!-- $variable vienen del extract $data de la api -->
            <p> La siguiente es: <?= $following_production; ?> </p> <!-- $variable vienen del extract $data de la api -->
        </hgroup>
    </main>