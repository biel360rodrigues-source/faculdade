<?php

class Pessoa {
    public $altura;

    public function __construct($altura) {
        $this->altura = $altura;
    }
}

class Brinquedo {

    public $alturaMin = 1.60;

    public function checarAltura($pessoa) {

        if ($pessoa->altura >= $this->alturaMin) {
            echo "Essa pessoa está autorizada a entrar<br>";
        } else {
            echo "Essa pessoa não está autorizada a entrar<br>";
        }

    }
}

$cliente = new Pessoa(1.40);
$montanhaRussa = new Brinquedo();

$montanhaRussa->checarAltura($cliente);

?>