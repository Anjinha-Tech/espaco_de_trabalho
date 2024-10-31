<?php
require_once 'Animal.php';

class Mamifero extends Animal {
    // Atributo exclusivo da classe Mamifero.
    protected $patas;

    // Método Construtor que inclui os atributos do Animal e Mamifero
    public function __construct($nome, $idade, $cor, $patas) {
        // Chamando o construtor da classe Animal (PAI)
        parent::__construct($nome, $idade, $cor);
        $this->patas = $patas;
    }

        // Método exclusivo da classe Animal
    public function comunicar() {
        echo "Mamifero fazendo barulho \n";
    }
}
?>



