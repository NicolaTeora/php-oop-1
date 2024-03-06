<?php

require_once __DIR__ . "/Production.php";
// Aggiungete al lavoro di ieri le classi Movie e TVSerie.
# La classe Movie gestisce due proprietà: profitti e durata.
# Facciamo in modo che Movie e TVSerie ereditino le proprietà di base dalla classe Production.

class SerieTv extends Production {
    # variabili o proprietà
    public $seasons;

    // il costruttore e i metodi.
    # costruttore
    function __constructor($title, $lenguage, $vote, Type $type, $seasonsn) {
        // usare la dicitura parent:: per passare il construct della classe genitore
        // ed evitare il polimorfismo (sovrascrittura secondo W3S)
        parent::__constructor($title, $lenguage, $vote, $type);

        #aggiungere gli attributi propri della classe figlia
        $this->seasons = $seasons;
    }

    # metodi
    function get_seasons(){ return $this->seasons; }
}