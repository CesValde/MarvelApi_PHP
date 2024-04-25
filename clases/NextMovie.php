<?php

    class NextMovie {
        public function __construct(
        private $title,
        private $days_until,
        private $following_production,
        private $release_date,
        private $poster_url,
        private $overview,
    ) {}
        public function getMessageUntil() {
            $days = $this -> days_until ;

            return match(true) {
                $days == 0 => "Dia de cine 🎉", 
                $days == 1 => "Un dia para el estreno! 😈", 
                $days < 7 => "Una semanaaa! 👀", 
                $days < 30 => "Este mes vuelve deadpool 😎",
                default => "$days dias hasta el estreno 🤬",
            } ;
        }

        public static function fetchAndCreateMovie($apiUrl) {
            $result = file_get_contents($apiUrl) ;  /* Para hacer un GET de la API */
            /* convierte una cadena JSON en un objeto PHP o en un array asociativo, dependiendo del 
                valor del segundo parámetro opcional.
                true -> array asociato 
                false -> objeto
            */
            $data = json_decode($result, true) ;

            return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"]['title'] ?? "Desconocido",
            $data["release_date"],
            $data["poster_url"],
            $data["overview"],
            );
        }

        public function getData() {
            /* Obtiene todas las propiedades del objeto */
            return get_object_vars($this);
        }
    }