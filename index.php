<?php

// Classe Movie
class Movie {

    // Variabili d'istanza
    public $title;
    public $director;
    public $genre;

    // Costruttore
    public function __construct($_title, $_director, $_genre) {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    // Metodo pubblico
    public function details() {
        return "The Movie's title is: " . $this->title . ", it's been directed by: " . $this->director . " and the genre is: " . $this->genre . ".";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>