<?php 

    function renderTemplate($template, $data = []) {
        /* Extract: -> arrays asociativos en variables
            $data = [title => 'ejemplo'] ;
            $title = 'ejemplo' ; 
        */
        extract($data) ;
        require "templates/$template.php" ;
    }

    function getData($url) {
        $result = file_get_contents($url) ;
        $data = json_decode($result, true) ;
        return $data ;
    }

    function getMessageUntil($days) {
        return match(true) {
            $days == 0 => "Dia de cine 😎", 
            $days == 1 => "Un dia para el estreno! ", 
            $days < 7 => "Una semanaaa! ", 
            $days < 30 => "Este mes vuelve deadpool 😈",
            default => "$days dias hasta el estreno 🤬",
        } ;
    }
?> 

    <script>
        function actualizarCuentaRegresiva() {
            // Fecha y hora objetivo para la cuenta regresiva (en formato ISO 8601)
            var fechaObjetivo = new Date("2024-07-24T00:00:00");
            var fechaActual = new Date();
            var diferencia = fechaObjetivo - fechaActual;
            
            // Calcula los días, horas, minutos y segundos restantes
            var dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
            var horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
            var segundos = Math.floor((diferencia % (1000 * 60)) / 1000);
            
            document.getElementById("cuenta-regresiva").innerHTML = "Faltan " + dias + " días, " + horas + " horas, " + minutos + " minutos y " + segundos + " segundos para el evento.";
        }
        // Actualiza la cuenta regresiva cada segundo
        setInterval(actualizarCuentaRegresiva, 1000);
    </script>