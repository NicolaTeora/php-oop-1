<?php 
class Production {
    
    //All'interno della classe dovrete gestire un titolo, una lingua e un voto
    //La classe deve avere le sue variabili d'istanza
    # variabili o proprietà
    public $title;
    public $lenguage;
    public $vote;
    public $type;

    // il costruttore e i metodi.
    # costruttore
    function __construct($title, $lenguage, $vote, Type $type) {
        $this->title = $title;
        $this->lenguage = $lenguage;
        $this->vote = $vote;
        $this->type = $type;
    }
    # metodi
    function get_title(){ return $this->title; }
    function get_lenguage(){ return $this->lenguage;}
    function get_vote() { return $this->vote; }
    function get_type() { return $this->type; }
}

?>