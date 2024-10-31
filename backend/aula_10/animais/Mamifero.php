<?php
// Mamifero.php

require_once 'Animal.php';

class Mamifero extends Animal {
    protected $quantidade_patas;

    public function __construct($nome, $idade, $cor, $quantidade_patas) {
        parent::__construct($nome, $idade, $cor); // Chama o construtor da classe pai
        $this->quantidade_patas = $quantidade_patas;
    }
}
?>
