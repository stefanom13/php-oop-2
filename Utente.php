<?php

class Utente {
    public $nome;
    public $cognome;
    public $indirizzo;


    function __construct($_nome, $_cognome, $_indirizzo){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo = $_indirizzo;
    }

    
}

?>