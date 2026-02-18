<?php

namespace app\classes;


class Paciente extends Pessoa
{
    public function __construct(
        string $nome, 
        string $cpf, 
        int $idade,
        private string $convenio
    )
    {
        parent::__construct($nome, $cpf, $idade);
    }

    public function getConvenio(): string
    {
        return $this->convenio;
    }

    public function apresentar(): string
    {
        return "Paciente: {$this->getNome()} | Idade:{$this->getIdade()} | Convênio: {$this->convenio}";
    }
    
}
