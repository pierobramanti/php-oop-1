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
        return "The movie's title is " . $this->title . ", it was directed by " . $this->director . ", and the genre is " . $this->genre . ".";

    }

}

// Creazione degli oggetti
$movie1 = new Movie("La finestra sul cortile", "Alfred Hitchcock", "Thriller");
$movie2 = new Movie("Il diavolo veste Prada", "David Frankel", "Commedia");

// Stampa dei dettagli degli oggetti
echo $movie1->details();
echo "<hr>";
echo $movie2->details();

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