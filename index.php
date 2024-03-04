<?php 
//create un file index.php in cui è definita una classe Production
class Production {
    
    //All'interno della classe dovrete gestire un titolo, una lingua e un voto
    //La classe deve avere le sue variabili d'istanza
    # variabili o proprietà
    public $title;
    public $lenguage;
    public $vote;

    // il costruttore e i metodi.
    # metodi
    function __construct($title, $lenguage, $vote) {
        $this->title = $title;
        $this->lenguage = $lenguage;
        $this->vote = $vote;
    }
    function get_title(){ return $this->title; }
    function get_lenguage(){ return $this->lenguage;}
    function get_vote() { return $this->vote; }
}

// Istanziate poi almeno due oggetti Production e stampate a schermo i loro valori.
$film_batman = new Production("superman", "eng", "9");
/*
echo "Title: " . $film->get_title() . " - ";
echo "Lenguage: " . $film->get_lenguage() . " - ";
echo "Vote: " . $film->get_vote();

echo "<br>";
*/
$film_superman = new Production("batman", "eng", "8,5");
/*
echo "Title: " . $film->get_title() . " - ";
echo "Lenguage: " . $film->get_lenguage() . " - ";
echo "Vote: " . $film->get_vote();
*/
$film_la_vita_è_bella = new Production("la vita è bella", "ita", "9,5");

# lista di produzioni
$films = [$film_batman, $film_superman, $film_la_vita_è_bella];

var_dump($films);
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
    <!-- cdn vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">
        <div class="container">
            <h1>{{ titleApp }}</h1>
            <ul>
    
            </ul>
            
        </div>
    </div>

<!-- mian.js -->
<script src="./main.js"></script>
<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>