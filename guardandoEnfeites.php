<?php

class Enfeites{

    public $nome;
    public $quantidade;
    public $guardado = false;

    public function guardarEnfeites(){
        if ($this->guardado == false){
            echo"Este enfeite ({$this->nome}) foi guardado no armazenamento com quantidade de {$this->quantidade}.\n";
            $guardado = true;
        }
    }

}

$estrela = new Enfeites();

$estrela->nome = "Estrela";
$estrela->quantidade = 3;

$estrela->guardarEnfeites();

?>