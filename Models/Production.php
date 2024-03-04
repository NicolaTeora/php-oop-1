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
    # costruttore
    function __construct($title, $lenguage, $vote) {
        $this->title = $title;
        $this->lenguage = $lenguage;
        $this->vote = $vote;
    }
    # metodi
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