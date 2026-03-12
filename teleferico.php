<?php

class Teleferico {

    public $destino;
    public $numPassageiros;

    public function __construct($destino, $numPassageiros){
        $this->destino = $destino;
        $this->numPassageiros = $numPassageiros;
    }

    public function viagem(){
        echo "Deslocando-se para {$this->destino}. Número de passageiros: {$this->numPassageiros}.<br>";
    }

}

$cabine = new Teleferico("Ponto Turístico 3", 4);

$cabine->viagem();

?>