<!-- TODO: spostare qui i dati dichiarati -->
<?php

require_once __DIR__ . '/../Models/Production.php';
require_once __DIR__ . '/../Models/Type.php';
require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/SerieTv.php';

// Aggiornate le informazioni stampate a schermo con il genere.
$type_film_action = new Type("action","The action film is a film genre which predominantly features chase sequences, fights, shootouts, explosions, and stunt work");
$type_film_drama = new Type("drama", "Dramas follow a clearly defined narrative plot structure, portraying real-life scenarios or extreme situations with emotionally-driven characters");

// Istanziate poi, almeno due, oggetti Production e stampate a schermo i loro valori.
$film_superman = new Movie("Superman", "eng", 9, $type_film_action, '€128', 180);
$film_batman = new Movie("Batman", "eng", 8.5, $type_film_action, '€225', 195);
$film_la_vita_è_bella = new Movie("La vita è bella", "ita", 9.5, $type_film_drama, '€98', 110);
$film_spiederman = new SerieTv("Spiderman", "eng", 7.5, $type_film_action, 10);

//var_dump($film_spiederman);
//exit;
# lista di produzioni
$films = [
    $film_batman, 
    $film_superman, 
    $film_la_vita_è_bella,
    $film_spiederman,
];