<?php  

// Create una classe Genere (gli attributi potrebbero essere nome e descrizione) 
// e fate in modo che la classe Production accetti un genere nel costruttore

class Type {
    # variabili o proprietà
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this-> name = $name;
        $this-> description = $description;
    }
}