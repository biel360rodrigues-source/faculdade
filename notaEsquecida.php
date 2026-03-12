<?php

class Notas {

    public $nota1 = true;
    public $nota2 = false;

    public function checarNotas() {

        if ($this->nota1 && $this->nota2) {
            echo "Todas as notas foram atribuídas!\n";
        } 
        else if (!$this->nota1 && $this->nota2) {
            echo "A primeira nota não foi atribuída!\n";
        } 
        else if ($this->nota1 && !$this->nota2) {
            echo "A segunda nota não foi atribuída!\n";
        } 
        else {
            echo "Nenhuma nota foi atribuída!\n";
        }

    }
}

$check = new Notas();
$check->checarNotas();

?>