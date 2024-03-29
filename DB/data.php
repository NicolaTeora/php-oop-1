<!-- TODO: spostare qui i dati dichiarati -->
<?php

require_once __DIR__ . '/../Models/Production.php';
require_once __DIR__ . '/../Models/Type.php';
require_once __DIR__ . '/../Models/Movie.php';
require_once __DIR__ . '/../Models/SerieTv.php';

// Aggiornate le informazioni stampate a schermo con il genere.
// Facciamo in modo che la classe Production accetti più di un genere
$types = [
    $type_action = new Type("action","The action film is a film genre which predominantly features chase sequences, fights, shootouts, explosions, and stunt work"),
    $type_drama = new Type("drama", "Dramas follow a clearly defined narrative plot structure, portraying real-life scenarios or extreme situations with emotionally-driven characters"),
    $type_comedy = new Type("comedy","A comedy film is a category of film that emphasizes humor")
];

// Istanziate poi, almeno due, oggetti Production e stampate a schermo i loro valori.
$superman = new Movie("Superman", "eng", 9, $type_action, '€128', 180);
$batman = new Movie("Batman", "eng", 8.5, $type_action, '€225', 195);
$la_vita_è_bella = new Movie("La vita è bella", "ita", 9.5, $type_comedy, '€98', 110);
$spiderman = new SerieTv("Spiderman", "eng", 7.5, $type_action, 10);
//var_dump($spiderman);

//exit;
# lista di produzioni
$films = [
    $batman, 
    $superman, 
    $la_vita_è_bella,
    $spiderman,
];
