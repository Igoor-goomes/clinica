<?php
namespace app\classes;

class Recepcionista extends Pessoa {

    public function __construct(
        string $nome, 
        string $cpf, 
        int $idade,
        private string $setor
    )
    {
        parent::__construct($nome, $cpf, $idade);
    }

    public function getSetor(): string {return $this->setor;}

    public function apresentar(): string
    {
        return "Nome: {$this->getNome()} | Setor: {$this->setor}";
    }
}