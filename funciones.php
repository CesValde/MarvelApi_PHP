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