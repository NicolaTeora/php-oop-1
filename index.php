<!-- create un file index.php in cui è definita una classe Production -->

<?php 

include __DIR__ . '/Models/Production.php'; 
include __DIR__ . '/Models/Type.php'; 

// Aggiornate le informazioni stampate a schermo con il genere.
$type_film_action = new Type("action","The action film is a film genre which predominantly features chase sequences, fights, shootouts, explosions, and stunt work");
$type_film_drama = new Type("drama", "Dramas follow a clearly defined narrative plot structure, portraying real-life scenarios or extreme situations with emotionally-driven characters");

// Istanziate poi, almeno due, oggetti Production e stampate a schermo i loro valori.
$film_batman = new Production("superman", "eng", "9", $type_film_action);

$film_superman = new Production("batman", "eng", "8,5", $type_film_action);

$film_la_vita_è_bella = new Production("la vita è bella", "ita", "9,5", $type_film_drama);

var_dump($film_batman);

# lista di produzioni
$films = [$film_batman, $film_superman, $film_la_vita_è_bella];

?>

<!-- BONUS 1
Creare un layout completo per stampare a schermo una lista di produzioni. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <div class="container">
            <h1>OPP programming</h1>
            <?php foreach($films as $film): ?>
            <ul>
                <li>
                    <!-- titolo -->
                </li>
                <li>
                    <!-- lingua -->
                </li>
                <li>
                    <!-- voto -->
                </li>
                <li>
                    <!-- genere -->
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>

<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>