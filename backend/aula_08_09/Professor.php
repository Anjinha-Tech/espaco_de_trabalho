<?php

Class Professor {

    private $nome;
    private $cpf;
    private $disciplina;
    private $identificacao;

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function getNome(){
        return $this->nome;        
    }

    public function setDisciplina($disciplinaNova) {
        $this->$disciplinaNova = $disciplinaNova;
    }
    
    public function setcpf($cpfNovo) {
        $this->cpf = $cpfNovo;
    }
}

?>