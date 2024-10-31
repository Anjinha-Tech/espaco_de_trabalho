<?php
// class -> utilizado para indicar que será usada uma classe.
class Animal {
    // Abaixo estão os atributos do Animal.
    protected $nome;
    protected $idade;
    protected $cor;

    // Método construtor com todos os atributos
    public function __construct($nome, $idade, $cor) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cor = $cor;
    }

    // Método exclusivo da classe Animal
    public function comunicar() {
        echo "Fazendo barulho \n";
    }
}
?>